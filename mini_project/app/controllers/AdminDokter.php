<?php

class AdminDokter extends Controller{
    public function index(){

        $data['dokter'] = $this->model('Admin_dokter_model')->getAlldokter();
        $data['judul'] = 'Menu Admin Dokter';
        $this->view('templates/header_admin', $data);
        $this->view('admin_dokter/index',$data);
        $this->view('templates/footer');

    }

    public function detail($id){

        $data['judul'] = 'Menu Admin Dokter';
        $data['dokter'] = $this->model('Admin_dokter_model')->getdokterById($id);
        $this->view('templates/header_admin', $data);
        $this->view('admin_dokter/detail',$data);
        $this->view('templates/footer_detail');
        
    }

    public function input(){

        if($this->model('Admin_dokter_model')->inputDataDokter($_POST) > 0 ){
            header('Location: '. BASEURL . '/Admindokter');
            //$data['obat'] = $this->model('Admin_obat_model')->getAllobat();
            //$this->view('admin_obat/index',$data);
            
            
        }
    }

    public function update($id){

        $data['dokter'] = $this->model('Admin_dokter_model')->getDokter($id);
        $data['judul'] = 'Menu Admin Update Pasien';
        $this->view('templates/header_admin', $data );
        $this->view('admin_dokter/update',$data);
        $this->view('templates/footer_detail');
    }

    public function ubah(){

        if($this->model('Admin_dokter_model')->ubahDataDokter($_POST) > 0 ){
            header('Location: '. BASEURL . '/Admindokter');
        }

    }

    public function delete($id){

        if ($this->model('Admin_dokter_model')->deleteDokterById($id) > 0 ) {
            header('Location: '. BASEURL . '/Admindokter');
            
            exit;
        }
    } 

}?>