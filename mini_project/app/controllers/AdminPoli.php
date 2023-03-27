<?php

class AdminPoli extends Controller{
    public function index(){
        
        $data['poli'] = $this->model('Admin_poli_model')->getAllpoli();
        $data['judul'] = 'Menu Admin Poli';
        $this->view('templates/header_admin', $data );
        $this->view('admin_poli/index',$data);
        $this->view('templates/footer');
    }

    public function input(){

        if($this->model('Admin_poli_model')->inputDataPoli($_POST) > 0 ){
            header('Location: '. BASEURL . '/Adminpoli');
            //$data['obat'] = $this->model('Admin_obat_model')->getAllobat();
            //$this->view('admin_obat/index',$data);
            
            
        }
    }

    public function detail($id){

        $data['poli'] = $this->model('Admin_poli_model')->getpoliById($id);
        $data['judul'] = 'Menu Admin Poli';
        $this->view('templates/header_admin', $data );
        $this->view('admin_poli/detail',$data);
        $this->view('templates/footer_detail');
    }

    public function update($id){

        $data['poli'] = $this->model('Admin_poli_model')->getPoli($id);
        $data['judul'] = 'Menu Admin Update Poli';
        $this->view('templates/header_admin', $data );
        $this->view('admin_poli/update',$data);
        $this->view('templates/footer_detail');
    }

    public function ubah(){

        if($this->model('Admin_poli_model')->ubahDataPoli($_POST) > 0 ){
            header('Location: '. BASEURL . '/Adminpoli');
        }

    }

    public function delete($id){

        if ($this->model('Admin_poli_model')->deletePoliById($id) > 0 ) {
            header('Location: '. BASEURL . '/Adminpoli');
            
            exit;
        }else{
            $data['poli'] = $this->model('Admin_poli_model')->getAllPoli();
            $this->view('admin_poli/index',$data);
        }
    }

    

}