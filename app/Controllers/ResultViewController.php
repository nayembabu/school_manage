<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\StudentAdmissionModel;
// use App\Models\ClassModel;
use App\Models\ResultViewModel;

class ResultViewController extends BaseController
{
    public function result_view()
    {
        $this->template->front_panel('result_view');
    }
}
