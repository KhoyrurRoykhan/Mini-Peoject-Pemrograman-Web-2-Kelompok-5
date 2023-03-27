<?php

class AdminPetugas extends Controller{
    public function index(){

        $data['petugas'] = $this->model('Admin_petugas_model')->getAllPetugas();
        $data['judul'] = 'Menu Admin Petugas';
        $this->view('templates/header_admin', $data );
        $this->view('admin_petugas/index',$data);
        $this->view('templates/footer');
    }

    public function input(){

        if($this->model('Admin_petugas_model')->inputDataPetugas($_POST) > 0 ){
            header('Location: '. BASEURL . '/Adminpetugas');
            //$data['obat'] = $this->model('Admin_obat_model')->getAllobat();
            //$this->view('admin_obat/index',$data);
            
            
        }
    }

    public function detail($id){

        $data['petugas'] = $this->model('Admin_petugas_model')->getPetugasById($id);
        $data['judul'] = 'Menu Admin Detail Petugas';
        $this->view('templates/header_admin', $data );
        $this->view('admin_petugas/detail',$data);
        $this->view('templates/footer_detail');
    }

    public function update($id){

        $data['petugas'] = $this->model('Admin_petugas_model')->getPetugasById($id);
        $data['judul'] = 'Menu Admin Update Petugas';
        $this->view('templates/header_admin', $data );
        $this->view('admin_petugas/update',$data);
        $this->view('templates/footer_detail');
    }

    public function ubah(){

        if($this->model('Admin_petugas_model')->ubahDataPetugas($_POST) > 0 ){
            header('Location: '. BASEURL . '/Adminpetugas');
        }

    }

    public function delete($id){

        if ($this->model('Admin_petugas_model')->deletePetugasById($id) > 0 ) {
            header('Location: '. BASEURL . '/Adminpetugas');
            
            exit;
        }
    }

    

}