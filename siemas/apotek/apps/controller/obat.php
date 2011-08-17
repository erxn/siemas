<?php defined('THISPATH') or die('Can\'t access directly!');

class Controller_obat extends Panada {

    public function __construct(){
        parent::__construct();
		$this->db = new library_db();
		$this->session = new Library_session();
                $this->obat = new Model_obat();
                $this->date = new Model_history();
    }

    public function index(){
        $this->date->cek_history_harian(date('Y-m-d'));
        $views['tanggal'] = date('d-m-Y');
        $views['page_title'] = 'Obat - Apotek';
        $list = $this->obat->ambil();
        $views['list'] = $list;
        $views['jumlah'] = $this->obat->jumlah();

        $this->view_obat($views);
    }

    public function kadaluarsa(){
        $views['tanggal'] = date('d-m-Y');
        $views['page_title'] = 'Kadaluarsa Obat - Apotek';
        $this->view_kadaluarsa($views);
    }

    public function pemakaian_narkotik(){
        $this->date->cek_history_harian(date('Y-m-d'));
        $views['tanggal'] = date('d-m-Y');
        $views['page_title'] = 'Pemakaian Narkotik - Apotek';
        $list = $this->obat->ambil_narkotik();
        $views['narkotik'] = $list;
        $this->view_pemakaian_narkotik($views);
    }

    public function pemakaian_obat(){
        $this->date->cek_history_harian(date('Y-m-d'));
        $views['tanggal'] = date('d-m-Y');
        $views['page_title'] = 'Pemakaian Obat - Apotek';
        $views['verify']    = NULL;
        $views['list_nama_obat'] = $this->obat->ambil_nama_obat();
        $n='1';
        if($_POST){
            $tanggal2 = $_POST['tanggal'];
            $tanggal = $this->date->reverse($tanggal2);
            $intern = $_POST['unit_layanan'];
            $id_obat = $_POST['id_obat'];
            $jumlah = $_POST['jumlah'];
            $keterangan = $_POST['keterangan'];
            $id_pasien = $this->obat->resep_pasien($tanggal, $id_antrian);
            $this->obat->tambah_isi_pemakaian($intern, $tanggal, $id_obat, $jumlah, $keterangan);
            $views['verify']='Resep dengan id antrian '.$id_antrian.' berhasil dimasukan.';
        }
        $this->view_pemakaian_obat($views);
    }

    public function tambah_jenis_obat(){
        $views['tanggal'] = date('d-m-Y');
        $views['page_title'] = 'Tambah Jenis Obat - Apotek';
        if($_POST){
            $tanggal2 = $_POST['tanggal'];
            $tanggal = $this->date->reverse($tanggal2);
            $intern = $_POST['unit_layanan'];
            $id_obat = $_POST['id_obat'];
            $jumlah = $_POST['jumlah'];
            $keterangan = $_POST['keterangan'];
            $id_pasien = $this->obat->resep_pasien($tanggal, $id_antrian);
            $this->obat->tambah_isi_pemakaian($intern, $tanggal, $id_obat, $jumlah, $keterangan);
            $views['verify']='Resep dengan id antrian '.$id_antrian.' berhasil dimasukan.';
        }
        $this->view_tambah_jenis_obat($views);
    }
}
