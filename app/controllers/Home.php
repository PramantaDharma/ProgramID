<?php

class Home extends Controller {
    public function index()
    {
        $data['title'] = 'Home';
        $this->view('template/header', $data);
        $this->view('template/navbar');
        $this->view('home/index');
        $this->view('template/footer');
    }
    public function materi() {
        $data['title'] = 'Materi';
        $this->view('template/header', $data);
        $this->view('template/navbar');
        $this->view('home/materi');
        $this->view('template/footer');
    }
    public function category() {
        $data['title'] = 'Category';
        $this->view('template/header', $data);
        $this->view('template/navbar');
        $this->view('home/category');
        $this->view('template/footer');
    }
}