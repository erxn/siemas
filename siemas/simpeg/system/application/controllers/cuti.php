<?php

class Cuti extends Controller {

    function Cuti() {
        parent::Controller();
    }

    function index() {
        $this->input_cuti();
    }

    function input_cuti() {
        $this->load->view('form/input_cuti');
    }

}
