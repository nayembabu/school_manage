<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\StudentAddFromAdminPanelModel;
use App\Models\StudentAdmissionModel;
use App\Models\ClassModel;
use App\Models\StudentSearchModel;

class StudentSearchController extends BaseController
{
    protected $StudentAdmissionModel;
    protected $ClassModel;
    protected $StudentSearchModel;
    public function __construct(){
        parent::__construct();
        $this->StudentAdmissionModel = new StudentAdmissionModel();
        $this->ClassModel = new ClassModel();
        $this->StudentSearchModel = new StudentSearchModel();
    }

    public function class_dropdown_search()
    {
        $dataa['class_dropdown_search'] = $this->ClassModel->findAll();
        $this->template->admin_panel('student_search', $dataa);
    }
    public function student_info_in_modal()
    {
        $class_name_auto_id     = $this->request->getPost('class_name_auto_id');
        $data['student_info']   = $this->StudentSearchModel->where('class_iddddd', $class_name_auto_id )->findAll();
        return json_encode($data);
    }
    

}
