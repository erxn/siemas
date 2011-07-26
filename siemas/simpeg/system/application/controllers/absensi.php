<?php

class Absensi extends Controller {

    function Absensi() {
        parent::Controller();
    }

    function index() {
        $this->isi_absensi();
    }

    function pilih_tanggal_absensi($tanggal = 0) {
        $this->load->view('form/input_absensi_lama');
    }

    function isi_absensi($tanggal = 0) {
        $this->load->view('form/input_absensi');
    }

    function jam_kerja() {
        $this->load->view('form/input_jadwal_pkm');
    }

    function input_libur($bulan = 0, $tahun = 0) {
        $this->load->view('form/input_libur');
    }

}