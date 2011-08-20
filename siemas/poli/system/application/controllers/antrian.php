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
        $ant=$this->antrian->tabel_antrian_a($id_poli);
        $data['a']=$ant;

        $ant=$this->antrian->tabel_antrian_sp($id_poli);
        $data['s']=$ant;
        $this->load->view('antrian_view',$data);
    }



    function isi_remed_hari_ini($id_poli){
        $antrian=$this->antrian->tabel_antrian_selesai($id_poli);
        $data1['selesai']=$antrian;
        $this->load->view('isi_remed',$data1);
    }
}

?>