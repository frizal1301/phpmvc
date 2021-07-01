<?php

class Home extends Controller{
    // method default
    public function index(){
        $data['judul'] = "Home";
        $this->view('templates/header',$data);
        $this->view('home/index');
        $this->view('templates/footer');
    }
}