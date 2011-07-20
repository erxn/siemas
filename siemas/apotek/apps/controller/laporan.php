<?php defined('THISPATH') or die('Can\'t access directly!');

class Controller_laporan extends Panada {
    
    public function __construct(){
        parent::__construct();
		$this->db = new library_db();
		$this->session = new Library_session();
    }
    
    public function index(){
        $views['page_title']    = 'Laporan - Apotek';
        $this->view_laporan($views);
    }
	
	public function harian(){
        $views['page_title']    = 'Laporan Harian - Apotek';
		$views['tanggal'] = date('d-m-Y');
		$views['date']=NULL;
		if($_POST){
			$tanggal=$_POST['tanggal'];
			$views['date']=$tanggal;
			}
        $this->view_laporan_harian($views);
    }
	
	public function bulanan(){
        $views['page_title']    = 'Laporan Bulanan - Apotek';
        $this->view_laporan_bulanan($views);
    }
	
	public function tahunan(){
        $views['page_title']    = 'Laporan Tahunan - Apotek';
        $this->view_laporan_tahunan($views);
    }
	
	public function pemasukan(){
        $views['page_title']    = 'Laporan Pemasukan Obat - Apotek';
        $views['tanggal'] = date('d-m-Y');
        $this->view_laporan_pemasukan($views);
    }
	
	public function pemakaian(){
        $views['page_title']    = 'Laporan Pemakaian Obat - Apotek';
        $views['tanggal'] = date('d-m-Y');
        $this->view_laporan_pemakaian($views);
    }
}
