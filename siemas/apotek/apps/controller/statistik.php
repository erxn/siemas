<?php defined('THISPATH') or die('Can\'t access directly!');

class Controller_statistik extends Panada {

    public function __construct(){
        parent::__construct();
		$this->db = new library_db();
		$this->session = new Library_session();
    }

    public function index(){
        $views['tanggal'] = date('d-m-Y');
        $views['page_title'] = 'Statistik - Apotek';
        $this->view_statistik($views);
    }
}
