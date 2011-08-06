<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
*/

class Pasien extends Controller {


    function Pasien() {
        parent::Controller();
        $this->load->model("Data_pasien_model", "data");
        $this->load->model("Rekam_medik_model", "remed");


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


    function data_pasien_remed($id_kunjungan) {                  //buat ngambil data pasien yg halaman remed

        $id_pasien_yang_sedang_diperiksa = $this->remed->get_id_pasien_by_kunjungan($id_kunjungan);
        $id_pasien_yang_sedang_diperiksa = $id_pasien_yang_sedang_diperiksa[0]['id_pasien'];

        $data_kunj_pasien=$this->remed->get_kunj_pasien($id_pasien_yang_sedang_diperiksa);
        $remed['data_kunj']=$data_kunj_pasien;

        $data_pasien_remed=$this->remed->data_pasien_remed($id_pasien_yang_sedang_diperiksa);    //model
        $remed['data_pasien']=$data_pasien_remed;

        $remed_pasien=$this->remed->get_remed_pasien_gigi($id_pasien_yang_sedang_diperiksa);
        $remed['remed_gigi']=$remed_pasien;

        $remed_kia=$this->remed->get_remed_pasien_kia($id_pasien_yang_sedang_diperiksa);
        $remed['remed_kia']=$remed_kia;

        $remed_umum=$this->remed->get_remed_pasien_umum($id_pasien_yang_sedang_diperiksa);
        $remed['remed_umum']=$remed_umum;

        $data_lay=$this->remed->get_layanan($id_pasien_yang_sedang_diperiksa);
        $remed['data_lay']=$data_lay;


        $data_peny=$this->remed->get_penyakit($id_pasien_yang_sedang_diperiksa);
        $remed['data_peny']=$data_peny;



        if($this->input->post('submit')) {

            // insert ke tabel remed_poli_gigi
            $data1 = array(
                    'tanggal_kunjungan_gigi' => '',
                    'anamnesis'      =>$this->input->post('n_anamnesis'),
                    'diagnosis'      =>$this->input->post('n_diagnosa'),
                    'keterangan'    =>$this->input->post('n_ket'),
                    'id_kunjungan'  => $id_kunjungan, //sementara
                    'id_pasien' => $id_pasien_yang_sedang_diperiksa );
            $id_remed=$this->remed->insert_diagnosis($data1);

            // insert ke tabel_layanan
          $data2 = array(
                 'id_layanan'   =>$this->input->post('n_layanan'),
                 'id_remed_gigi'=>$id_remed,
                  );
            $this->remed->insert_layanan($data2);


            $data3=array(
                 'id_penyakit' =>$this->input->post('n_penyakit'),
                 'id_remed_gigi'=>$id_remed
                );
            $this->remed->insert_penyakit($data3);
        }
        $this->load->view('remed_gigi_view',$remed);
    }


    function  data_diagnosis_dokter() {         //NAMPILIN HASIL DIAGNOSIS DOKTER

        $this->load->view('data_diagnosis_dokter_view');

    }

    function  remed_poli_lain() {          //NAMPILIN REKAM MEDIK PER PASIEN

        $this->load->view('data_remed_poli_lain_view');

    }

   
}
?>