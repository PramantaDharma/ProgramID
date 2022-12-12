<?php

class Admin extends Controller {
    public function index() {
        $data['title'] = 'Admin Home';
        $this->view('template/header', $data);
        $this->view('admin/index');
        $this->view('template/footer');
    }
    
    public function category() {
        $this->view('template/header');
        $this->view('admin/category');
        $this->view('template/footer');
    }
}