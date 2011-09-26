<?php

defined('THISPATH') or die('Can\'t access directly!');

class Controller_resep extends Panada {

    public function __construct() {
        parent::__construct();
        $this->session = new Library_session();
        $this->obat = new Model_obat();
        $this->date = new Model_history();
    }

    public function index() {
        $this->date->cek_history_harian(date('Y-m-d'));
        $views['tanggal'] = date('d-m-Y');
        if ($this->session->get('tanggal_resep')) {
            $views['tanggal'] = $this->session->get('tanggal_resep');
        }
        $tanggal1 = $this->date->reverse($views['tanggal']);
        $views['kunjungan_pasien'] = $this->obat->auto_pasien($tanggal1);
        $views['page_title'] = 'Resep - Apotek';
        $views['jumlah_kadaluarsa'] = $this->obat->cek_kadaluarsa();
        $views['verify'] = NULL;
        if ($this->session->get('verify')) {
            $views['verify'] = $this->session->get('verify');
            $this->session->remove('verify');
        }
        $views['list_nama_obat'] = $this->obat->ambil_nama_obat();
        $n = '1';
        if ($_POST) {
            if (isset($_POST['kunjungan'])) {
                $tanggal2 = $_POST['tanggal'];
                $tanggal = $this->date->reverse($tanggal2);
                $no_kunjungan = $_POST['kunjungan'];
                $id_obat = $_POST['id_obat'];
                $jumlah = $_POST['jumlah'];
                $cek_obat = $this->obat->cek_obat($id_obat);
                $cek_pasien = $this->obat->cek_pasien($no_kunjungan, $tanggal);
                if ($jumlah && $id_obat && $cek_obat && $cek_pasien) {
                    $id_pasien = $this->obat->resep_pasien($tanggal, $no_kunjungan);
                    $this->obat->tambah_isi_resep($id_pasien, $tanggal, $id_obat, $jumlah);
                    $verify = '<div class="notification n-success">Resep dengan id antrian ' . $no_kunjungan . ' berhasil dimasukan.</div>';
                } else {
                    $verify = '<span class="notification n-error">Data yang dimasukan tidak benar atau tidak lengkap.</span>';
                }
                $this->session->set('verify', $verify);
                $this->redirect('index.php/resep');
            } else {
                $this->redirect('index.php/resep');
            }
        }

        $this->view_resep($views);
    }

    public function ganti_tanggal($tanggal) {
        $this->session->set('tanggal_resep', $tanggal);
        $this->redirect('index.php/resep');
    }

}
