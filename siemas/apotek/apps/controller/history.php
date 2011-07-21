<?php defined('THISPATH') or die('Can\'t access directly!');

class Controller_history extends Panada {

    public function __construct(){
        parent::__construct();
		$this->db = new library_db();
		$this->session = new Library_session();
    }

    public function index(){
        $views['tanggal'] = date('d-m-Y');
        $views['page_title'] = 'History - Apotek';
        $this->view_history($views);
    }
}
