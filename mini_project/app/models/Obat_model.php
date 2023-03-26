<?php 

class Obat_model {
    private $table = 'obat';

    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllobat()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getobatById($id){
        $this->db->query('SELECT * FROM '. $this->table .' WHERE id_obat=:id');
        // $this->db->query('select obat.id_obat, obat.nama_obat from obat where pasien.id_poli = poli.id_poli and pasien.id_petugas = petugas.id_petugas and pasien.id_dokter = dokter.id_dokter and pasien.id_pasien=:id');
        $this->db->bind('id',$id);
        return $this->db->single();
    }


}