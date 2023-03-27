<?php

class AdminObat extends Controller{
    public function index(){

        $data['obat'] = $this->model('Admin_obat_model')->getAllobat();
        $data['judul'] = 'Menu Admin Obat';
        $this->view('templates/header_admin', $data );
        $this->view('admin_obat/index',$data);
        $this->view('templates/footer');
    }

    public function input(){

        if($this->model('Admin_obat_model')->inputDataObat($_POST) > 0 ){
            header('Location: '. BASEURL . '/AdminObat');
            //$data['obat'] = $this->model('Admin_obat_model')->getAllobat();
            //$this->view('admin_obat/index',$data);
            
            
        }
    }

    public function detail($id){

        $data['obat'] = $this->model('Admin_obat_model')->getobatById($id);
        $data['judul'] = 'Menu Admin Detail Obat';
        $this->view('templates/header_admin', $data );
        $this->view('admin_obat/detail',$data);
        $this->view('templates/footer_detail');
    }

    public function update($id){

        $data['obat'] = $this->model('Admin_obat_model')->getobatById($id);
        $data['judul'] = 'Menu Admin Update Obat';
        $this->view('templates/header_admin', $data );
        $this->view('admin_obat/update',$data);
        $this->view('templates/footer_detail');
    }

    public function ubah(){

        if($this->model('Admin_obat_model')->ubahDataObat($_POST) > 0 ){
            header('Location: '. BASEURL . '/AdminObat');
        }

    }

    public function delete($id){

        if ($this->model('Admin_obat_model')->deleteObatById($id) > 0 ) {
            header('Location: '. BASEURL . '/AdminObat');
            
            exit;
        }
    }

    

}