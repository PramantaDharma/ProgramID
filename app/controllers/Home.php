<?php

class Home extends Controller {
    public function index()
    {
        $this->view('home/index');
    }
    public function materi() {
        $this->view('template/header');
        $this->view('template/navbar');
        $this->view('home/materi');
        $this->view('template/footer');
    }
}