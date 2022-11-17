<?php

// class App{
//     protected $controller = 'Home';
//     protected $method = 'index';
//     protected $params = [];

//     public function __construct() {
//        $url = $this->parse_url();
//        if( file_exists('../controllers' . $url[0] . ' .php') ) {    
//         $this->controller = $url[0];
//         unset($url[0]);
//        } 

//        require_once '../controllers' . $this->controller . '.php';
//        $this->controller = new $this->controller;

//     method
//     }
//     pretty url
//     public function parse_url() {

//         if( isset($_GET['url'] ))
//         $url = rtrim($_GET['url'] , '/');
//         $url = filter_var($url, FILTER_SANITIZE_URL);
//         $url = explode('/', $url);
//         return $url;
//     }
// }

// require("../app/controller/Home.php");


class App {
    protected $controller =  "Home",
              $method = "index",
              $params = [];

    public function __construct() {
        $url = $this->parseUrl();

        if(isset($url[0])) {
            if (file_exists("../app/controllers/" . ucwords($url[0]) . ".php")) {
                $this->controller = $url[0];
                unset($url[0]);
            } else {
                require("../app/controllers/Home.php");
            }
        }
        
        require_once("../app/controllers/" . $this->controller . ".php");
        $this->controller = new $this->controller;

        if(isset($url[1])) {
            if(method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        if (!empty($url)) {
            $this->params = array_values($url);
        }
        
        call_user_func_array([$this->controller, $this->method], $this->params);

        // if (! class_exists($url)) {
        //     die("Class gak ada bro");
        // }

        // echo "kamu jahat, wisnu >.< ";
        // var_dump($url);
    }

    public function parseUrl() {
        if(isset($_GET['url'])){
            $url = rtrim($_GET['url'], "/");
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $urls = explode('/', $url);
            return $urls;
        } else {
            return [$this->controller];
        }
    }
}

// $url[0] = itu merupakan object
// $url[1] = itu merupakan method



//     return $_GET["url"];
// }else {
//     return "Home";