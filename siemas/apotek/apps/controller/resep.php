<?php defined('THISPATH') or die('Can\'t access directly!');

class Controller_resep extends Panada {
    
    public function __construct(){
        parent::__construct();
		$this->session = new Library_session();
                $this->obat = new Model_obat();
                $this->date = new Model_history();
    }
    
    public function index(){
        $views['tanggal'] = date('d-m-Y');
        $views['page_title']    = 'Resep - Apotek';
        $views['verify']    = NULL;
        $views['list_nama_obat'] = $this->obat->ambil_nama_obat();
        $n='1';
        if($_POST){
            $tanggal2 = $_POST['tanggal'];
            $tanggal = $this->date->reverse($tanggal2);
            $id_antrian = $_POST['antrian'];
            $id_obat = $_POST['id_obat'];
            $jumlah = $_POST['jumlah'];
            $id_pasien = $this->obat->resep_pasien($tanggal, $id_antrian);
            $this->obat->tambah_isi_resep($id_pasien, $tanggal, $id_obat, $jumlah);
            $views['verify']='Resep dengan id antrian '.$id_antrian.' berhasil dimasukan.';
        }

        $this->view_resep($views);
    }
}
