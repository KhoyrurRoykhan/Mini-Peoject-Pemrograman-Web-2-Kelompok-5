<?php 

class Pasien_model {
    private $table = 'pasien';

    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllPasien()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getPasienById($id){
        //$this->db->query('SELECT * FROM '. $this->table .' WHERE id_pasien=:id');
        $this->db->query('select pasien.id_pasien, pasien.nama_pasien, pasien.jenis_kelamin, pasien.alamat, poli.nama_poli, petugas.nama_petugas, dokter.nama_dokter from pasien, poli, petugas, dokter where pasien.id_poli = poli.id_poli and pasien.id_petugas = petugas.id_petugas and pasien.id_dokter = dokter.id_dokter and pasien.id_pasien=:id');
        $this->db->bind('id',$id);
        return $this->db->single();
    }


}