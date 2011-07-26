<?php

class Pegawai extends Controller {

    function Pegawai() {
        parent::Controller();
    }

    function index() {
        $this->input_pegawai();
    }

    function input_pegawai() {
        $this->load->view('form/input_pegawai');
    }

    function edit_pegawai_pilih() {
        $this->load->view('form/edit_pegawai_pilih');
    }

    function edit_pegawai($id = 0) {
        $this->load->view('form/edit_pegawai');
    }

    function input_perubahan_gaji() {
        $this->load->view('form/input_perubahan_gaji');
    }

    function input_perubahan_jabatan() {
        $this->load->view('form/input_perubahan_jabatan');
    }

    function input_perubahan_pangkat() {
        $this->load->view('form/input_perubahan_pangkat');
    }

    function input_kenaikan_yad() {
        $this->load->view('form/input_kenaikan_yad');
    }

    function input_struktur_organisasi() {
        $this->load->view('form/input_struktur_organisasi');
    }

}
