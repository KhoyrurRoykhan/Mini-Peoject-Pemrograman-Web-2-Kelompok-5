<?php 

class Admin_pasien_model {
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

    public function getPasien($id){
        $this->db->query('SELECT * FROM '. $this->table .' WHERE id_pasien=:id');
        $this->db->bind('id',$id);
        return $this->db->single();
    }


    public function getPasienById($id){
        //$this->db->query('SELECT * FROM '. $this->table .' WHERE id_pasien=:id');
        $this->db->query('select pasien.id_pasien, pasien.nama_pasien, pasien.jenis_kelamin, pasien.alamat, poli.nama_poli, petugas.nama_petugas, dokter.nama_dokter from pasien, poli, petugas, dokter where pasien.id_poli = poli.id_poli and pasien.id_petugas = petugas.id_petugas and pasien.id_dokter = dokter.id_dokter and pasien.id_pasien=:id');
        $this->db->bind('id',$id);
        return $this->db->single();
    }

    public function inputDataPasien($data){
        $query = "INSERT INTO pasien VALUES (:id_pasien , :nama_pasien, :jenis_kelamin, :alamat, :id_poli, :id_petugas, :id_dokter)";
        $this->db->query($query);
        $this->db->bind('id_pasien', $data['id_pasien']);
        $this->db->bind('nama_pasien', $data['nama_pasien']);
        $this->db->bind('jenis_kelamin', $data['jenis_kelamin']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('id_poli', $data['id_poli']);
        $this->db->bind('id_petugas', $data['id_petugas']);
        $this->db->bind('id_dokter', $data['id_dokter']);
        $this->db->execute();
        return $this->db->rowCount();
      
    }

    public function ubahDataPasien($data){
        $query = "UPDATE pasien SET nama_pasien = :nama_pasien, jenis_kelamin = :jenis_kelamin, alamat = :alamat, id_poli = :id_poli, id_petugas = :id_petugas, id_dokter = :id_dokter WHERE id_pasien = :id";
        $this->db->query($query);
        $this->db->bind('nama_pasien', $data['nama_pasien']);
        $this->db->bind('jenis_kelamin', $data['jenis_kelamin']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('id_poli', $data['id_poli']);
        $this->db->bind('id_petugas', $data['id_petugas']);
        $this->db->bind('id_dokter', $data['id_dokter']);
        $this->db->bind('id', $data['id_pasien']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function deletePasienById($id){
        $this->db->query('delete from pasien where id_pasien=:id;');
        $this->db->bind('id',$id);
        $this->db->execute();
        return $this->db->rowCount();
    }


}