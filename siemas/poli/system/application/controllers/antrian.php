<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Antrian extends Controller{
    function Antrian(){
        parent::Controller();
        
    }

    function index(){
        $this->load->view('antrian_view');
    }
}

?>