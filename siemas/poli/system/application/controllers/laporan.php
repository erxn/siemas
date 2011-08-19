<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Laporan extends Controller{
    function Laporan(){
        parent::Controller();
         $this->load->model('laporan_model', "lap");
        $this->load->library('pagination');

    }

    function index(){
        $this->load->view('laporan_view');
    }

    function lap_hp(){
         $data['title']='menampilkan data pasien';
       $data['detail']=$this->lap->lap_hp();
       $this->load->view('lap_hp_v',$data);
  }


 
  function export_to_excell_penyakit()
    {
    $query['data1']=$this->lap->lap_hp_excell();
    $this->load->view('lap_hp_excell_v',$query);
}

 function lap_ht(){
         $data['title']='menampilkan data pasien';
       $data['hari_tindakan']=$this->lap->lap_ht();
       $this->load->view('lap_ht_v',$data);
  }
  function export_to_excell_tindakan()
    {
    $query['hari_tindakan_excell']=$this->lap->lap_ht_excell();
    $this->load->view('lap_ht_excell_v',$query);
    }

    function lap_bulanan_tindakan(){
       
        $this->load->view('lap_bulanan_tindakan');
    }

    function lap_bulanan_penyakit(){
        $this->load->view('lap_bulanan_penyakit');
    }

    
    function bulanan_layanan(){
         $this->load->plugin('phpexcel');
//         $lay_tgl=$this->lap->layanan_harian($tanggal, $bulan, $tahun);
//        $layanan['layanan_tgl']=$lay_tgl;
        
         $lay=$this->lap->layanan();
        $layanan['layanan_h']=$lay;
       $this->load->view('laporan_harian_excel_lay',$layanan);
    }

     function bulanan_penyakit(){
        $this->load->plugin('phpexcel');
        $this->load->view('laporan_harian_excel_peny');
    }

    function tahunan(){
        $this->load->plugin('phpexcel');
        $this->load->view('laporan_tahunan');
    }

   
}
?>
