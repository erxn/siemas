<?php defined('THISPATH') or die('Can\'t access directly!');

class Controller_statistik extends Panada {

    public function __construct(){
        parent::__construct();
            $this->db = new library_db();
            $this->session = new Library_session();
            $this->obat = new Model_obat();
            $this->histori = new Model_history();
    }

    public function index(){
        $views['tanggal'] = date('d-m-Y');
        $views['page_title'] = 'Statistik - Apotek';
        $views['jumlah_kadaluarsa'] = $this->obat->cek_kadaluarsa();
        $views['jumlah_daftar'] = $this->obat->jumlah();
        $views['jumlah_habis'] = $this->histori->cek_jumlah_habis();
        $this->view_statistik($views);
    }

    public function daftar_obat(){
        $views['tanggal'] = date('d-m-Y');
        $views['page_title'] = 'Statistik - Apotek';
        $views['jumlah_kadaluarsa'] = $this->obat->cek_kadaluarsa();
        $views['daftar'] = $this->obat->ambil();
        $this->view_statistik_daftar_obat($views);
    }

    public function daftar_obat_habis(){
        $views['tanggal'] = date('d-m-Y');
        $views['page_title'] = 'Statistik - Apotek';
        $views['jumlah_kadaluarsa'] = $this->obat->cek_kadaluarsa();
        $views['daftar'] = $this->histori->cek_habis();
        $this->view_statistik_daftar_obat_habis($views);
    }
}
