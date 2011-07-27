<?php
class Kk extends Controller {

    function __construct() {
        parent::Controller();
    }

    function profil_kk(){
       $this->load->view('profil_kk');
    }

    function register_kk(){
        $this->load->view('registrasi_kk');
    }

    function register_kk_proses(){
         $this->load->view('registrasi_kk_sukses');
    }
}