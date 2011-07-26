<?php

class Kegiatan extends Controller {

    function Kegiatan() {
        parent::Controller();
    }

    function index() {
        $this->input_kegiatan();
    }

    function input_kegiatan() {
        $this->load->view('form/input_kegiatan');
    }

}
