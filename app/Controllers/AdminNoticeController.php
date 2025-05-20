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
    public function edit()
    {
        $id = $this->request->getGet('id');
        $data['notice'] = $this->noticeModel->find($id);
        return $this->response->setJSON(['status' => 200, 'notice_C' => $data['notice']]);
        
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
    public function delete(){
    // Get the notice to find the image path
        $id = $this->request->getGet('id');
        $notice = $this->noticeModel->find($id);

        if ($notice && !empty($notice['featured_image'])) {
            $imagePath = ROOTPATH . $notice['featured_image'];
            if (file_exists($imagePath)) {
                @unlink($imagePath); // Delete the image file
            }
        }

        $deleted=$this->noticeModel->delete($id);
        if ($deleted) {
            return $this->response->setJSON(['status' => '200', 'message' => 'Notice deleted successfully']);
        } else {
            return $this->response->setJSON(['status' => '400', 'message' => 'Failed to delete notice']);
        }
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
    public function view_notice()
    {
        $id = $this->request->getPost('id');
        $data['notice_C'] = $this->noticeModel->find($id);
        return json_encode($data);
    }

    
}
