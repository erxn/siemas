<?php defined('THISPATH') or die('Can\'t access directly!');

class Controller_home extends Panada {
    
    public function __construct(){
        parent::__construct();
            $this->db = new library_db();
            $this->session = new Library_session();
            $this->obat = new Model_obat();
            $this->histori = new Model_history();
    }
    
    public function index(){
        $views['page_title']    = 'Apotek';
        $views['jumlah_kadaluarsa'] = $this->obat->cek_kadaluarsa();
        $views['jumlah_daftar'] = $this->obat->jumlah();
        $views['jumlah_habis'] = $this->histori->cek_jumlah_habis();
        $this->view_index($views);
    }
}
