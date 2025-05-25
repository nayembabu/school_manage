<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class AdminClassSectionController extends BaseController
{
    public function index()
    {
        $this->template->admin_panel('section'); 
    }
}
