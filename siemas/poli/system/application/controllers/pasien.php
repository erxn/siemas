<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Pasien extends Controller{
   
    
    function Pasien(){
        parent::Controller();
        $this->load->model("Data_pasien_model", "data");
        $this->load->model("Rekam_medik_model", "remed");
    }
    
    function index(){
        $data_pasien= $this->data->get_semua_data_pasien();         //struktur ci kaya gini,,ikutin ajah
        $data['pasien']=$data_pasien;      //['data Pasien']...tserah namanya apa
        $this->load->view('data_pasien_view',$data);
    }

    function rekam_medik_pasien(){
        $remed_pasien=$this->remed->get_remed_pasien_gigi();
       $remed['remed_pasien']=$remed_pasien;
        $this->load->view('remed_gigi_view',$remed);

    }

     function data_pasien_remed(){
         $data_pasien_remed=$this->remed->data_pasien_remed();
         $remed['dr']=$data_pasien_remed;
         $this->load->view('remed_gigi_view',$remed);
     }

    function  data_diagnosis_dokter(){
        $this->load->view('data_diagnosis_dokter_view');
    }
      function  data_remed_poli_lain(){
        $this->load->view('data_remed_poli_lain_view');
    }
}

?>
