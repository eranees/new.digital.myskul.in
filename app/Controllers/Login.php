<?php

namespace App\Controllers;

use App\Models\LoginModel;
use App\Controllers\BaseController;

class Login extends BaseController
{
    private $session;
    public function __construct()
    {
        $this->session = session();
    }

    public function index()
    {
        // $password = 'admin';
        // $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        // echo $hashedPassword;
        if ($this->session->has('email')) {
            return redirect()->to('dashboard');
        }
        return view('Login/index');
    }
    public function auth()
    {
        $validation = \Config\Services::validation();
        // Set validation rules
        $validation->setRules([
            'email' => 'required',
            'password' => 'required'
        ]);

        // Validate the submitted form data
        if (!$validation->withRequest($this->request)->run()) {
            // Validation failed, redirect back with errors
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }
        // Retrieve the submitted login form data
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        // Load the User model
        $loginModel = new LoginModel();

        // Check the credentials
        $user = $loginModel->checkCredentials($email, $password);

        // Perform login validation and authentication
        if ($user) {
            $sessionData = [
                'user_id' => $user['id'],
                'email'   => $user['email'],
                'name'    => $user['name']
            ];
            $session = session();
            $session->set($sessionData);
            // Login successful, redirect to a dashboard or home page
            return redirect()->to('dashboard');
        } else {
            // Login failed, display an error message
            return redirect()->back()->with('error', 'Invalid username or password.');
        }
    }
    public function logout()
    {
        if ($this->session->has('email')) {
            $this->session->destroy();
            return redirect()->to('/');
        }
    }
}
