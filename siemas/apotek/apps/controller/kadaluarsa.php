<?php defined('THISPATH') or die('Can\'t access directly!');

class Controller_kadaluarsa extends Panada {

    public function __construct(){
        parent::__construct();
		$this->db = new library_db();
		$this->session = new Library_session();
                $this->obat = new Model_obat();
                $this->histori = new Model_history();
    }

    public function index(){
        $views['tanggal'] = date('d-m-Y');
        $views['page_title'] = 'Kadaluarsa - Apotek';
        $views['jumlah_kadaluarsa'] = $this->obat->cek_kadaluarsa();
        if(!$this->obat->cek_kadaluarsa()){
            $views['alert'] = 'Tidak ada obat yang kadaluarsa';
        }
        $views['hasil'] = NULL;
        $views['hasil'] = $this->obat->kadaluarsa();
        $this->view_kadaluarsa($views);
    }

    public function lihat_obat_total(){
        $views['obat_kadaluarsa'] = NULL;
        $views['obat_kadaluarsa'] = $this->obat->lihat_obat_kadaluarsa();
        $this->view_kadaluarsa_LOT($views);
    }

    public function lihat_obat($tanggal,$sbkk){
        $views['tanggal_input'] = $tanggal;
        $views['no_sbkk'] = $sbkk;
        $views['obat_kadaluarsa'] = NULL;
        $views['obat_kadaluarsa'] = $this->obat->lihat_kadaluarsa($tanggal, $sbkk);
        $this->view_kadaluarsa_lihat_obat($views);
    }
}
