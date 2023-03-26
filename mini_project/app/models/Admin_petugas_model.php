<?php 

class Admin_petugas_model {
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

    public function inputDataPetugas($data){
        $query = "INSERT INTO petugas VALUES (:id_petugas , :nama_petugas, :alamat)";
        $this->db->query($query);
        $this->db->bind('id_petugas', $data['id_petugas']);
        $this->db->bind('nama_petugas', $data['nama_petugas']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->execute();
        return $this->db->rowCount();
      
    }

    public function ubahDataPetugas($data){
        $query = "UPDATE petugas SET nama_petugas = :nama_petugas, alamat = :alamat WHERE id_petugas = :id";
        $this->db->query($query);
        $this->db->bind('nama_petugas', $data['nama_petugas']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('id', $data['id_petugas']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function deletePetugasById($id){
        $this->db->query('delete from petugas where id_petugas=:id;');
        $this->db->bind('id',$id);
        $this->db->execute();
        return $this->db->rowCount();
    }


}