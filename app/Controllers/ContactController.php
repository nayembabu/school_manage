<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ContactModel;

class ContactController extends BaseController
{
    protected $contactModel;
    public function __construct(){
        parent::__construct();
        $this->contactModel = new ContactModel();
    }
    
    public function index()
    {
        $this->template->front_panel('contact');
    }
    public function submit(){
        $data = [
            'first_name' => $this->request->getPost('first_name'),
            'last_name' => $this->request->getPost('last_name'),
            'email' => $this->request->getPost('email'),
            'phone' => $this->request->getPost('phone'),
            'subject' => $this->request->getPost('subject'),
            'department' => $this->request->getPost('department'),
            'message' => $this->request->getPost('message'),
            'created_at' => date('Y-m-d H:i:s')
        ];

        if ($this->contactModel->insert($data)) {
            return redirect()->to('/contact')->with('success', 'Message sent successfully');
        } else {
            return redirect()->to('/contact')->with('error', 'Failed to send message');
        }
    }
}
