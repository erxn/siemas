<?php defined('THISPATH') or die('Can\'t access directly!');

class Controller_laporan extends Panada {
    
    public function __construct(){
        parent::__construct();
                $this->excel = new Model_laporan();

		$this->session = new Library_session();
                $this->date = new Model_history();
                $this->obat = new Model_obat();
    }
    
    public function index(){
        $views['page_title']    = 'Laporan - Apotek';
        $views['jumlah_kadaluarsa'] = $this->obat->cek_kadaluarsa();
        $this->view_laporan($views);
    }
	
	public function harian(){
        $views['page_title']    = 'Laporan Harian - Apotek';
        $views['jumlah_kadaluarsa'] = $this->obat->cek_kadaluarsa();
        $views['base_url']    = $this->base_url;
		$views['tanggal'] = date('d-m-Y');
		$views['date']=NULL;
                $views['base_awal']=$this->date->dasar_url($this->base_url);
                    
		if($_POST){
			$tanggal=$_POST['tanggal'];
			$views['date']=$tanggal;
                        $tanggal2 = $this->date->reverse($tanggal);
                        $data_harian = $this->excel->harian($tanggal2);
                        $this->session->set('data_harian',$data_harian);
                        $this->session->set('tanggal_harian',$tanggal);
                        $this->redirect('index.php/excel/harian/');
			}
        $this->view_laporan_harian($views);
    }
	
	public function bulanan(){
            $views['page_title']    = 'Laporan Bulanan - Apotek';
            $views['jumlah_kadaluarsa'] = $this->obat->cek_kadaluarsa();
            if($_POST){
		$bulan=$_POST['bulan'];
                $tahun=$_POST['tahun'];
                if($bulan<10)
                    {$TB = $tahun.'-0'.$bulan;}
                    else{$TB = $tahun.'-'.$bulan;}
                $n=1;
                $data_bulanan = $this->excel->bulanan($TB);
                $this->session->set('data_bulanan',$data_bulanan);
                $this->session->set('bulan_bulanan',$bulan);
                $this->session->set('tahun_bulanan',$tahun);
                $this->redirect('index.php/excel/bulanan/');
            }

            $this->view_laporan_bulanan($views);
    }
	
	public function tahunan(){
        $views['page_title']    = 'Laporan Tahunan - Apotek';
        $views['jumlah_kadaluarsa'] = $this->obat->cek_kadaluarsa();
        if($_POST){
		$bulan=$_POST['bulan'];
                $tahun=$_POST['tahun'];
                if($bulan<10)
                    {$TB = $tahun.'-0'.$bulan;}
                    else{$TB = $tahun.'-'.$bulan;}
                $n=1;
                $data_tahunan = $this->excel->tahunan($TB);
                $this->session->set('data_tahunan',$data_tahunan);
                $this->session->set('bulan_bulanan',$bulan);
                $this->session->set('tahun_bulanan',$tahun);
                $this->redirect('index.php/excel/tahunan/');
            }

        $this->view_laporan_tahunan($views);
    }
	
	public function pemasukan(){
        $views['page_title']    = 'Laporan Pemasukan Obat - Apotek';
        $views['jumlah_kadaluarsa'] = $this->obat->cek_kadaluarsa();
        $views['tanggal'] = date('d-m-Y');
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
        $this->view_laporan_pemasukan($views);
    }
	
	public function pemakaian(){
        $views['page_title']    = 'Laporan Pemakaian Obat - Apotek';
        $views['jumlah_kadaluarsa'] = $this->obat->cek_kadaluarsa();
        $views['tanggal'] = date('d-m-Y');
        $this->view_laporan_pemakaian($views);
    }
}
