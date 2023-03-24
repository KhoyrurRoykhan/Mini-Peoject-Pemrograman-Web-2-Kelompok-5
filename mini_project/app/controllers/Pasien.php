<?php

class Pasien extends Controller{
    public function index(){

        $data['pasien'] = $this->model('Pasien_model')->getAllPasien();
        $this->view('pasien/index',$data);
    }

    public function detail($id){

        $data['pasien'] = $this->model('Pasien_model')->getPasienById($id);
        $this->view('pasien/detail',$data);
    }

    
}