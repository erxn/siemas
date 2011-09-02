
<?php

class Umum_numpang extends Controller{
    function Umum_numpang(){
        parent::Controller();
    }
}

function index(){
    
}
function bulanan_layanan(){
         $this->load->plugin('phpexcel');
//         $lay_tgl=$this->lap->layanan_harian($tanggal, $bulan, $tahun);
//        $layanan['layanan_tgl']=$lay_tgl;

         $lay=$this->lap->layanan();
        $layanan['layanan_h']=$lay;
       $this->load->view('laporan_harian_excel_lay',$layanan);
    }

    ?>