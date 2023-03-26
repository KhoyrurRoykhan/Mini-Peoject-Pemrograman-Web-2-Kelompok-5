<?php 

class Petugas_model {
    private $table = 'petugas';

    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllPetugas()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getPetugasById($id){
        $this->db->query('SELECT * FROM '. $this->table .' WHERE id_petugas=:id');
        $this->db->bind('id',$id);
        return $this->db->single();
    }


}