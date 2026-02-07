<?php

class Home extends Controller {
    public function index() {
        $data['judul'] = 'Beranda';
        
        // Load Models
        $profilModel = $this->model('Profil_model');
        $jadwalSholatModel = $this->model('JadwalSholat_model');
        $jadwalJumatModel = $this->model('JadwalJumat_model');
        $pengumumanModel = $this->model('Pengumuman_model');
        $agendaModel = $this->model('Agenda_model');
        $kasModel = $this->model('Kas_model');

        // Get Data
        $data['profil'] = $profilModel->getProfil();
        $data['jadwal_sholat'] = $jadwalSholatModel->getJadwalByDate(date('Y-m-d'));
        $data['jadwal_jumat'] = $jadwalJumatModel->getUpcomingJadwal();
        $data['pengumuman'] = $pengumumanModel->getActivePengumuman(); // Implement limit if needed
        $data['agenda'] = $agendaModel->getUpcomingAgenda();
        $data['saldo'] = $kasModel->getSaldo();

        $this->view('layouts/header', $data);
        $this->view('home/index', $data);
        $this->view('layouts/footer', $data);
    }

    public function kas() {
        $data['judul'] = 'Laporan Kas Masjid';
        $data['profil'] = $this->model('Profil_model')->getProfil();
        $data['kas'] = $this->model('Kas_model')->getAllKas();
        $data['saldo'] = $this->model('Kas_model')->getSaldo();

        $this->view('layouts/header', $data);
        $this->view('home/kas', $data);
        $this->view('layouts/footer', $data);
    }

    public function jadwal_jumat() {
        $data['judul'] = 'Jadwal Sholat Jumat';
        $data['profil'] = $this->model('Profil_model')->getProfil();
        $data['jadwal'] = $this->model('JadwalJumat_model')->getAllJadwal();

        $this->view('layouts/header', $data);
        $this->view('home/jadwal_jumat', $data);
        $this->view('layouts/footer', $data);
    }

    public function jadwal_sholat() {
        $data['judul'] = 'Waktu Sholat';
        $data['profil'] = $this->model('Profil_model')->getProfil();
        $data['jadwal'] = $this->model('JadwalSholat_model')->getAllJadwal();

        $this->view('layouts/header', $data);
        $this->view('home/jadwal_sholat', $data);
        $this->view('layouts/footer', $data);
    }
}
