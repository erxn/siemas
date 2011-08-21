<?php

class laporan_apotek extends Controller {

    function laporan_apotek()
    {
        parent::Controller();
       $this->load->model('laporan_model','lap');
    }

    function index()
    {

    }

    function harian_layanan(){
        $this->load->plugin('phpexcel');
       $this->load->view('laporan_harian_excel_lay');
    }

     function harian_penyakit(){
        $this->load->plugin('phpexcel');
       $this->load->view('laporan_harian_excel_peny');
    }


    function bulanan_penyakit(){

        $this->load->plugin('phpexcel');
        $this->load->view('laporan_bulanan_excel_peny');

    }

     function bulanan_layanan(){
        $this->load->plugin('phpexcel');
        $this->load->view('laporan_bulanan_excel_lay');
    }
    function tahunan(){
        $this->load->plugin('phpexcel');
        $this->load->view('laporan_tahunan');
    }

    function triwulan1(){
        $this->load->plugin('phpexcel');
        $this->load->view('laporan_triwulan_1');
    }
}
?>
