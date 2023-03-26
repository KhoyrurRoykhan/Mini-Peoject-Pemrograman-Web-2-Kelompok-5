<?php 

class Admin_dokter_model {
    private $table = 'dokter';

    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAlldokter()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getDokter($id){
        $this->db->query('SELECT * FROM '. $this->table .' WHERE id_dokter=:id');
        $this->db->bind('id',$id);
        return $this->db->single();
    }

    public function getdokterById($id){
        //$this->db->query('SELECT * FROM '. $this->table .' WHERE id_dokter=:id');
        $this->db->query('select dokter.id_dokter, dokter.nama_dokter, dokter.alamat, poli.nama_poli from dokter, poli where dokter.id_poli = poli.id_poli and dokter.id_dokter=:id;');
        $this->db->bind('id',$id);
        return $this->db->single();
    }

    public function inputDataDokter($data){
        $query = "INSERT INTO dokter VALUES (:id_dokter , :nama_dokter, :id_poli, :alamat)";
        $this->db->query($query);
        $this->db->bind('id_dokter', $data['id_dokter']);
        $this->db->bind('nama_dokter', $data['nama_dokter']);
        $this->db->bind('id_poli', $data['id_poli']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->execute();
        return $this->db->rowCount();
      
    }

    public function ubahDataDokter($data){
        $query = "UPDATE dokter SET nama_dokter = :nama_dokter, id_poli = :id_poli, alamat = :alamat WHERE id_dokter = :id";
        $this->db->query($query);
        $this->db->bind('nama_dokter', $data['nama_dokter']);
        $this->db->bind('id_poli', $data['id_poli']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('id', $data['id_dokter']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function deleteDokterById($id){
        $this->db->query('delete from dokter where id_dokter=:id;');
        $this->db->bind('id',$id);
        $this->db->execute();
        return $this->db->rowCount();
    }

}