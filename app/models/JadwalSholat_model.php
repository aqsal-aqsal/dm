<?php

class JadwalSholat_model {
    private $table = 'jadwal_sholat';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getAllJadwal() {
        $this->db->query('SELECT * FROM ' . $this->table . ' ORDER BY tanggal DESC');
        return $this->db->resultSet();
    }

    public function getJadwalByDate($date) {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE tanggal = :tanggal');
        $this->db->bind('tanggal', $date);
        return $this->db->single();
    }

    public function getJadwalById($id) {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id = :id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahJadwal($data) {
        $query = "INSERT INTO " . $this->table . " 
                    (tanggal, subuh, dzuhur, ashar, maghrib, isya)
                  VALUES
                    (:tanggal, :subuh, :dzuhur, :ashar, :maghrib, :isya)";
        
        $this->db->query($query);
        $this->db->bind('tanggal', $data['tanggal']);
        $this->db->bind('subuh', $data['subuh']);
        $this->db->bind('dzuhur', $data['dzuhur']);
        $this->db->bind('ashar', $data['ashar']);
        $this->db->bind('maghrib', $data['maghrib']);
        $this->db->bind('isya', $data['isya']);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function updateJadwal($data) {
        $query = "UPDATE " . $this->table . " SET 
                    tanggal = :tanggal,
                    subuh = :subuh,
                    dzuhur = :dzuhur,
                    ashar = :ashar,
                    maghrib = :maghrib,
                    isya = :isya
                  WHERE id = :id";
        
        $this->db->query($query);
        $this->db->bind('tanggal', $data['tanggal']);
        $this->db->bind('subuh', $data['subuh']);
        $this->db->bind('dzuhur', $data['dzuhur']);
        $this->db->bind('ashar', $data['ashar']);
        $this->db->bind('maghrib', $data['maghrib']);
        $this->db->bind('isya', $data['isya']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function hapusJadwal($id) {
        $this->db->query('DELETE FROM ' . $this->table . ' WHERE id = :id');
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }
}
