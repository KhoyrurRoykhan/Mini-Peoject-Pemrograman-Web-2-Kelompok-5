<?php

class Poli extends Controller{

    public function index() {

        $data['poli'] = $this->model('Poli_model')->getAllPoli();
        $this->view('poli/index',$data);
    }

    public function detail($id){

        $data['poli'] = $this->model('Poli_model')->getPoliById($id);
        $this->view('poli/detail',$data);
    }
}