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
    public function delete($id)
    {
        $this->noticeModel->delete($id);
        return redirect()->to('/admin/notice');
    }
    public function create()
    {
        $this->template->admin_panel('create_notice');
    }
    public function submit()
    {
        $data = [
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description')
        ];
        $this->noticeModel->insert($data);
        return redirect()->to('/admin/notice');
    }
}
