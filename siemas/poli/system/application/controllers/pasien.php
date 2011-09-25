<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
*/

class Pasien extends Controller {


    function Pasien() {
        parent::Controller();
        $this->load->model("Rekam_medik_model", "remed");
        $this->load->model("data_pasien_model", "data");
        $this->load->helper('text');


    }

    function index() {
        $data_pasien= $this->data->get_semua_data_pasien();         //struktur ci kaya gini,,ikutin ajah
        $data['pasien']=$data_pasien;      //['data Pasien']...tserah namanya apa
        $this->load->view('data_pasien_view',$data);
    }

  
    function rekam_medik_pasien() {                  //buat ngeload halaman remed pasien gigi& buat nampilin tab poli gigi
        $remed_pasien=$this->remed->get_remed_pasien_gigi();
        $remed['remed_pasien']=$remed_pasien;
        $this->load->view('remed_gigi_view',$remed);

    }


    
  
    function  remed_poli_gigi_pop($id_pasien, $tanggal_kunjungan_gigi) {          //NAMPILIN REKAM MEDIK PER PASIEN
        $pop_pasien=$this->remed->remed_poli_lain_pasien($id_pasien);
        $data['pop_pasien']=$pop_pasien;

       $pop_gigi=$this->remed->get_remed_pop_gigi($id_pasien,$tanggal_kunjungan_gigi);
        $data['pop_gigi']=$pop_gigi;

        $this->load->view('data_remed_poli_gigi_view',$data);

    }

     function  remed_poli_umum_pop($id_pasien, $tanggal_kunjungan_umum) {          //NAMPILIN REKAM MEDIK PER PASIEN
        $pop_pasien=$this->remed->remed_poli_lain_pasien($id_pasien);
        $data['pop_pasien']=$pop_pasien;

       $pop_u=$this->remed->get_remed_pop_umum($id_pasien,$tanggal_kunjungan_umum);
        $data['pop_umum']=$pop_u;

           $remed_tbc=$this->remed->remed_poli_umum_tbc($id_pasien);
        $remed['tbc']=$remed_tbc;

        $remed_ispa=$this->remed->remed_poli_umum_ispa($id_pasien);
        $remed['ispa']=$remed_ispa;
        
        $remed_diare=$this->remed->remed_poli_umum_diare($id_pasien);
        $remed['diare']=$remed_diare;
        
        $this->load->view('data_remed_poli_umum_view',$data);

    }


 
    
}
?>