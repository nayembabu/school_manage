<?php

namespace App\Controllers;
use App\Models\ClassModel;


class ClassController extends BaseController
{ 

    public function __construct() {
        parent::__construct();
        $this->classModel = new ClassModel();
    }

    public function index()
    {
        $data['class'] = $this->classModel->findAll();
        $this->template->admin_panel('class_file/class_view', $data);
    }

    function insert_class_infos()
    {
        $data = [
            'class_name_s' => $this->request->getPost('className'),
            'class_roman' => $this->request->getPost('classRomans'),
            'numerical' => $this->request->getPost('classNosss'),
            'create_time' => time(),
            'create_date' => date('Y-m-d')
        ];

        if ($this->classModel->insert($data)) {
            return redirect()->to('/class');
        } else {
            return redirect()->back()->withInput();
        }        
    }


}
