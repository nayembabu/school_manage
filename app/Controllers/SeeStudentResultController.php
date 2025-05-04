<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class SeeStudentResultController extends BaseController
{
    public function SeeStudentResult()
    {
        $this->template->front_panel('see_student_result');
    }
}
