<?php

namespace App\Controllers;


class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    
    public function nayem() {
        // $this->template->front_panel('home');
        $this->template->admin_panel('dash');
    }


}
