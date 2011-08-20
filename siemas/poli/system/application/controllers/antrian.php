<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Antrian extends Controller{
    function Antrian(){
        parent::Controller();
        $this->load->model('antrian_m','antrian');

        
    }

    function index(){

    }

    function antri(){
        $this->load->view('antrian_view');
    }

    function tabel_antri($id_poli) {
        $ant=$this->antrian->tabel_antrian_a($id_poli);
        $data['a']=$ant;
        $this->load->view('antrian_tabel_antri_view', $data);
    }

    function tabel_diperiksa($id_poli) {
        $ant=$this->antrian->tabel_antrian_sp($id_poli);
        $data['s']=$ant;
        $this->load->view('antrian_tabel_diperiksa_view', $data);
    }

    function tabel_tunda($id_poli) {
        $ant=$this->antrian->tabel_antrian_tunda($id_poli);
        $data['t']=$ant;
        $this->load->view('antrian_tabel_tunda_view', $data);
    }

    function isi_remed_hari_ini($id_poli){
        $antrian=$this->antrian->tabel_antrian_selesai($id_poli);
        $data1['selesai']=$antrian;
        $this->load->view('isi_remed',$data1);
    }

    function periksa($id_antrian) {
        $this->antrian->ubah_status($id_antrian, 'SEDANG DIPROSES');
    }

    function selesai($id_antrian) {
        $this->antrian->ubah_status($id_antrian, 'SELESAI');
    }

    function lewati($id_antrian) {
        $this->antrian->ubah_status($id_antrian, 'TUNDA');
    }
}

?>