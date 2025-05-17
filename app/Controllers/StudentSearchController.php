<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\StudentAddFromAdminPanelModel;
use App\Models\StudentAdmissionModel;
use App\Models\ClassModel;

class StudentSearchController extends BaseController
{
    public function __construct(){
        parent::__construct();
        $this->StudentAdmissionModel = new StudentAdmissionModel();
        $this->ClassModel = new ClassModel();
    }

    public function class_dropdown_search()
    {
        $dataa['class_dropdown_search'] = $this->ClassModel->findAll();
        $this->template->admin_panel('student_search', $dataa);
    }
    

}
