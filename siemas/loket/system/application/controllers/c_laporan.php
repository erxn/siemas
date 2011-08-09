<?php
class C_laporan extends Controller {

    function __construct() {
        parent::Controller();
        $this->load->model('M_kk');
        $this->load->model('M_pasien');
        $this->load->model('M_kunjungan');
        $this->load->model('M_pembayaran');
    }
    function index(){
        $this->load->view('laporan');
    }

    function rekapitulasi_setoran(){
        $this->load->view('rekapitulasi_setoran');
    }

    function laporan_kunjungan_bulanan(){
        $this->load->view('laporan_kunjungan_bulanan');
    }

    function lb_4(){
        $this->load->view('lb_4');
    }
}