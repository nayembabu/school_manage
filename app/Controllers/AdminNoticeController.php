<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\NoticeModel;

class AdminNoticeController extends BaseController
{
    protected $noticeModel;
    public function __construct(){
        parent::__construct();
        $this->noticeModel = new NoticeModel();
    }
    public function index()
    {
        $data['allNotice'] = $this->noticeModel->findAll();
        $this->template->admin_panel('notice',$data);
    }
    public function edit($id)
    {
        $data['notice'] = $this->noticeModel->find($id);
        $this->template->admin_panel('edit_notice',$data);
    }
    public function update($id)
    {
        $data = [
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description')
        ];
        $this->noticeModel->update($id, $data);
        return redirect()->to('/admin/notice');
    }
    public function delete($id){
    // Get the notice to find the image path
        $notice = $this->noticeModel->find($id);

        if ($notice && !empty($notice['featured_image'])) {
            $imagePath = ROOTPATH . $notice['featured_image'];
            if (file_exists($imagePath)) {
                @unlink($imagePath); // Delete the image file
            }
        }

        $this->noticeModel->delete($id);
        return redirect()->to('/admin/notice');
    }
    public function create()
    {
        $this->template->admin_panel('create_notice');
    }
    public function submit(){
        $image = $this->request->getFile('featured_image');
        $imageUrl = null;

        if ($image && $image->isValid() && !$image->hasMoved()) {
            $newName = $image->getRandomName();
            $image->move(ROOTPATH . 'include/myimg/notice', $newName);
            $imageUrl = 'include/myimg/notice/' . $newName; // Added slash for correct path
        }

        $data = [
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
            'featured_image' => $imageUrl
        ];
        $this->noticeModel->insert($data);
        return redirect()->to('/admin/notice');
    }
}
