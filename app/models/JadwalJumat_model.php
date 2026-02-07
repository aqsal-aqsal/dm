<?php

class JadwalJumat_model {
    private $table = 'jadwal_jumat';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getAllJadwal() {
        $this->db->query('SELECT * FROM ' . $this->table . ' ORDER BY tanggal DESC');
        return $this->db->resultSet();
    }

    public function getUpcomingJadwal() {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE tanggal >= CURDATE() ORDER BY tanggal ASC LIMIT 1');
        return $this->db->single();
    }
    
    public function getUpcomingJadwals() {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE tanggal >= CURDATE() ORDER BY tanggal ASC');
        return $this->db->resultSet();
    }

    public function getJadwalById($id) {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id = :id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahJadwal($data) {
        $query = "INSERT INTO " . $this->table . " 
                    (tanggal, waktu, imam, khatib, muadzin)
                  VALUES
                    (:tanggal, :waktu, :imam, :khatib, :muadzin)";
        
        $this->db->query($query);
        $this->db->bind('tanggal', $data['tanggal']);
        $this->db->bind('waktu', $data['waktu']);
        $this->db->bind('imam', $data['imam']);
        $this->db->bind('khatib', $data['khatib']);
        $this->db->bind('muadzin', $data['muadzin']);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function updateJadwal($data) {
        $query = "UPDATE " . $this->table . " SET 
                    tanggal = :tanggal,
                    waktu = :waktu,
                    imam = :imam,
                    khatib = :khatib,
                    muadzin = :muadzin
                  WHERE id = :id";
        
        $this->db->query($query);
        $this->db->bind('tanggal', $data['tanggal']);
        $this->db->bind('waktu', $data['waktu']);
        $this->db->bind('imam', $data['imam']);
        $this->db->bind('khatib', $data['khatib']);
        $this->db->bind('muadzin', $data['muadzin']);
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
