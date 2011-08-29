<?php
class Valid extends Controller {
    function Valid() {
        parent::Controller();
        $this->load->library(array('table','validation'));
        $this->load->helper('url');
    }
    function index() {
    $this->validasi();
        
    }

    function validasi(){
        if($this->input->post('submit')){
            $nama = $this->input->post('nama');
            $jurusan = $this->input->post('jurusan');
        }
        
        $this->load->view('validasi');
    }
}