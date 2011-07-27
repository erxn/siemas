<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Rekam_medik_gigi extends Controller{
    
    function Rekam_medik_gigi(){
        parent::Controller();
    }
    
    function index(){
        $this->load->view('remed_gigi_view');
    }

    function  data_diagnosis_dokter(){
        $this->load->view('data_diagnosis_dokter_view');
    }
}

?>
