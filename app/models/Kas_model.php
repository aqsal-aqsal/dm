<?php

class Kas_model {
    private $table = 'kas_masjid';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getAllKas() {
        $this->db->query('SELECT * FROM ' . $this->table . ' ORDER BY tanggal DESC, id DESC');
        return $this->db->resultSet();
    }

    public function getSaldo() {
        // Calculate total masuk - total keluar
        $this->db->query("SELECT 
                            (SELECT COALESCE(SUM(nominal),0) FROM " . $this->table . " WHERE jenis = 'masuk') - 
                            (SELECT COALESCE(SUM(nominal),0) FROM " . $this->table . " WHERE jenis = 'keluar') as saldo");
        $result = $this->db->single();
        return $result['saldo'];
    }

    public function getKasById($id) {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id = :id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahKas($data) {
        $query = "INSERT INTO " . $this->table . " 
                    (tanggal, keterangan, jenis, nominal)
                  VALUES
                    (:tanggal, :keterangan, :jenis, :nominal)";
        
        $this->db->query($query);
        $this->db->bind('tanggal', $data['tanggal']);
        $this->db->bind('keterangan', $data['keterangan']);
        $this->db->bind('jenis', $data['jenis']);
        $this->db->bind('nominal', $data['nominal']);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function updateKas($data) {
        $query = "UPDATE " . $this->table . " SET 
                    tanggal = :tanggal,
                    keterangan = :keterangan,
                    jenis = :jenis,
                    nominal = :nominal
                  WHERE id = :id";
        
        $this->db->query($query);
        $this->db->bind('tanggal', $data['tanggal']);
        $this->db->bind('keterangan', $data['keterangan']);
        $this->db->bind('jenis', $data['jenis']);
        $this->db->bind('nominal', $data['nominal']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function hapusKas($id) {
        $this->db->query('DELETE FROM ' . $this->table . ' WHERE id = :id');
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }
}
