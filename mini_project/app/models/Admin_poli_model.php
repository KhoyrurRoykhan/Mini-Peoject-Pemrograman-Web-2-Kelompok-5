<?php 

class Admin_poli_model{
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

    public function getPoli($id){
        $this->db->query('SELECT * FROM '. $this->table .' WHERE id_poli=:id');
        $this->db->bind('id',$id);
        return $this->db->single();
    }

    public function getPoliById($id){
        //$this->db->query('SELECT * FROM '. $this->table .' WHERE id_poli=:id');
        $this->db->query('select poli.id_poli, poli.nama_poli, dokter.nama_dokter from poli, dokter where poli.id_dokter = dokter.id_dokter and poli.id_poli=:id');
        $this->db->bind('id',$id);
        return $this->db->single();
    }

    public function inputDataPoli($data){
        $query = "INSERT INTO poli VALUES (:id_poli , :nama_poli, :id_dokter)";
        $this->db->query($query);
        $this->db->bind('id_poli', $data['id_poli']);
        $this->db->bind('nama_poli', $data['nama_poli']);
        $this->db->bind('id_dokter', $data['id_dokter']);
        $this->db->execute();
        return $this->db->rowCount();
      
    }

    public function ubahDataPoli($data){
        $query = "UPDATE poli SET nama_poli = :nama_poli, id_dokter = :id_dokter WHERE id_poli = :id";
        $this->db->query($query);
        $this->db->bind('nama_poli', $data['nama_poli']);
        $this->db->bind('id_dokter', $data['id_dokter']);
        $this->db->bind('id', $data['id_poli']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function deletePoliById($id){
        $this->db->query('delete from poli where id_poli=:id;');
        $this->db->bind('id',$id);
        $this->db->execute();
        return $this->db->rowCount();
    }


}