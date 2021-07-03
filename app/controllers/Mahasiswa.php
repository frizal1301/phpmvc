<?php

class Mahasiswa extends Controller{
    public function index(){
        $data['judul'] = "Data Mahasiswa";
        $data['mhs'] = $this->model('Mahasiswa_model')->getAllMhs();
        $this->view('templates/header',$data);
        $this->view('mahasiswa/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id){
        $data['judul'] = "Data Mahasiswa";
        $data['mhs'] = $this->model('Mahasiswa_model')->getMhsById($id);
        $this->view('templates/header',$data);
        $this->view('mahasiswa/detail', $data);
        $this->view('templates/footer');
    }

    public function tambah(){
        if($this->model('Mahasiswa_model')->tambahDataMahasiswa($_POST) > 0){
            header("Location:". BASEURL . '/mahasiswa');
            exit;
        }
    }
}