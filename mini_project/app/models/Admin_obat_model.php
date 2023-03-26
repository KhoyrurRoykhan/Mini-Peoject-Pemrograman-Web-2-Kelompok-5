<?php 

class Admin_obat_model {
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
        $this->db->bind('id',$id);
        return $this->db->single();
    }

    public function deleteObatById($id){
        $this->db->query('delete from obat where id_obat=:id;');
        $this->db->bind('id',$id);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function inputDataObat($data){
        $query = "INSERT INTO obat VALUES (NULL , :nama_obat, :jenis_obat, :sediaan, :dosis_anak, :dosis_dewasa)";
        $this->db->query($query);
        $this->db->bind('nama_obat', $data['nama_obat']);
        $this->db->bind('jenis_obat', $data['jenis_obat']);
        $this->db->bind('sediaan', $data['sediaan']);
        $this->db->bind('dosis_anak', $data['dosis_anak']);
        $this->db->bind('dosis_dewasa', $data['dosis_dewasa']);
        $this->db->execute();
        return $this->db->rowCount();
      
    }

    public function ubahDataObat($data){
        $query = "UPDATE obat SET nama_obat = :nama_obat, jenis_obat = :jenis_obat, sediaan = :sediaan, dosis_anak = :dosis_anak, dosis_dewasa = :dosis_dewasa WHERE id_obat = :id";
        $this->db->query($query);
        $this->db->bind('nama_obat', $data['nama_obat']);
        $this->db->bind('jenis_obat', $data['jenis_obat']);
        $this->db->bind('sediaan', $data['sediaan']);
        $this->db->bind('dosis_anak', $data['dosis_anak']);
        $this->db->bind('dosis_dewasa', $data['dosis_dewasa']);
        $this->db->bind('id', $data['id_obat']);
        $this->db->execute();
        return $this->db->rowCount();
    }


}