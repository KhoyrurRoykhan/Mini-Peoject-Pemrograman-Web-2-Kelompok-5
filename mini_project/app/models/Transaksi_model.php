<?php 

class Transaksi_model {
    private $table = 'transaksi';

    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllTransaksi()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getTransaksiById($id){
        //$this->db->query('SELECT * FROM '. $this->table .' WHERE id_transaksi=:id');
        // $this->db->query('select poli.id_poli, poli.nama_poli, dokter.nama_dokter from poli, dokter where poli.id_dokter = dokter.id_dokter and poli.id_poli=:id');
        $this->db->query('select transaksi.id_transaksi, pasien.id_pasien, pasien.nama_pasien, dokter.nama_dokter, obat.nama_obat from transaksi, pasien, dokter, obat where transaksi.id_pasien = pasien.id_pasien and transaksi.id_dokter = dokter.id_dokter and transaksi.id_obat = obat.id_obat and transaksi.id_transaksi =:id');
        $this->db->bind('id',$id);
        return $this->db->single();
    }


}