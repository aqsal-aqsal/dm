<?php

class Profil_model {
    private $table = 'profil_masjid';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getProfil() {
        $this->db->query('SELECT * FROM ' . $this->table . ' LIMIT 1');
        return $this->db->single();
    }

    public function updateProfil($data) {
        $query = "UPDATE " . $this->table . " SET 
                    nama = :nama,
                    alamat = :alamat,
                    kontak = :kontak,
                    deskripsi = :deskripsi
                  WHERE id = :id";
        
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('kontak', $data['kontak']);
        $this->db->bind('deskripsi', $data['deskripsi']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();
        return $this->db->rowCount();
    }
}
