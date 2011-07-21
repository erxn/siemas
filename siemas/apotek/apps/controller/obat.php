<?php defined('THISPATH') or die('Can\'t access directly!');

class Controller_obat extends Panada {

    public function __construct(){
        parent::__construct();
		$this->db = new library_db();
		$this->session = new Library_session();
                $this->obat = new Model_obat();
    }

    public function index(){
        $views['tanggal'] = date('d-m-Y');
        $views['page_title'] = 'Obat - Apotek';
        $list = $this->obat->ambil();
        $views['list'] = $list;
        $views['jumlah'] = $this->obat->jumlah();
        $this->view_obat($views);
    }

    public function pemakaian_obat(){
        $views['tanggal'] = date('d-m-Y');
        $views['page_title'] = 'Pemakaian Obat - Apotek';
        $this->view_pemakaian_obat($views);
    }

    public function kadaluarsa(){
        $views['tanggal'] = date('d-m-Y');
        $views['page_title'] = 'Kadaluarsa Obat - Apotek';
        $this->view_kadaluarsa($views);
    }

    public function pemakaian_narkotik(){
        $views['tanggal'] = date('d-m-Y');
        $views['page_title'] = 'Pemakaian Narkotik - Apotek';
        $list = $this->obat->ambil_narkotik();
        $views['narkotik'] = $list;
        $this->view_pemakaian_narkotik($views);
    }
}
