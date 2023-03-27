<?php

class AdminPasien extends Controller{
    public function index(){
        
        $data['pasien'] = $this->model('Admin_pasien_model')->getAllPasien();
        $data['judul'] = 'Menu Admin Pasien';
        $this->view('templates/header_admin', $data );
        $this->view('admin_pasien/index',$data);
        $this->view('templates/footer');

    }

    public function input(){

        if($this->model('Admin_pasien_model')->inputDataPasien($_POST) > 0 ){
            header('Location: '. BASEURL . '/Adminpasien');
            //$data['obat'] = $this->model('Admin_obat_model')->getAllobat();
            //$this->view('admin_obat/index',$data);
            
            
        }
    }

    public function detail($id){

        $data['pasien'] = $this->model('Admin_pasien_model')->getPasienById($id);
        $data['judul'] = 'Menu Admin Pasien';
        $this->view('templates/header_admin', $data );
        $this->view('admin_pasien/detail',$data);
        $this->view('templates/footer_detail');
    }

    public function update($id){

        $data['pasien'] = $this->model('Admin_pasien_model')->getPasien($id);
        $data['judul'] = 'Menu Admin Update Pasien';
        $this->view('templates/header_admin', $data );
        $this->view('admin_pasien/update',$data);
        $this->view('templates/footer_detail');
    }

    public function ubah(){

        if($this->model('Admin_pasien_model')->ubahDataPasien($_POST) > 0 ){
            header('Location: '. BASEURL . '/Adminpasien');
        }

    }

    public function delete($id){

        if ($this->model('Admin_pasien_model')->deletePasienById($id) > 0 ) {
            header('Location: '. BASEURL . '/Adminpasien');
            
            exit;
        }
    } 

    

}