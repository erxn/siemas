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

    function input_pembayaran(){
        $this->load->view('input_pembayaran');
    }
}