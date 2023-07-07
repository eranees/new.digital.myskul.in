<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        // helper('url');
        // echo ADMIN_LTE;
        echo base_url('vendor/adminlte/dist/');
        // echo base_url();
        //return view('index');
    }
}
