<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Statistik extends Controller{
    function Statistik(){
        parent::Controller();
        $this->load->model("statistik_model", "stat");
    }

    function index(){
        $this->load->view('statistik_view');
    }

    function grafik_bulanan_penyakit(){
        $data1 = $this->stat->bulanan_penyakit(8, 2011, 2);
        $data['data1']=$data1;
        $data2 = $this->stat->bulanan_penyakit(8, 2011, 3);
         $data['data2']=$data2;
        $data3 = $this->stat->bulanan_penyakit(8, 2011, 4);
         $data['data3']=$data3;
        $data4 = $this->stat->bulanan_penyakit(8, 2011, 5);
         $data['data4']=$data4;
        $data5 = $this->stat->bulanan_penyakit(8, 2011, 6);
         $data['data5']=$data5;

         $total=$data1+$data2+$data3+$data4+$data5;
         $data['total']=$total;
        $this->load->view('grafik_bulanan_penyakit_view', $data);
      
    }

    function grafik_bulanan_wilayah(){
        $this->load->view('grafik_bulanan_wilayah_view');
    }

    function grafik_tahunan_penyakit(){
        $this->load->view('grafik_tahunan_penyakit_view');
    }

    function grafik_tahunan_wilayah(){
        $this->load->view('grafik_tahunan_wilayah_view');
    }
    
}

?>
