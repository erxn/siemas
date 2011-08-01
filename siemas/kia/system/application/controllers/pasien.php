<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Pasien extends Controller{
    function Pasien(){
        parent::Controller();
        $this->load->model("data_pasien_m","dp");
        $this->load->model("Rekam_medik_model","remed");
   }

   function index(){
       $data_pasien=$this->dp->get_data_pasien();
       $data['pasien']=$data_pasien;
       $this->load->view('data_pasien_view',$data);
   }

    function data_pasien_remed($id_kunjungan) {                  //buat ngambil data pasien yg halaman remed

        $id_pasien_yang_sedang_diperiksa = $this->remed->get_id_pasien_by_kunjungan($id_kunjungan);

        $data_kunj_pasien=$this->remed->get_kunj_pasien();
        $remed['data_kunj']=$data_kunj_pasien;

        $data_pasien_remed=$this->remed->data_pasien_remed();    //model
        $remed['data_pasien']=$data_pasien_remed;

        $remed_pasien=$this->remed->get_remed_pasien_gigi();
        $remed['remed_gigi']=$remed_pasien;

        $remed_kia=$this->remed->remed_pasien_kia();
        $remed['remed_kia']=$remed_kia;

        $remed_umum=$this->remed->get_remed_pasien_umum();
        $remed['remed_umum']=$remed_umum;
        $this->load->view('remed_kia_view',$remed);
    }
}

?>
