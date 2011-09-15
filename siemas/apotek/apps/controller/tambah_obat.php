<?php defined('THISPATH') or die('Can\'t access directly!');

class Controller_tambah_obat extends Panada {
    
    public function __construct(){
        parent::__construct();
		$this->session = new Library_session();
                $this->obat = new Model_obat();
                $this->date = new Model_history();
    }
    
    public function index(){
        $this->date->cek_history_harian(date('Y-m-d'));
        $views['page_title']    = 'Tambah Obat - Apotek';
        $views['jumlah_kadaluarsa'] = $this->obat->cek_kadaluarsa();
        $views['tanggal'] = date('d-m-Y');
        $views['verify']    = NULL;
        $views['error']    = NULL;
        $list = $this->obat->ambil();
        $views['list'] = $list;
        $views['jumlah'] = $this->obat->jumlah();
        $isi['1'] = NULL;
        $n='1';
        if($_POST){
            $sbkk = $_POST['no_sbkk'];
            $isi = $_POST['tambah'];
            $kadaluarsa = $_POST['kadaluarsa'];
            $batch = $_POST['no_batch'];
            if(!$sbkk)
                $views['error']    = 'NO SBKK harus diisi';
            else{
                foreach ($list as $listnya){
                    if(isset ($kadaluarsa[$n]))
                        {$kadaluarsa1[$n]=$kadaluarsa[$n];}
                        else {$kadaluarsa1[$n]= NULL;}
                    $n++;
                    }
                $views['verify']    = 'Tambah obat dengan no sbkk '.$sbkk.' berhasil dimasukan.';
                $this->obat->tambah($sbkk, $isi, $kadaluarsa1, $batch);
                }
        }


        $this->view_tambah_obat($views);
    }
}
