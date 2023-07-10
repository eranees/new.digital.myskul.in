<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message.php');
    }
    public function get()
    {
        // Prepare data for the JSON response
        $timestamp = time();
        $actualTime = date('Y-m-d H:i:s', $timestamp);
        $data = [
            'message' => 'Hello, world!',
            'timestamp' => $actualTime
        ];

        // Return JSON response
        return $this->response->setJSON($data);
    }
}
