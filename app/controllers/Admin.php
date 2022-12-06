<?php

class Admin extends Controller {
    public function index() {
        $this->view('template/header');
        $this->view('admin/admin');
        $this->view('template/footer');
    }
    
    public function category() {
        $this->view('template/header');
        $this->view('admin/category');
        $this->view('template/footer');
    }
}