<?php 

class Login_model {
    private $table = 'login';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllLogin()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }
    public function confirmlog($data){
        $usr = $data['username'];
        $pass = $data['password'];
    }
}