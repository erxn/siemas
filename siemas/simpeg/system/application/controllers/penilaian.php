<?php

class Penilaian extends Controller {

    function Penilaian()
    {
        parent::Controller();
    }

    function index()
    {

    }

    function input_dp3($tahun = 0) {
        $this->load->view('form/input_dp3');
    }

    function input_tunjangan($bulan = 0, $tahun = 0) {
        $this->load->view('form/input_tunjangan');
    }

    function input_rumus_tpp() {
        $this->load->view('form/input_rumus_tpp');
    }

    function laporan_nilai_dp3($tahun = 0, $tahun2 = 0) {
        $this->load->view('laporan/nilai_dp3');
    }

    function laporan_nilai_tpp($bulan = 0, $tahun = 0) {
        $this->load->view('laporan/nilai_tpp');
    }

    function rekap_tunjangan($bulan = 0, $tahun = 0) {
        $this->load->view('laporan/rekap_tunjangan');
    }

}