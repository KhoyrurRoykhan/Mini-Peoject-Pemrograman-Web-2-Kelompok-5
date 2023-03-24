<?php 

class Dokter_model {
    private $table = 'dokter';

    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllDokter()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getDokterById($id){
        //$this->db->query('SELECT * FROM '. $this->table .' WHERE id_dokter=:id');
        $this->db->query('select dokter.id_dokter, dokter.nama_dokter, dokter.alamat, poli.nama_poli from dokter, poli where dokter.id_poli = poli.id_poli and dokter.id_dokter=:id;');
        $this->db->bind('id',$id);
        return $this->db->single();
    }

    public function joinDokterWithPoli($id){
        $this->db->query('select dokter.id_dokter, dokter.nama_dokter, dokter.alamat, poli.nama_poli from dokter, poli where dokter.id_poli = poli.id_poli and dokter.id_dokter=:id;');
        $this->db->bind('id',$id);
        return $this->db->single();

    }


}