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
        $result = $this->db->single();

        if (!$result) {
            $time = strtotime($date);
            $bulan = date('m', $time);
            $tahun = date('Y', $time);
            
            if ($this->syncJadwal($bulan, $tahun)) {
                $this->db->query('SELECT * FROM ' . $this->table . ' WHERE tanggal = :tanggal');
                $this->db->bind('tanggal', $date);
                $result = $this->db->single();
            }
        }
        
        return $result;
    }

    public function syncJadwal($bulan, $tahun) {
        $url = 'https://equran.id/api/v2/shalat';
        $data = [
            'provinsi' => 'Kalimantan Tengah',
            'kabkota' => 'Kab. Kapuas',
            'bulan' => (int)$bulan,
            'tahun' => (int)$tahun
        ];

        $options = [
            'http' => [
                'header'  => "Content-type: application/json\r\n",
                'method'  => 'POST',
                'content' => json_encode($data),
                'ignore_errors' => true
            ]
        ];
        
        try {
            $context  = stream_context_create($options);
            $response = file_get_contents($url, false, $context);
            
            if ($response === FALSE) return false;

            $json = json_decode($response, true);
            if (isset($json['code']) && $json['code'] == 200 && isset($json['data']['jadwal'])) {
                foreach ($json['data']['jadwal'] as $j) {
                    // Cek apakah tanggal sudah ada
                    $this->db->query('SELECT id FROM ' . $this->table . ' WHERE tanggal = :tanggal');
                    $this->db->bind('tanggal', $j['tanggal_lengkap']);
                    
                    if (!$this->db->single()) {
                        $query = "INSERT INTO " . $this->table . " 
                            (tanggal, subuh, dzuhur, ashar, maghrib, isya)
                            VALUES
                            (:tanggal, :subuh, :dzuhur, :ashar, :maghrib, :isya)";
                        $this->db->query($query);
                        $this->db->bind('tanggal', $j['tanggal_lengkap']);
                        $this->db->bind('subuh', $j['subuh']);
                        $this->db->bind('dzuhur', $j['dzuhur']);
                        $this->db->bind('ashar', $j['ashar']);
                        $this->db->bind('maghrib', $j['maghrib']);
                        $this->db->bind('isya', $j['isya']);
                        
                        $this->db->execute();
                    }
                }
                return true;
            }
        } catch (Exception $e) {
            return false;
        }
        return false;
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
