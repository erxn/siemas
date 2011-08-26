<?php
class Antrian extends Controller{
    function Antrian(){
        parent::Controller();
        $this->load->model('M_antrian');
        $this->load->model('M_pembayaran');
    }

    function index(){

    }
    function antri() {
        $antrian_lab = $this->M_pembayaran->get_layanan_poli_lunas("lab");
        $data['antri_lab'] = $antrian_lab;
        $this->load->view('antrian',$data);
        
    }
}

