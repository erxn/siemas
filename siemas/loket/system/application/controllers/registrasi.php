<?php

class Registrasi extends Controller {

    function __construct() {
        parent::Controller();
    }

    function index() {
        $this->load->view('registrasi');
    }

}