<?php

class Admin extends Controller {
    public function __construct() {
        if (!isset($_SESSION['user_id'])) {
            header('Location: ' . BASEURL . '/login');
            exit;
        }
    }

    public function index() {
        $data['judul'] = 'Dashboard Admin';
        $data['saldo'] = $this->model('Kas_model')->getSaldo();
        $data['agenda_count'] = count($this->model('Agenda_model')->getUpcomingAgenda());
        $data['pengumuman_count'] = count($this->model('Pengumuman_model')->getActivePengumuman());
        
        $this->view('admin/layouts/header', $data);
        $this->view('admin/dashboard', $data);
        $this->view('admin/layouts/footer');
    }

    // --- JADWAL SHOLAT ---
    public function jadwal_sholat() {
        $data['judul'] = 'Kelola Jadwal Sholat';
        $data['jadwal'] = $this->model('JadwalSholat_model')->getAllJadwal();
        $this->view('admin/layouts/header', $data);
        $this->view('admin/jadwal_sholat/index', $data);
        $this->view('admin/layouts/footer');
    }

    public function jadwal_sholat_sync() {
        // Sync for current month
        $this->model('JadwalSholat_model')->syncJadwal(date('m'), date('Y'));
        
        // Sync for next month as well (to be safe)
        $nextMonth = strtotime('+1 month');
        $this->model('JadwalSholat_model')->syncJadwal(date('m', $nextMonth), date('Y', $nextMonth));

        header('Location: ' . BASEURL . '/admin/jadwal_sholat');
        exit;
    }

    /* 
    public function jadwal_sholat_add() {
        // Disabled manually
        header('Location: ' . BASEURL . '/admin/jadwal_sholat');
        exit;
    }
    */

    public function jadwal_sholat_edit($id) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST['id'] = $id;
            if ($this->model('JadwalSholat_model')->updateJadwal($_POST) > 0) {
                header('Location: ' . BASEURL . '/admin/jadwal_sholat');
                exit;
            } else {
                 header('Location: ' . BASEURL . '/admin/jadwal_sholat'); // Redirect even if no change
                 exit;
            }
        }
        $data['judul'] = 'Edit Jadwal Sholat';
        $data['jadwal'] = $this->model('JadwalSholat_model')->getJadwalById($id);
        $this->view('admin/layouts/header', $data);
        $this->view('admin/jadwal_sholat/form', $data);
        $this->view('admin/layouts/footer');
    }

    public function jadwal_sholat_delete($id) {
        if ($this->model('JadwalSholat_model')->hapusJadwal($id) > 0) {
            header('Location: ' . BASEURL . '/admin/jadwal_sholat');
            exit;
        }
    }

    // --- JADWAL JUMAT ---
    public function jadwal_jumat() {
        $data['judul'] = 'Kelola Jadwal Jumat';
        $data['jadwal'] = $this->model('JadwalJumat_model')->getAllJadwal();
        $this->view('admin/layouts/header', $data);
        $this->view('admin/jadwal_jumat/index', $data);
        $this->view('admin/layouts/footer');
    }

    public function jadwal_jumat_add() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if ($this->model('JadwalJumat_model')->tambahJadwal($_POST) > 0) {
                header('Location: ' . BASEURL . '/admin/jadwal_jumat');
                exit;
            }
        }
        $data['judul'] = 'Tambah Jadwal Jumat';
        $this->view('admin/layouts/header', $data);
        $this->view('admin/jadwal_jumat/form', $data);
        $this->view('admin/layouts/footer');
    }

    public function jadwal_jumat_edit($id) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST['id'] = $id;
            if ($this->model('JadwalJumat_model')->updateJadwal($_POST) > 0) {
                header('Location: ' . BASEURL . '/admin/jadwal_jumat');
                exit;
            } else {
                header('Location: ' . BASEURL . '/admin/jadwal_jumat');
                exit;
            }
        }
        $data['judul'] = 'Edit Jadwal Jumat';
        $data['jadwal'] = $this->model('JadwalJumat_model')->getJadwalById($id);
        $this->view('admin/layouts/header', $data);
        $this->view('admin/jadwal_jumat/form', $data);
        $this->view('admin/layouts/footer');
    }

    public function jadwal_jumat_delete($id) {
        if ($this->model('JadwalJumat_model')->hapusJadwal($id) > 0) {
            header('Location: ' . BASEURL . '/admin/jadwal_jumat');
            exit;
        }
    }

    // --- PENGUMUMAN ---
    public function pengumuman() {
        $data['judul'] = 'Kelola Pengumuman';
        $data['pengumuman'] = $this->model('Pengumuman_model')->getAllPengumuman();
        $this->view('admin/layouts/header', $data);
        $this->view('admin/pengumuman/index', $data);
        $this->view('admin/layouts/footer');
    }

    public function pengumuman_add() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if ($this->model('Pengumuman_model')->tambahPengumuman($_POST) > 0) {
                header('Location: ' . BASEURL . '/admin/pengumuman');
                exit;
            }
        }
        $data['judul'] = 'Tambah Pengumuman';
        $this->view('admin/layouts/header', $data);
        $this->view('admin/pengumuman/form', $data);
        $this->view('admin/layouts/footer');
    }

    public function pengumuman_edit($id) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST['id'] = $id;
            if ($this->model('Pengumuman_model')->updatePengumuman($_POST) > 0) {
                header('Location: ' . BASEURL . '/admin/pengumuman');
                exit;
            } else {
                header('Location: ' . BASEURL . '/admin/pengumuman');
                exit;
            }
        }
        $data['judul'] = 'Edit Pengumuman';
        $data['pengumuman'] = $this->model('Pengumuman_model')->getPengumumanById($id);
        $this->view('admin/layouts/header', $data);
        $this->view('admin/pengumuman/form', $data);
        $this->view('admin/layouts/footer');
    }

    public function pengumuman_delete($id) {
        if ($this->model('Pengumuman_model')->hapusPengumuman($id) > 0) {
            header('Location: ' . BASEURL . '/admin/pengumuman');
            exit;
        }
    }

    // --- AGENDA KEGIATAN ---
    public function agenda() {
        $data['judul'] = 'Kelola Agenda Kegiatan';
        $data['agenda'] = $this->model('Agenda_model')->getAllAgenda();
        $this->view('admin/layouts/header', $data);
        $this->view('admin/agenda/index', $data);
        $this->view('admin/layouts/footer');
    }

    public function agenda_add() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if ($this->model('Agenda_model')->tambahAgenda($_POST) > 0) {
                header('Location: ' . BASEURL . '/admin/agenda');
                exit;
            }
        }
        $data['judul'] = 'Tambah Agenda';
        $this->view('admin/layouts/header', $data);
        $this->view('admin/agenda/form', $data);
        $this->view('admin/layouts/footer');
    }

    public function agenda_edit($id) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST['id'] = $id;
            if ($this->model('Agenda_model')->updateAgenda($_POST) > 0) {
                header('Location: ' . BASEURL . '/admin/agenda');
                exit;
            } else {
                header('Location: ' . BASEURL . '/admin/agenda');
                exit;
            }
        }
        $data['judul'] = 'Edit Agenda';
        $data['agenda'] = $this->model('Agenda_model')->getAgendaById($id);
        $this->view('admin/layouts/header', $data);
        $this->view('admin/agenda/form', $data);
        $this->view('admin/layouts/footer');
    }

    public function agenda_delete($id) {
        if ($this->model('Agenda_model')->hapusAgenda($id) > 0) {
            header('Location: ' . BASEURL . '/admin/agenda');
            exit;
        }
    }

    // --- KAS MASJID ---
    public function kas() {
        $data['judul'] = 'Kelola Kas Masjid';
        $data['kas'] = $this->model('Kas_model')->getAllKas();
        $data['saldo'] = $this->model('Kas_model')->getSaldo();
        $this->view('admin/layouts/header', $data);
        $this->view('admin/kas/index', $data);
        $this->view('admin/layouts/footer');
    }

    public function kas_add() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if ($this->model('Kas_model')->tambahKas($_POST) > 0) {
                header('Location: ' . BASEURL . '/admin/kas');
                exit;
            }
        }
        $data['judul'] = 'Tambah Transaksi Kas';
        $this->view('admin/layouts/header', $data);
        $this->view('admin/kas/form', $data);
        $this->view('admin/layouts/footer');
    }

    public function kas_edit($id) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST['id'] = $id;
            if ($this->model('Kas_model')->updateKas($_POST) > 0) {
                header('Location: ' . BASEURL . '/admin/kas');
                exit;
            } else {
                header('Location: ' . BASEURL . '/admin/kas');
                exit;
            }
        }
        $data['judul'] = 'Edit Transaksi Kas';
        $data['kas'] = $this->model('Kas_model')->getKasById($id);
        $this->view('admin/layouts/header', $data);
        $this->view('admin/kas/form', $data);
        $this->view('admin/layouts/footer');
    }

    public function kas_delete($id) {
        if ($this->model('Kas_model')->hapusKas($id) > 0) {
            header('Location: ' . BASEURL . '/admin/kas');
            exit;
        }
    }

    // --- PROFIL MASJID ---
    public function profil() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if ($this->model('Profil_model')->updateProfil($_POST) > 0) {
                // Success
            }
             header('Location: ' . BASEURL . '/admin/profil');
             exit;
        }
        $data['judul'] = 'Edit Profil Masjid';
        $data['profil'] = $this->model('Profil_model')->getProfil();
        $this->view('admin/layouts/header', $data);
        $this->view('admin/profil/index', $data);
        $this->view('admin/layouts/footer');
    }
}
