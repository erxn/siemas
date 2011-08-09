<?php

class Pembayaran extends Controller {

    function __construct() {
        parent::Controller();
        $this->load->model('M_pembayaran');
        $this->load->model('M_kunjungan');
        $this->load->model('M_pasien');
        $this->load->model('M_kk');
    }

    function index() {
        $this->data_pembayaran();
    }

    function data_pembayaran($tanggal = 0){

        if($tanggal == 0) {
            $tanggal = date("Y-m-d");
        }
        $pembayaran = $this->M_pembayaran->data_pembayaran($tanggal);
        $data['pembayaran'] = $pembayaran;
       
        $this->load->view('loket_pembayaran',$data);
    }

    function rincian() {
        $this->load->view('rincian');
    }

    function input_pembayaran($id_kunjungan) {
            
            $id = $this->M_kunjungan->get_pasien_by_kunjungan($id_kunjungan);
            $id_kk = $id[0]['id_kk'];
            $id_pasien = $id[0]['id_pasien'];
            $data_pasien = $this->M_pasien->lihat_profil_pasien($id_kk, $id_pasien);
            $data['pasien'] = $data_pasien;
            $data['kunjungan'] = $id;
            $this->load->view('input_pembayaran',$data);
        
    }
}