<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    {
        $session = session();
        if (!$session->has('email')) {
            return redirect()->to('/');
        }
        $data['name'] = $session->get('name');
        return view('Dashboard/index', $data);
    }
}
