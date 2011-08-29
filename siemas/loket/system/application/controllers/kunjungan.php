<?php

class Kunjungan extends Controller {

    function __construct() {
        parent::Controller();
        $this->load->model('M_pembayaran');
        $this->load->model('M_kunjungan');
        $this->load->model('M_harian');
        $this->load->model('M_pasien');
        $this->load->model('M_kk');
    }

    function index() {
        $this->kunjungan_harian();
    }

    function kunjungan_harian(){
        $data = array();

        if($this->input->post('submit')) {
            $tgl = $this->input->post('tgl_kunjungan');
        } else {
            $tgl = date("d-m-Y");
        }

        $data['tgl'] = $tgl;

        // harian

        $tgl = date("Y-m-d", strtotime($tgl));
        $data['all'] = $this->M_harian->get_all_harian($tgl);
        
        $this->load->view('laporan/kunjungan_harian',$data);
    }

    function kunjungan_harian_askes(){
        $data = array();

        if($this->input->post('submit')) {
            $tgl = $this->input->post('tgl_kunjungan');
        } else {
            $tgl = date("d-m-Y");
        }

        $data['tgl'] = $tgl;

        // harian

        $tgl = date("Y-m-d", strtotime($tgl));
        $data['askes'] = $this->M_harian->get_layanan_harian($tgl,'Askes','Bawa');

        $this->load->view('laporan/kunjungan_harian_askes',$data);
    }

    function kunjungan_harian_jam(){
        $data = array();

        if($this->input->post('submit')) {
            $tgl = $this->input->post('tgl_kunjungan');
        } else {
            $tgl = date("d-m-Y");
        }

        $data['tgl'] = $tgl;

        // harian

        $tgl = date("Y-m-d", strtotime($tgl));
        $data['jam'] = $this->M_harian->get_layanan_harian($tgl,'Jamkesmas');        
        $this->load->view('laporan/kunjungan_harian_jamkesmas',$data);
    }

        function kunjungan_harian_umum(){
        $data = array();

        if($this->input->post('submit')) {
            $tgl = $this->input->post('tgl_kunjungan');
        } else {
            $tgl = date("d-m-Y");
        }

        $data['tgl'] = $tgl;

        // harian

        $tgl = date("Y-m-d", strtotime($tgl));
        $data['umum'] = $this->M_harian->get_umum_harian($tgl,'Umum');

        $this->load->view('laporan/kunjungan_harian_umum',$data);
    }
}
