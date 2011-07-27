<?php

class Pembayaran extends Controller {

    function __construct() {
        parent::Controller();
    }

    function index() {
        $this->load->view('loket_pembayaran');
    }

    function rincian(){
        $this->load->view('rincian');
    }
}