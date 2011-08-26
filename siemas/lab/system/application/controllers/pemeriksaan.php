<?php

class Pemeriksaan extends Controller {

    function  __construct() {
        parent::Controller();
        $this->load->model('M_pembayaran');
        $this->load->model('M_kunjungan');
        $this->load->model('M_pasien');
        $this->load->model('M_kk');
    }

    function index() {
    
        
    }

    function permohonan_analisa($id_kunjungan) {
        $id = $this->M_kunjungan->get_pasien_by_kunjungan($id_kunjungan);
        $id_kk = $id[0]['id_kk'];
        $id_pasien = $id[0]['id_pasien'];
        
        $data_pasien = $this->M_pasien->lihat_profil_pasien($id_kk, $id_pasien);
        $data['pasien'] = $data_pasien;
        $data['kunjungan'] = $id;
        $data['layanan'] = $this->M_pembayaran->get_layanan_by_pasien($id_kunjungan);
        
        $this->load->view('permohonan_analisa',$data);
    }


    
}


