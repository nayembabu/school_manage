<?php 

namespace App\Libraries;

class Template
{
    public function front_panel($view, $data = [])
    {
        echo view('front/head', $data);
        echo view('front/' . $view, $data);
        echo view('front/foot', $data);
    }

    public function admin_panel($view, $data = [])
    {
        echo view('admin/head', $data);
        echo view('admin/' . $view, $data);
        echo view('admin/foot', $data);
    }
}
