<?php

class Dokter extends Controller{
    public function index(){
        $data['dokter'] = $this->model('Dokter_model')->getAllDokter();
        $this->view('dokter/index',$data);
    }
    public function detail($id){

        $data['dokter'] = $this->model('Dokter_model')->getDokterById($id);
        $this->view('dokter/detail',$data);
    }
}