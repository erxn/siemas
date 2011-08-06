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

    $data_peny=$this->remed->get_penyakit($id_pasien_yang_sedang_diperiksa);
      $remed['data_peny']=$data_peny;

        $this->load->view('remed_umum_view',$remed);
    }
    function insert_diagnosis(){
        if($this->input->post('submit')){

            $umum=array(
                'tanggal_kunjungan_umum' =>'',
                'anamnesis' =>$this->input->post('n_anamnesis'),
                'diagnosa'     =>$this->input->post('n_diagnosa'),
                'keterangan'    =>$this->input->post('n_ket')
            );
            $this->remed->insert_diagnosis($umum);

            $tbc=array(
                'alasan_periksa_lab'=> $this->input->post('n_periksa_lab'),
                'hasil_periksa_lab'=> $this->input->post('n_hasil_lab'),
                'rejimen'=>$this->input->post('n_rejimen'),
                'keterangan'=>$this->input->post('n_ket')
            );
            $this->remed->insert_tbc($tbc);

            $ispa=array(

            );

            $diare=array(

            );
        }
        $this->load->view('remed_umum_view');
    }
    
}

?>
