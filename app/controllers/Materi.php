<?php

class Materi extends Controller{
    public function index()
    {
        $data['title'] = 'Materi';
        $this->view('template/header', $data);
        $this->view('template/navbar');
        $this->view('materi/index');
        $this->view('template/footer');
    }

    public function category()
    {
    
    }
}