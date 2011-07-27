<?php defined('THISPATH') or die('Can\'t access directly!');

class Controller_tambah_obat extends Panada {
    
    public function __construct(){
        parent::__construct();
		$this->session = new Library_session();
                $this->obat = new Model_obat();
                $this->date = new Model_history();
    }
    
    public function index(){
        
        $views['page_title']    = 'Tambah Obat - Apotek';
        $views['error']    = NULL;
        $list = $this->obat->ambil();
        $views['list'] = $list;
        $views['jumlah'] = $this->obat->jumlah();
        $isi['1'] = NULL;
        $n='1';
        if($_POST){
            $sbkk = $_POST['no_sbkk'];
            $isi = $_POST['tambah'];
            $day = $_POST['day'];
            $month = $_POST['month'];
            $year = $_POST['year'];
            $batch = $_POST['no_batch'];
            if(!$sbkk)
                $views['error']    = 'NO SBKK harus diisi';
            else{
                foreach ($list as $list){
                    if(isset ($year[$n]) && isset ($month[$n]) && isset ($day[$n]))
                        {$kadaluarsa[$n]=$this->date->gabung($day[$n], $month[$n], $year[$n]);}
                        else {$kadaluarsa[$n]= NULL;}
                    $n++;
                    }
                $this->obat->tambah($sbkk, $isi, $kadaluarsa, $batch);
                }
        }


        $this->view_tambah_obat($views);
    }
}
