<?php

class Agenda_model {
    private $table = 'agenda_kegiatan';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getAllAgenda() {
        $this->db->query('SELECT * FROM ' . $this->table . ' ORDER BY tanggal ASC, waktu ASC');
        return $this->db->resultSet();
    }

    public function getUpcomingAgenda() {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE tanggal >= CURDATE() ORDER BY tanggal ASC, waktu ASC');
        return $this->db->resultSet();
    }

    public function getAgendaById($id) {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id = :id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahAgenda($data) {
        $query = "INSERT INTO " . $this->table . " 
                    (nama_kegiatan, tanggal, waktu, deskripsi)
                  VALUES
                    (:nama_kegiatan, :tanggal, :waktu, :deskripsi)";
        
        $this->db->query($query);
        $this->db->bind('nama_kegiatan', $data['nama_kegiatan']);
        $this->db->bind('tanggal', $data['tanggal']);
        $this->db->bind('waktu', $data['waktu']);
        $this->db->bind('deskripsi', $data['deskripsi']);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function updateAgenda($data) {
        $query = "UPDATE " . $this->table . " SET 
                    nama_kegiatan = :nama_kegiatan,
                    tanggal = :tanggal,
                    waktu = :waktu,
                    deskripsi = :deskripsi
                  WHERE id = :id";
        
        $this->db->query($query);
        $this->db->bind('nama_kegiatan', $data['nama_kegiatan']);
        $this->db->bind('tanggal', $data['tanggal']);
        $this->db->bind('waktu', $data['waktu']);
        $this->db->bind('deskripsi', $data['deskripsi']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function hapusAgenda($id) {
        $this->db->query('DELETE FROM ' . $this->table . ' WHERE id = :id');
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }
}
