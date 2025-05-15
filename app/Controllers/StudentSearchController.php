<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\StudentAddFromAdminPanelModel;
use App\Models\StudentAdmissionModel;
use App\Models\ClassModel;
use App\Models\StudentSearchModel;
use App\Libraries\Template;

class StudentSearchController extends BaseController
{
    public function student_search()
    {
        $this->template->admin_panel('student_search');
    }
}
