<?php
class Santri extends Controller
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
        $dataadmin['admin'] = $this->model('SantriModel')->getAllAdmin();
        $data['title'] = 'Halaman Santri';
        $data['santri'] = $this->model('SantriModel')->getAllSantri();
        $this->view('templates/sidebar', $data);
        $this->view('santri/detailsantri', $dataadmin);
        $this->view('santri/index', $data);
    }

    public function cari()
    {
    }

    // public function pelanggaran($id)
    // {
    //     $data['title'] = 'Halaman Santri';
    //     $data['pelanggaran'] = $this->model('SantriModel')->getAllPelanggaran();
    //     $this->view('templates/sidebar', $data);
    //     $this->view('santri/index', $data);
    // }

    public function detailSantri($id)
    {
        $dataadmin['admin'] = $this->model('SantriModel')->getAllAdmin();
        $datas['id'] = $this->model('SantriModel')->getonlySantriById($id);
        $data['santri'] = $this->model('SantriModel')->getAllSantri();
        $datap['pelanggaran'] = $this->model('SantriModel')->getPelanggaranById($id);
        $datadetailsantri['title'] = "Detail Santri";
        $datadetailsantri['santri'] = $this->model('SantriModel')->getSantriById($id);
        $this->view('templates/sidebar', $data);
        $this->view('santri/detailsantri', $dataadmin);
        $this->view('templates/tomboltambah', $datas);
        $this->view('templates/pelanggaran', $datap);
        $this->view('templates/profilsantri', $datadetailsantri);
        $this->view('templates/aksiprofilsantri', $datas);
    }


    public function editSantri($id)
    {
        //$datas['id'] = $this->model('SantriModel')->getonlySantriById($id);
        $dataadmin['admin'] = $this->model('SantriModel')->getAllAdmin();
        $data['santri'] = $this->model('SantriModel')->getAllSantri();
        $datap['pelanggaran'] = $this->model('SantriModel')->getPelanggaranById($id);
        $datadetailsantri['title'] = "Edit Santri";
        $datas['santri'] = $this->model('SantriModel')->getSantriById($id);
        $this->view('templates/sidebar', $data);
        $this->view('santri/detailsantri', $dataadmin);
        $this->view('santri/editsantri', $datas);
    }

    public function editPelanggaran($id)
    {
        //$datas['id'] = $this->model('SantriModel')->getonlySantriById($id);
        $dataadmin['admin'] = $this->model('SantriModel')->getAllAdmin();
        $data['santri'] = $this->model('SantriModel')->getAllSantri();
        $datap['pelanggaran'] = $this->model('SantriModel')->getPelanggaranfEditById($id);
        $datadetailsantri['title'] = "Edit Santri";
        $this->view('templates/sidebar', $data);
        $this->view('santri/detailsantri', $dataadmin);
        $this->view('templates/editpelanggaran', $datap);
    }

    public function tambah()
    {
        $dataadmin['admin'] = $this->model('SantriModel')->getAllAdmin();
        $data['santri'] = $this->model('SantriModel')->getAllSantri();
        $data['title'] = 'Tambah Santri';
        $this->view('templates/sidebar', $data);
        $this->view('santri/detailsantri', $dataadmin);
        $this->view('santri/create', $data);
    }

    public function simpanSantri()
    {
        if ($this->model('SantriModel')->tambahSantri($_POST) > 0) {
            Flasher::setMessage('Santri Berhasil', 'ditambahkan', 'success');
            header('location: ' . base_url . '/santri');
            exit;
        } else {
            Flasher::setMessage('Santri Gagal', 'ditambahkan', 'success');
            header('location: ' . base_url . '/santri');
            exit;
        }
    }

    // function tambahPelanggaran($id)
    // {
    //     $datas['idsantri'] = $this->model('SantriModel')->getonlySantriById($id);
    //     $data['santri'] = $this->model('SantriModel')->getAllSantri();
    //     $datadetailsantri['santri'] = $this->model('SantriModel')->getSantriById($id);
    //     $datas['title'] = 'Tambah Pelanggaran';
    //     $this->view('templates/sidebar', $data);
    //     $this->view('santri/detailsantri', $datadetailsantri);
    //     $this->view('santri/createpelanggaran', $datas);
    //     $this->view('templates/profilsantri', $datadetailsantri);
    // }

    public function tambahPelanggaran($id)
    {
        $dataadmin['admin'] = $this->model('SantriModel')->getAllAdmin();
        $datas['id'] = $this->model('SantriModel')->getonlySantriById($id);
        $data['santri'] = $this->model('SantriModel')->getAllSantri();
        $datap['pelanggaran'] = $this->model('SantriModel')->getPelanggaranById($id);
        $datadetailsantri['title'] = "Tambah Pelanggaran";
        $datadetailsantri['santri'] = $this->model('SantriModel')->getSantriById($id);
        $this->view('templates/sidebar', $data);
        $this->view('santri/detailsantri', $dataadmin);
        $this->view('templates/createpelanggaran', $datas);
        $this->view('templates/profilsantri', $datadetailsantri);
    }

    // public function simpanPelanggaran()
    // {
    //     if ($this->model('SantriModel')->tambahPelanggaran($_POST) > 0) {
    //         Flasher::setMessage('Berhasil', 'ditambahkan', 'success');
    //         header('location: ' . base_url . '/santri');
    //         exit;
    //     } else {
    //         Flasher::setMessage('Gagal', 'ditambahkan', 'success');
    //         header('location: ' . base_url . '/santri');
    //         exit;
    //     }
    // }


    public function simpanPelanggaran($id)
    {
        $datas['id'] = $this->model('SantriModel')->getonlySantriById($id);

        if ($this->model('SantriModel')->tambahPelanggaran($_POST) > 0) {
            Flasher::setMessage('Pelanggaran Berhasil', 'ditambahkan', 'success');

            foreach ($datas['id'] as $row) {
                header('location: ' . base_url . '/santri/detailsantri/' . $row);
                exit;
            }
        } else {
            Flasher::setMessage('Pelanggaran Gagal', 'ditambahkan', 'danger');
            foreach ($datas['id'] as $row) {
                header('location: ' . base_url . '/santri/detailsantri/' . $row);
                exit;
            }
        }
    }

    // public function updatePelanggaran($id)
    // {
    //     $datas['id'] = $this->model('SantriModel')->getPelanggaranfEditById($id);

    //     if ($this->model('SantriModel')->updateDataPelanggaran($_POST) > 0) {
    //         Flasher::setMessage('Berhasil', 'ditambahkan', 'success');
    //         $value = array($datas['id']);
    //         foreach ($value as $row) {
    //             header('location: ' . base_url . '/santri/detailsantri/' . $row);
    //             exit;
    //         }
    //     } else {
    //         Flasher::setMessage('Gagal', 'ditambahkan', 'danger');
    //         $value = array($datas['id']);
    //         foreach ($value as $row) {
    //             header('location: ' . base_url . '/santri/detailsantri/' . $row);
    //             exit;
    //         }
    //     }
    // }

    // public function updateSantri($id)
    // {
    //     $datas['id'] = $this->model('SantriModel')->getonlySantriById($id);

    //     if ($this->model('SantriModel')->updateSantri($_POST) > 0) {
    //         Flasher::setMessage('Berhasil', 'diedit', 'success');

    //         foreach ($datas['id'] as $row) {
    //             header('location: ' . base_url . '/santri/detailsantri/' . $row);
    //             exit;
    //         }
    //     } else {
    //         Flasher::setMessage('Gagal', 'diedit', 'success');
    //         foreach ($datas['id'] as $row) {
    //             header('location: ' . base_url . '/santri/detailsantri/' . $row);
    //             exit;
    //         }
    //     }
    // }

    public function updatePelanggaran()
    {

        if ($this->model('SantriModel')->updateDataPelanggaran($_POST) > 0) {
            Flasher::setMessage('Pelanggaran Berhasil', 'diedit', 'success');
            header('location: ' . base_url . '/santri');
            exit;
        } else {
            Flasher::setMessage('Pelanggaran Gagal', 'diedit', 'danger');

            header('location: ' . base_url . '/santri');
            exit;
        }
    }

    public function updateSantri()
    {

        if ($this->model('SantriModel')->updateDataSantri($_POST) > 0) {
            Flasher::setMessage('Santri Berhasil', 'diedit', 'success');
            header('location: ' . base_url . '/santri');
            exit;
        } else {
            Flasher::setMessage('Santri Gagal', 'diedit', 'danger');

            header('location: ' . base_url . '/santri');
            exit;
        }
    }

    public function hapus($id)
    {
        if ($this->model('SantriModel')->deleteSantri($id) > 0) {
            Flasher::setMessage('Santri Berhasil', 'dihapus', 'success');
            header('location: ' . base_url . '/santri');
            exit;
        } else {
            Flasher::setMessage('Santri Gagal', 'dihapus', 'danger');
            header('location: ' . base_url . '/santri');
            exit;
        }
    }


    public function hapuspelanggaran($id)
    {
        if ($this->model('SantriModel')->deletePelanggaran($id) > 0) {
            Flasher::setMessage('Pelanggaran berhasil', 'dihapus', 'success');
            header('location: ' . base_url . '/santri');
            exit;
        } else {
            Flasher::setMessage('Pelanggaran gagal', 'dihapus', 'danger');
            header('location: ' . base_url . '/santri');
            exit;
        }
    }
}