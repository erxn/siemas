<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
*/

class Antrian extends Controller {
    function Antrian() {
        parent::Controller();
        $this->load->model('antrian_m','antrian');
        $this->load->model("Rekam_medik_model", "remed");
        $this->load->model("data_pasien_m", "data");


    }

    function index() {
        redirect('antrian/antri/2');
    }

    function antri($id_poli) {

        $this->load->view('antrian_view');
    }
    function tabel_antri($id_poli) {
        $ant=$this->antrian->tabel_antrian_a($id_poli);
        $data['a']=$ant;
        $this->load->view('antrian_antri_umum_v', $data);
    }


    function tabel_periksa($id_poli) {
        $ant=$this->antrian->tabel_antrian_sp($id_poli);
        $data['s']=$ant;
        $this->load->view('antrian_periksa_umum_v', $data);
    }

    function tabel_tunda($id_poli) {
        $ant=$this->antrian->tabel_antrian_tunda($id_poli);
        $data['t']=$ant;
        $this->load->view('antrian_tunda_umum_v', $data);
    }

    function tabel_selesai($id_poli) {

        $antrian=$this->antrian->tabel_antrian_selesai($id_poli);
        $data['sel']=$antrian;
        $this->load->view('antrian_selesai',$data);
    }

    function tabel_terisi($id_poli) {
        $antrian=$this->antrian->tabel_antrian_terisi($id_poli);
        $data['terisi']=$antrian;
        $this->load->view('antrian_terisi_umum_v',$data);
    }

    function periksa($id_antrian) {
        $this->antrian->ubah_status($id_antrian, 'SEDANG DIPROSES');
    }

    function selesai($id_antrian) {
        $this->antrian->ubah_status($id_antrian, 'SELESAI');
    }

    function lewati($id_antrian) {
        $this->antrian->ubah_status($id_antrian, 'TUNDA');
    }

    function rujuk($id_antrian,$id_kunjungan,$id_poli){
        $this->antrian->ubah_status($id_antrian, 'SELESAI');
        $data_antrian = array(
                'status'    => "ANTRI",
                'id_kunjungan' => $id_kunjungan,
                'id_poli' => $id_poli
            );

            $antrian = $this->antrian->tambah_antrian($data_antrian);
    }

    function pasien_hari_ini($id_poli) {
        $antrian=$this->antrian->tabel_antrian_terisi($id_poli);
        $data['ter']=$antrian;

        $antrian=$this->antrian->tabel_antrian_selesai($id_poli);
        $data['selesai']=$antrian;
        $this->load->view('antrian_selesai_umum_v',$data);
    }

    function data_pasien($id_pasien) {
        $data_pasien_remed=$this->remed->data_pasien_remed($id_pasien);    //model
        $remed['data_pasien']=$data_pasien_remed;
        $this->load->view('antrian_tabel_remed_view',$remed);
    }


    function isi_remed_hari_ini($id_pasien = 0, $id_kunjungan = 0, $id_antrian = 0,$tgl=0 ) {

        $remed = array();

        
        if($id_pasien !== 0) {
            $data_pasien_remed=$this->remed->data_pasien_remed($id_pasien);    //model
            $remed['data_pasien']=$data_pasien_remed;
        } else {
            $remed['data_pasien']=null;
        }

        if($this->input->post('submit')) {
            
            // insert ke tabel remed_poli_umum
                $tgl=date("Y-m-d");
            $data1 = array(
                    'tanggal_kunjungan_umum' =>$tgl,
                    'anamnesis'      =>$this->input->post('n_anamnesis'),
                    'diagnosa'      =>$this->input->post('n_diagnosis'),
                    'keterangan'    =>$this->input->post('n_keterangan'),
                    'id_kunjungan'  => $id_kunjungan,
                    'id_pasien' => $id_pasien,
                
          
            );
            $id_remed=$this->remed->insert_umum($data1);

            // insert tabel tbc kalo ada

            if($this->input->post('is_tbc') == '1') {

                $data_tbc = array(
                        'alasan_periksa_lab'      =>$this->input->post('n_alasan_periksa'),
                        'hasil_periksa_lab'      =>$this->input->post('n_hasil_periksa'),
                        'rejimen' =>$this->input->post('n_rejimen'),
                        'klasifikasi_penyakit'=>$this->input->post('n_paru'),
                        'tipe_penderita'=>$this->input->post('tipe_penderita'),
                        'id_remed_umum' => $id_remed
                );
                $id_tbc = $this->remed->insert_tbc($data_tbc);

            } else {

                $id_tbc = null;

            }

            // insert tabel diare kalo ada

            if($this->input->post('is_diare') == '1') {

                $data_diare = array(
                    'etiologi_diare'  =>$this->input->post('n_etiologi_diare'),
                    'keadaan_umum'      =>$this->input->post('n_keadaan_umum'),
                    'keadaan_mata' =>$this->input->post('n_mata'),
                    'keadaan_air_mata'=>$this->input->post('air_mata'),
                    'keadaan_mulut'=>$this->input->post('n_mulut'),
                    'rasa_haus'=>$this->input->post('n_haus'),
                    'turgor'=>$this->input->post('n_turgor'),
                    'derajat_dehidrasi'=>$this->input->post('n_dehidrasi'),
                    'pemeriksaan_lab_khorela'=>$this->input->post('n_lab'),
                    'pemakaian'=>$this->input->post('n_pemakaian'),
                    'keterangan'=>$this->input->post('n_keterangan'),
                    'id_remed_umum' => $id_remed
                );
                $id_diare = $this->remed->insert_diare($data_diare);

            } else {

                $id_diare = null;

            }

            // insert tabel ispa kalo ada

            if($this->input->post('is_ispa') == '1') {

                $data_ispa = array(
                        'frek_nafas'      =>$this->input->post('n_frekuensi_napas'),
                        'klasifikasi'      =>$this->input->post('n_klasifikasi'),
                        'tindak_lanjut' =>$this->input->post('tindak'),
                        'antibiotik'=>$this->input->post('antibiotik'),
                        'kondisi_kunjungan_ulang'=>$this->input->post('n_kunjungan_ulang'),
                        'keterangan'=>$this->input->post('n_keterangan'),
                        'id_remed_umum' => $id_remed
                );
                $id_ispa = $this->remed->insert_ispa($data_ispa);

            } else {

                $id_ispa = null;

            }


            
            $data1['diagnosa'] = $id_remed;

             $data3=array(
                    'id_penyakit' =>$this->input->post('n_penyakit'),
                    'id_remed_umum'=>$id_remed

            );
            $this->remed->insert_penyakit($data3);
            
            // update ke TERISI
            $this->antrian->ubah_status($id_antrian, 'TERISI');

            redirect('antrian/remed_berhasil/');

        }
       
        $data_pasien_remed=$this->remed->data_pasien_remed($id_pasien);    //model
        $remed['data_pasien']=$data_pasien_remed;

        $remed_pasien=$this->remed->get_remed_pasien_gigi($id_pasien,$tgl);
        $remed['remed_gigi']=$remed_pasien;

        $remed_kia=$this->remed->get_remed_pasien_kia($id_pasien);
        $remed['remed_kia']=$remed_kia;

        $remed_umum=$this->remed->get_remed_pasien_umum($id_pasien,$tgl);
        $remed['remed_umum']=$remed_umum;
        
        $remed_tbc=$this->remed->remed_poli_umum_tbc($id_kunjungan,$tgl);
        $remed['tbc']=$remed_tbc;

        $remed_ispa=$this->remed->remed_poli_umum_ispa($id_kunjungan,$tgl);
        $remed['ispa']=$remed_ispa;

        $remed_diare=$this->remed->remed_poli_umum_diare($id_kunjungan,$tgl);
        $remed['diare']=$remed_diare;

        $data_lay=$this->remed->get_layanan($id_pasien);
        $remed['data_lay']=$data_lay;

//        $lab=$this->remed->lab($id_pasien);
//        $lab['lab']=$lab;

         $penyaki=$this->antrian->penyakit($id_pasien);
        $remed['penyakit']=$penyaki;

        $remed['id_pasien']=$id_pasien;

        $data_peny=$this->remed->get_penyakit($id_pasien);
        $remed['data_peny']=$data_peny;
        $this->load->view('isi_remed_umum',$remed);
    }

    function remed_berhasil($id_pasien = 0, $id_kunjungan = 0, $id_antrian = 0,$tgl=0 ) {

        $remed = array();


        if($id_pasien !== 0) {
            $data_pasien_remed=$this->remed->data_pasien_remed($id_pasien);    //model
            $remed['data_pasien']=$data_pasien_remed;
        } else {
            $remed['data_pasien']=null;
        }

        if($this->input->post('submit')) {

            // insert tabel tbc kalo ada

            if($this->input->post('is_tbc') == '1') {

                $data_tbc = array(
                        'alasan_periksa_lab'      =>$this->input->post('n_alasan_periksa'),
                        'hasil_periksa_lab'      =>$this->input->post('n_hasil_periksa'),
                        'rejimen' =>$this->input->post('n_rejimen'),
                        'klasifikasi_penyakit'=>$this->input->post('n_paru'),
                        'tipe_penderita'=>$this->input->post('tipe_penderita')
                );
                $id_tbc = $this->remed->insert_tbc($data_tbc);

            } else {

                $id_tbc = null;

            }

            // insert tabel diare kalo ada

            if($this->input->post('is_diare') == '1') {

                $data_diare = array(
                    'etiologi_diare'  =>$this->input->post('n_etiologi_diare'),
                    'keadaan_umum'      =>$this->input->post('n_keadaan_umum'),
                    'keadaan_mata' =>$this->input->post('n_mata'),
                    'keadaan_air_mata'=>$this->input->post('air_mata'),
                    'keadaan_mulut'=>$this->input->post('n_mulut'),
                    'rasa_haus'=>$this->input->post('n_haus'),
                    'turgor'=>$this->input->post('n_turgor'),
                    'derajat_dehidrasi'=>$this->input->post('n_dehidrasi'),
                    'pemeriksaan_lab_khorela'=>$this->input->post('n_lab'),
                    'pemakaian'=>$this->input->post('n_pemakaian'),
                    'keterangan'=>$this->input->post('n_keterangan')
                );
                $id_diare = $this->remed->insert_diare($data_diare);

            } else {

                $id_diare = null;

            }

            // insert tabel ispa kalo ada

            if($this->input->post('is_ispa') == '1') {

                $data_ispa = array(
                        'frek_nafas'      =>$this->input->post('n_frekuensi_napas'),
                        'klasifikasi'      =>$this->input->post('n_klasifikasi'),
                        'tindak_lanjut' =>$this->input->post('tindak'),
                        'antibiotik'=>$this->input->post('antibiotik'),
                        'kondisi_kunjungan_ulang'=>$this->input->post('n_kunjungan_ulang'),
                        'keterangan'=>$this->input->post('n_keterangan')
                );
                $id_ispa = $this->remed->insert_ispa($data_ispa);

            } else {

                $id_ispa = null;

            }


            // insert ke tabel remed_poli_umum
                $tgl=date("Y-m-d");
            $data1 = array(
                    'tanggal_kunjungan_umum' =>$tgl,
                    'anamnesis'      =>$this->input->post('n_anamnesis'),
                    'diagnosa'      =>$this->input->post('n_diagnosis'),

                    'keterangan'    =>$this->input->post('n_keterangan'),
                    'id_kunjungan'  => $id_kunjungan,
                    'id_pasien' => $id_pasien,
                    'id_diare' => $id_diare,
                    'id_tbc' => $id_tbc,
                    'id_ispa' => $id_ispa
            );
            $id_remed=$this->remed->insert_umum($data1);
            $data1['diagnosa'] = $id_remed;

 $data3=array(
                    'id_penyakit' =>$this->input->post('n_penyakit'),
                    'id_penyakit1' =>$this->input->post('n_penyakit'),
                    'id_remed_umum'=>$id_remed

            );
            $this->remed->insert_penyakit($data3);

            // update ke TERISI
            $this->antrian->ubah_status($id_antrian, 'TERISI');

            redirect('antrian/isi_remed_hari_ini/');

        }

        $data_pasien_remed=$this->remed->data_pasien_remed($id_pasien);    //model
        $remed['data_pasien']=$data_pasien_remed;

        $remed_pasien=$this->remed->get_remed_pasien_gigi($id_pasien);
        $remed['remed_gigi']=$remed_pasien;

        $remed_kia=$this->remed->get_remed_pasien_kia($id_pasien);
        $remed['remed_kia']=$remed_kia;

        $remed_umum=$this->remed->get_remed_pasien_umum($id_pasien);
        $remed['remed_umum']=$remed_umum;

        $remed_tbc=$this->remed->remed_poli_umum_tbc($id_kunjungan,$tgl);
        $remed['tbc']=$remed_tbc;

        $remed_ispa=$this->remed->remed_poli_umum_ispa($id_kunjungan,$tgl);
        $remed['ispa']=$remed_ispa;

        $remed_diare=$this->remed->remed_poli_umum_diare($id_kunjungan,$tgl);
        $remed['diare']=$remed_diare;

        $data_lay=$this->remed->get_layanan($id_pasien);
        $remed['data_lay']=$data_lay;

        $lab=$this->remed->lab($id_pasien);
        $lab['lab']=$lab;

        $remed['id_pasien']=$id_pasien;

        $data_peny=$this->remed->get_penyakit($id_pasien);
        $remed['data_peny']=$data_peny;
        $this->load->view('remed_berhasil_umum',$remed);
    }

    function pop_tbc($id_pasien,$id_kunjungan){
        $data_pasien_remed=$this->remed->data_pasien_remed($id_pasien);    //model
        $remed['data_pasien']=$data_pasien_remed;


        $remed_tbc=$this->remed->remed_poli_umum_tbc($id_kunjungan);
        $remed['tbc']=$remed_tbc;
        $this->load->view('p_tbc',$remed);
    }


    function pop_ispa($id_pasien,$id_kunjungan){
        $data_pasien_remed=$this->remed->data_pasien_remed($id_pasien);    //model
        $remed['data_pasien']=$data_pasien_remed;


        $remed_ispa=$this->remed->remed_poli_umum_ispa($id_kunjungan);
        $remed['ispa']=$remed_ispa;
        $this->load->view('p_ispa',$remed);
    }

   function pop_diare($id_pasien,$id_kunjungan){
        $data_pasien_remed=$this->remed->data_pasien_remed($id_pasien);    //model
        $remed['data_pasien']=$data_pasien_remed;


        $remed_diare=$this->remed->remed_poli_umum_diare($id_kunjungan);
        $remed['diare']=$remed_diare;
        $this->load->view('p_diare',$remed);
    }

    function tbc($id_pasien) {


        if($this->input->post('submit')) {

            // insert ke tabel remed_poli_umum

            $data1 = array(
                    'alasan_periksa_lab'      =>$this->input->post('n_alasan_periksa'),
                    'hasil_periksa_lab'      =>$this->input->post('n_hasil_periksa'),
                    'rejimen' =>$this->input->post('n_rejimen'),
                    'klasifikasi_penyakit'=>$this->input->post('n_paru'),
                    'tipe_penderita'=>$this->input->post('tipe_penderita')
            );
            $id_remed=$this->remed->insert_tbc($data1);
            $data1['tbc'] = $id_remed;
             
        }
       
     

        $this->load->view('tbc_v');
    }

    function diare($id_pasien) {

        if($this->input->post('submit')) {

            // insert ke tabel remed_poli_umum

            $data1 = array(
            'etiologu_diare'  =>$this->input->post('n_etiologi_diare'),
            'keadaan_umum'      =>$this->input->post('n_keadaan_umum'),
            'keadaan_mata' =>$this->input->post('n_mata'),
            'keadaan_air_mata'=>$this->input->post('air_mata'),
            'keadaan_mulut'=>$this->input->post('n_mulut'),
            'rasa_haus'=>$this->input->post('n_haus'),
            'turgor'=>$this->input->post('n_turgor'),
            'derajat_dehidrasi'=>$this->input->post('n_dehidrasi'),
            'pemeriksaan_lab_kholera'=>$this->input->post('n_lab'),
            'pemakaian'=>$this->input->post('n_pemakaian'),
            'keterangan'=>$this->input->post('n_keterangan')
            );
            $id_remed=$this->remed->insert_diare($data1);
            $data1['diare'] = $id_remed;
        }
         $data_pasien_remed=$this->remed->data_pasien_remed($id_pasien);    //model
        $remed['data_pasien']=$data_pasien_remed;

        $this->load->view('diare_v');
    }

    function ispa($id_pasien) {

        if($this->input->post('submit')) {

            // insert ke tabel remed_poli_umum

            $data1 = array(
                    'frek_nafas'      =>$this->input->post('n_frekuensi_napas'),
                    'klasifikasi'      =>$this->input->post('n_klasifikasi'),
                    'tindak_lanjut' =>$this->input->post('tindak'),
                    'antibiotik'=>$this->input->post('antibiotik'),
                    'kondisi_kunjungan_ulang'=>$this->input->post('n_kunjungan_ulang'),
                    'keterangan'=>$this->input->post('n_keterangan')
                     );
            $id_remed=$this->remed->insert_ispa($data1);
            $data1['ispa'] = $id_remed;
        }
         $data_pasien_remed=$this->remed->data_pasien_remed($id_pasien);    //model
        $remed['data_pasien']=$data_pasien_remed;

        $this->load->view('ispa_v');
    }


}

?>