<?php

class Login extends Controller{
    public function index(){

        $data['login'] = $this->model('Login_model')->getAllLogin();
        $this->view('login/index', $data);

        
    }

    public function confirm(){
        $data['input'] = $this->model('Login_model')->confirmlog($_POST);
        $db['login'] = $this->model('Login_model')->getAllLogin();
        var_dump($data['input']['username']);
        var_dump($db['login']['username']);
        if($data['input']['username'] == $db['login']['username']){
            header('Location: '. BASEURL . '/admindokter');
        }
    }
}