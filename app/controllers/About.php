<?php

class About extends Controller{
    public function index($first="Fahru", $last="Rizal"){
        $data['first'] = $first;
        $data['last'] = $last;
        $data['judul'] = "About";
        $this->view('templates/header',$data);
        $this->view('about/index',$data);
        $this->view('templates/footer');
    }
    public function page(){
        $data['judul'] = "Page";
        $this->view('templates/header',$data);
        $this->view('about/pages');
        $this->view('templates/footer');
    }
}