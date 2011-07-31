<?php

class Registrasi extends Controller {

    function __construct() {
        parent::Controller();
    }

    function index() {
        $data = array();

        if($this->input->post('cari')) {
            $id_pasien = $this->input->post("kode_pasien");
            $nama_pasien = $this->input->post("nama_pasien");
            $umut_pasien = $this->input->post("umur_pasien");

            $data['hasil_cari_pasien'] = $this->M_pasien->cari_pasien($id_pasien,$nama_pasien,$umur_pasien);
       
            }
            $this->load->view('registrasi', $data);
        
    }
    
}