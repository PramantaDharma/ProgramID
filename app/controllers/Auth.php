<?php

class Auth extends Controller {
    public function index()
    {
        $data['title'] = 'Login';
        $this->view('template/header', $data);
        $this->view('template/navbar');
        $this->view('auth/login');
        $this->view('template/footer');
    }
    public function register() {
        $data['title'] = 'Register';
        $this->view('template/header', $data);
        $this->view('template/navbar');
        $this->view('auth/register');
        $this->view('template/footer');
    }
}