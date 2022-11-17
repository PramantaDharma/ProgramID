<?php

class Auth extends Controller {
    public function index()
    {
        $this->view('template/header');
        $this->view('auth/login');
        $this->view('template/footer');
    }
    public function register() {
        $this->view('template/header');
        $this->view('auth/register');
        $this->view('template/footer');
    }
}