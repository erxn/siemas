<?php

class Autocomplete extends Controller {

    function Autocomplete() {
        parent::Controller();
        $this->load->model("M_autocomplete");
    }

    function index() {

    }

    function nama_pasien() {

        $nama = $this->input->post('term');
        
        $daftar_pasien = $this->M_autocomplete->get_pasien_by_nama($nama);
        $array_autocomplete = array();

        foreach ($daftar_pasien as $pasien) {
            $array_autocomplete[] = $pasien['nama_pasien'];
        }

        echo json_encode($array_autocomplete);
    }

    function nama_kk() {

        $nama = $this->input->post('term');

        $daftar_kk = $this->M_autocomplete->get_kk_by_nama($nama);
        $array_autocomplete = array();

        foreach ($daftar_kk as $kk) {
            $array_autocomplete[] = $kk['nama_kk'];
        }

        echo json_encode($array_autocomplete);
    }

    function kode_pasien() {

        $kode = $this->input->post('term');

        $daftar_kode= $this->M_autocomplete->get_kode_pasien($kode);
        $array_autocomplete = array();

        foreach ($daftar_kode as $kode) {
            $array_autocomplete[] = $kode['kode_pasien'];
        }

        echo json_encode($array_autocomplete);
    }

}

