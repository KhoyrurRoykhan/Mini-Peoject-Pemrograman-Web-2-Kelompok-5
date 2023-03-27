<?php 

class Login_model {
    private $table = 'login';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllLogin(){
        $this->db->query('SELECT * FROM LOGIN WHERE id = 1');
        return $this->db->single();
    }
    public function confirmlog($data){
        $input= array("username"=>$data['username'], "password"=>$data['password']);
        return $input;
    }
}