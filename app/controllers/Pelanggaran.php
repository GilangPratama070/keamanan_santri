<?php
class Pelanggaran extends Controller
{
    public function __construct()
    {
        if ($_SESSION['session_login'] != 'sudah_login') {
            Flasher::setMessage('Login', 'Tidak ditemukan.', 'danger');
            header('location: ' . base_url . '/login');
            exit;
        }
    }

    public function index()
    {
        $data['title'] = 'Halaman Santri';
        $data['pelanggaran'] = $this->model('PelanggaranModel')->getAllPelanggaran();
        $this->view('templates/sidebar', $data);
        $this->view('pelanggaran/detailsantri', $data);
    }

    public function cari()
    {
    }

    public function detailSantri($id)
    {
        $data['santri'] = $this->model('SantriModel')->getAllSantri();
        $datadetailsantri['title'] = "Detail Santri";
        $datadetailsantri['santri'] = $this->model('SantriModel')->getSantriById($id);
        $this->view('templates/sidebar', $data);
        $this->view('santri/detailsantri', $datadetailsantri);
        $this->view('templates/pelanggaran', $datadetailsantri);
        $this->view('templates/profilsantri', $datadetailsantri);
    }



    public function edit($id)
    {
    }

    public function tambah()
    {
        $data['santri'] = $this->model('SantriModel')->getAllSantri();
        $data['title'] = 'Tambah Santri';
        $this->view('templates/sidebar', $data);
        $this->view('santri/create', $data);
    }

    public function simpanSantri()
    {
        if ($this->model('SantriModel')->tambahSantri($_POST) > 0) {
            Flasher::setMessage('Berhasil', 'ditambahkan', 'success');
            header('location: ' . base_url . '/santri');
            exit;
        } else {
            Flasher::setMessage('Gagal', 'ditambahkan', 'success');
            header('location: ' . base_url . '/santri');
            exit;
        }
    }

    public function updateSantri()
    {
    }

    public function hapus($id)
    {
    }
}