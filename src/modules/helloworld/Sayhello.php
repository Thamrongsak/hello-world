<?php

namespace modules\helloworld;

class Sayhello extends \CI_Controller
{
    public function index()
    {
        $this->load->view('welcome/welcome_message');
    }
}
