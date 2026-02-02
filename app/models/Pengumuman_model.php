<?php

class Pengumuman_model {
    private $table = 'pengumuman';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getAllPengumuman() {
        $this->db->query('SELECT * FROM ' . $this->table . ' ORDER BY is_penting DESC, tanggal_posting DESC');
        return $this->db->resultSet();
    }
    
    public function getActivePengumuman() {
         // Assuming we show all but prioritize 'penting'. 
         // Or maybe add is_active column? Schema has is_penting.
         // Let's just return all, sorted.
         return $this->getAllPengumuman();
    }

    public function getPengumumanById($id) {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id = :id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahPengumuman($data) {
        $query = "INSERT INTO " . $this->table . " 
                    (judul, isi, is_penting)
                  VALUES
                    (:judul, :isi, :is_penting)";
        
        $this->db->query($query);
        $this->db->bind('judul', $data['judul']);
        $this->db->bind('isi', $data['isi']);
        $this->db->bind('is_penting', isset($data['is_penting']) ? 1 : 0);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function updatePengumuman($data) {
        $query = "UPDATE " . $this->table . " SET 
                    judul = :judul,
                    isi = :isi,
                    is_penting = :is_penting
                  WHERE id = :id";
        
        $this->db->query($query);
        $this->db->bind('judul', $data['judul']);
        $this->db->bind('isi', $data['isi']);
        $this->db->bind('is_penting', isset($data['is_penting']) ? 1 : 0);
        $this->db->bind('id', $data['id']);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function hapusPengumuman($id) {
        $this->db->query('DELETE FROM ' . $this->table . ' WHERE id = :id');
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }
}
