<?php

class AdminTransaksi extends Controller{
    public function index(){

        $data['transaksi'] = $this->model('admin_transaksi_model')->getAllTransaksi();
        $data['judul'] = 'Menu Transaksi';
        $this->view('templates/header_admin', $data );
        $this->view('admin_transaksi/index',$data);
        $this->view('templates/footer');
    }

    public function detail($id){

        $data['transaksi'] = $this->model('admin_transaksi_model')->getTransaksiById($id);
        $data['judul'] = 'Menu Detail Berkas';
        $this->view('templates/header_admin', $data );
        $this->view('transaksi/detail',$data);
        $this->view('templates/footer_detail');
    }

    public function input(){

        if($this->model('Admin_transaksi_model')->inputDataTransaksi($_POST) > 0 ){
            header('Location: '. BASEURL . '/Admintransaksi');
            //$data['obat'] = $this->model('Admin_obat_model')->getAllobat();
            //$this->view('admin_obat/index',$data);
            
            
        }
    }

    public function update($id){

        $data['transaksi'] = $this->model('Admin_transaksi_model')->getTransaksi($id);
        $data['judul'] = 'Menu Admin Update Transaksi';
        $this->view('templates/header_admin', $data );
        $this->view('admin_transaksi/update',$data);
        $this->view('templates/footer_detail');
    }

    public function ubah(){

        if($this->model('Admin_transaksi_model')->ubahDataTransaksi($_POST) > 0 ){
            header('Location: '. BASEURL . '/Admintransaksi');
        }

    }

    public function delete($id){

        if ($this->model('Admin_transaksi_model')->deleteTransaksiById($id) > 0 ) {
            $data['transaksi'] = $this->model('Admin_transaksi_model')->getAllTransaksi();
            header('Location: '. BASEURL . '/Admintransaksi');
            
            exit;
        }else{
            $data['transaksi'] = $this->model('Admin_transaksi_model')->getAllTransaksi();
            $this->view('admin_transaksi/index',$data);
            exit;
        }
    }

    
}