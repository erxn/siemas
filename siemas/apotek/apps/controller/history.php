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
    public function resep(){
        $views['tanggal'] = date('d-m-Y');
        $views['page_title'] = 'History Resep - Apotek';
        $views['hasil'] = NULL;
         if($_POST){
            if(isset ($_POST['bulan']) && isset ($_POST['tahun'])){
                $BT = $this->date->gabung2($_POST['bulan'], $_POST['tahun']);
                $hasil = $this->obat->history_bt($BT);
                if(isset ($hasil)){
                    $views['hasil'] = $hasil;
                }   else{
                        $views['alert'] = 'Hasil pencarian pada bulan '.$_POST['bulan'].' tahun '.$_POST['tahun'].' tidak ada.';
                    }
            }
            if(isset ($_POST['tanggal'])){
                $tanggal = $_POST['tanggal'];}

         }

        $this->view_history_resep($views);
    }
}
