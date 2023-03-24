<?php 

class Poli_model {
    private $table = 'poli';

    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllPoli()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getPoliById($id){
        //$this->db->query('SELECT * FROM '. $this->table .' WHERE id_poli=:id');
        $this->db->query('select poli.id_poli, poli.nama_poli, dokter.nama_dokter from poli, dokter where poli.id_dokter = dokter.id_dokter and poli.id_poli=:id');
        $this->db->bind('id',$id);
        return $this->db->single();
    }


}