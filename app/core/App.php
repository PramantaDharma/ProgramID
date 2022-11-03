<?php

class App{
    protected $controller = 'Home';
    protected $method = 'index';
    protected $params = [];

    public function __construct() {
       $url = $this->parse_url();
       if( file_exists('../controllers' . $url[0] . ' .php') ) {    
        $this->controller = $url[0];
        unset($url[0]);
       } 

       require_once '../controllers' . $this->controller . '.php';
       $this->controller = new $this->controller;

    // method
    }
    // pretty url
    public function parse_url() {

        if( isset($_GET['url'] ))
        $url = rtrim($_GET['url'] , '/');
        $url = filter_var($url, FILTER_SANITIZE_URL);
        $url = explode('/', $url);
        return $url;
    }
}