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

    function data_pasien(){

    }

    function rekam_medik_pasien() {                  //buat ngeload halaman remed pasien gigi& buat nampilin tab poli gigi
        $remed_pasien=$this->remed->get_remed_pasien_gigi();
        $remed['remed_pasien']=$remed_pasien;
        $this->load->view('remed_gigi_view',$remed);

    }


    function data_pasien_remed($id_kunjungan) {                  //buat ngambil data pasien yg halaman remed

       
        $id_pasien_yang_sedang_diperiksa = $this->remed->get_id_pasien_by_kunjungan($id_kunjungan);
        $id_pasien_yang_sedang_diperiksa = $id_pasien_yang_sedang_diperiksa[0]['id_pasien'];
 if($this->input->post('submit')) {

            // insert ke tabel remed_poli_gigi
            $data1 = array(
                    'tanggal_kunjungan_gigi' => $this->input->post('n_tgl'),
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
        
        $remed_tbc=$this->remed->remed_poli_umum_tbc($id_pasien_yang_sedang_diperiksa);
        $remed['tbc']=$remed_tbc;
        
        $remed_ispa=$this->remed->remed_poli_umum_ispa($id_pasien_yang_sedang_diperiksa);
        $remed['ispa']=$remed_ispa;

        $remed_campak=$this->remed->remed_poli_umum_campak($id_pasien_yang_sedang_diperiksa);
        $remed['campak']=$remed_tbc;

        $remed_diare=$this->remed->remed_poli_umum_diare($id_pasien_yang_sedang_diperiksa);
        $remed['diare']=$remed_diare;
        
        $data_lay=$this->remed->get_layanan($id_pasien_yang_sedang_diperiksa);
        $remed['data_lay']=$data_lay;

        $lab=$this->remed->lab($id_pasien_yang_sedang_diperiksa);
        $lab['lab']=$lab;

        $remed['id_pasien']=$id_pasien_yang_sedang_diperiksa;

        $data_peny=$this->remed->get_penyakit($id_pasien_yang_sedang_diperiksa);
        $remed['data_peny']=$data_peny;
        $this->load->view('remed_gigi_view',$remed);
    }


    function  data_diagnosis_dokter() {         //NAMPILIN HASIL DIAGNOSIS DOKTER

        $this->load->view('data_diagnosis_dokter_view');

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

     function  remed_poli_kia_pop($id_pasien, $tanggal_kunjungan_kia) {          //NAMPILIN REKAM MEDIK PER PASIEN
        $pop_pasien=$this->remed->remed_poli_lain_pasien($id_pasien);
        $data['pop_pasien']=$pop_pasien;


        $pop_tanggal_k=$this->remed->nyari_tanggal_k($tanggal_kunjungan_kia);
        $data['pop_tanggal_k']=$pop_tanggal_k;
       $pop_k=$this->remed->get_remed_pasien_kia($id_pasien);
        $data['pop_kia']=$pop_k;

        $this->load->view('data_remed_poli_kia_view',$data);

    }


    function pasien_remed_berhasil($id_kunjungan) {                  //buat ngambil data pasien yg halaman remed


        $id_pasien_yang_sedang_diperiksa = $this->remed->get_id_pasien_by_kunjungan($id_kunjungan);
        $id_pasien_yang_sedang_diperiksa = $id_pasien_yang_sedang_diperiksa[0]['id_pasien'];
 if($this->input->post('submit')) {

            // insert ke tabel remed_poli_gigi
            $data1 = array(
                    'tanggal_kunjungan_gigi' => $this->input->post('n_tgl'),
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

        $remed_tbc=$this->remed->remed_poli_umum_tbc($id_pasien_yang_sedang_diperiksa);
        $remed['tbc']=$remed_tbc;

        $remed_ispa=$this->remed->remed_poli_umum_ispa($id_pasien_yang_sedang_diperiksa);
        $remed['ispa']=$remed_ispa;

        $remed_campak=$this->remed->remed_poli_umum_campak($id_pasien_yang_sedang_diperiksa);
        $remed['campak']=$remed_tbc;

        $remed_diare=$this->remed->remed_poli_umum_diare($id_pasien_yang_sedang_diperiksa);
        $remed['diare']=$remed_diare;

        $data_lay=$this->remed->get_layanan($id_pasien_yang_sedang_diperiksa);
        $remed['data_lay']=$data_lay;

        $remed['id_pasien']=$id_pasien_yang_sedang_diperiksa;

        $data_peny=$this->remed->get_penyakit($id_pasien_yang_sedang_diperiksa);
        $remed['data_peny']=$data_peny;
        $this->load->view('remed_berhasil',$remed);
    }


     function cari_pasien(){
        $data = array();
        $kode_pasien = $this->input->post('kode_pasien');
        $nama_pasien = $this->input->post('nama_pasien');
        $umur_pasien = $this->input->post('umur_pasien');
        $alamat = $this->input->post('alamat_pasien');

        if($this->input->post('submit')) {

        $hasil_cari = $this->data->cari_pasien($kode_pasien,$nama_pasien,$umur_pasien,$alamat);
        $data['hasil_cari_pasien'] = $hasil_cari;
        }
        $this->load->view('data_pasien_view', $data);

    }


    function selesai_pemeriksaan(){
        $selesai=$this->data->get_semua_data_pasien();
        $selesai['data_pasien']=$selesai;
        $this->load->view('pemeriksaan_selesai',$selesai);
    }
}
?>