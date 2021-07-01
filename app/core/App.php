<?php

class App{
    // Default controller, method and params
    protected $controller = 'Home';
    protected $method = 'index';
    protected $params = [];
    
    
    public function __construct(){
        $url = $this->parseUrl();

        
        // mengecek apakah controller dari url itu ada
        if( file_exists('../app/controllers/' . $url[0] . '.php') ) {
            $this->controller = $url[0];
            unset($url[0]);
        }

        require_once '../app/controllers/'.$this->controller.".php";
        $this->controller = new $this->controller;

        //mengecek apakah method dari url itu ada
        if(isset($url[1]) ) {
            if(method_exists($this->controller, $url[1]) ){
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        //mengecek apakah ada parameter
        if(!empty($url)){
            $this->params = array_values($url);   
        }
        //jalankan controller dan method, serta kirimkan parameter jika ada
        call_user_func_array([$this->controller, $this->method], $this->params);
    }
    
    public function parseUrl(){
        if(isset($_GET['url']) ) {
            // membuat / terakhir hilang di url
            $url = rtrim($_GET['url'], "/");
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode("/", $url);
            
            return $url;
        }
    }
}