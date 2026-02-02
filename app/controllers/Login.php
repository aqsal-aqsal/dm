<?php

class Login extends Controller {
    public function index() {
        if (isset($_SESSION['user_id'])) {
            header('Location: ' . BASEURL . '/admin');
            exit;
        }

        $data['judul'] = 'Login Admin';
        $this->view('admin/login', $data);
    }

    public function process() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $adminModel = $this->model('Admin_model');
            $user = $adminModel->getUserByUsername($username);

            if ($user && password_verify($password, $user['password'])) {
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                header('Location: ' . BASEURL . '/admin');
                exit;
            } else {
                // Flash message usually here
                echo "<script>alert('Username atau Password salah!'); window.location.href='" . BASEURL . "/login';</script>";
            }
        }
    }

    public function logout() {
        session_destroy();
        header('Location: ' . BASEURL . '/login');
        exit;
    }
}
