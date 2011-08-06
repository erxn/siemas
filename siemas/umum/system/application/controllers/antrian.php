<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Antrian extends Controller{
    function Antrian(){
        parent::Controller();
        $this->load->model('antrian_m','antrian');


    }

    function index(){

    }

     function antri($id_poli){
        $ant=$this->antrian->tabel_antrian($id_poli);
        $data['a']=$ant;
        $this->load->view('antrian_view',$data);
    }

}

?>