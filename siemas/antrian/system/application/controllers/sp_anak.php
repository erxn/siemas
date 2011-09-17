<?php

class Sp_anak extends Controller {

    var $id_poli = 9;         // sesuai databes
    var $folder_view = 'sp_anak'; // folder di view
    var $controller  = 'sp_anak'; // myself

    function Sp_anak() {
        parent::Controller();
        $this->load->model('antrian_m','antrian');
        $this->load->model("data_pasien_model", "data");
    }

    function index() {
        $data['folder'] = $this->folder_view;
        $data['myself'] = $this->controller;
        $this->load->view($this->folder_view . '/antrian_view', $data);
    }

    function tabel_antri() {
        $ant=$this->antrian->tabel_antrian_a($this->id_poli);
        $data['a']=$ant;
        $this->load->view($this->folder_view . '/antrian_tabel_antri_view', $data);
    }

    function tabel_diperiksa() {
        $ant=$this->antrian->tabel_antrian_sp($this->id_poli);
        $data['s']=$ant;
        $this->load->view($this->folder_view . '/antrian_tabel_diperiksa_view', $data);
    }

    function tabel_tunda() {
        $ant=$this->antrian->tabel_antrian_tunda($this->id_poli);
        $data['t']=$ant;
        $this->load->view($this->folder_view . '/antrian_tabel_tunda_view', $data);
    }

     function tabel_selesai() {
        $antrian=$this->antrian->tabel_antrian_selesai($this->id_poli);
        $data['sel']=$antrian;
        $this->load->view($this->folder_view . '/antrian_selesai',$data);
    }

    function tabel_terisi() {
        $antrian=$this->antrian->tabel_antrian_terisi($this->id_poli);
        $data['terisi']=$antrian;
        $this->load->view($this->folder_view . '/antrian_terisi_view',$data);
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



//    function pasien_hari_ini() {
//        $antrian=$this->antrian->tabel_antrian_terisi($this->id_poli);
//        $data['t']=$antrian;
//
//        $antrian=$this->antrian->tabel_antrian_selesai($this->id_poli);
//        $data['selesai']=$antrian;
//        $this->load->view('antrian_tabel_selesai_view',$data);
//    }
//
//    function data_pasien($id_pasien) {
//        $data_pasien_remed=$this->remed->data_pasien_remed($id_pasien);    //model
//        $remed['data_pasien']=$data_pasien_remed;
//        $this->load->view('antrian_tabel_remed_view',$remed);
//    }

}

?>