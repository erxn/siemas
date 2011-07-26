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

}