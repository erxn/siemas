<?php

class Registrasi extends Controller {

    function __construct() {
        parent::Controller();
        $this->load->model('M_pasien');
    }

    function index() {
        $data = array();

        if($this->input->post('cari')) {
            $kode_pasien = $this->input->post("kode_pasien");
            $nama_pasien = $this->input->post("nama_pasien");
            $umur_pasien = $this->input->post("umur_pasien");

//            echo $kode_pasien." ".$nama_pasien." ".$umur_pasien;
//            exit;

            $pasien = $this->M_pasien->cari_pasien($kode_pasien,$nama_pasien,$umur_pasien);

//            print_r($pasien);
//            exit;

            $data['hasil_cari_pasien'] = $pasien;
        }
        $data['title'] = 'Registrasi Pasien';
        $this->load->view('registrasi', $data);
        
        }

}