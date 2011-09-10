<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
*/
class Stat extends Controller {
    function Stat() {
        parent::Controller();
        $this->load->model('stat_m','stat');
    }


    function index() {
        $data=array();
        $data['p'] = false;
        
        if($this->input->post('tgl_statistik')) {
            $tgl=$this->input->post('tgl_statistik');
        }
        else {
            $tgl=date("d-m-Y");
        }

        $data['tgl']=$tgl;

        $tgl=date("Y-m-d",strtotime($tgl));


        
         if($this->input->post('tgl_statistik1')) {
            $tgl1=$this->input->post('tgl_statistik1');
            if($_POST['bandingan']==1) $data['p'] = true;

        }
        else {
            $tgl1=date("d-m-Y");
        }

        $data['tgl1']=$tgl1;

        $tgl1=date("Y-m-d",strtotime($tgl1));

        $wil1="pabaton";
        $stat1="Luar wilayah";
        $wil2="cibogor";
        $stat2="Luar kota";
        $umum=2;


        $umum_pab=$this->stat->get_kunjungan_umum_wil($wil1,$umum,$tgl);
        $umum_cib=$this->stat->get_kunjungan_umum_wil($wil1,$umum,$tgl);
        $umum_lw=$this->stat->get_kunjungan_umum_status($stat1,$umum,$tgl);
        $umum_lk=$this->stat->get_kunjungan_umum_status($stat2,$umum,$tgl);

        $tbc=$this->stat->get_kunjungan_umum_tbc($umum,$tgl);
        $diare=$this->stat->get_kunjungan_umum_diare($umum,$tgl);
        $ispa=$this->stat->get_kunjungan_umum_ispa($umum,$tgl);
        $campak=$this->stat->get_kunjungan_umum_campak($umum,$tgl);
        $umum=$this->stat->get_kunjungan_umum_m($umum,$tgl);

        $umum_pab1=$this->stat->get_kunjungan_umum_wil($wil1,$umum,$tgl1);
        $umum_cib1=$this->stat->get_kunjungan_umum_wil($wil1,$umum,$tgl1);
        $umum_lw1=$this->stat->get_kunjungan_umum_status($stat1,$umum,$tgl1);
        $umum_lk1=$this->stat->get_kunjungan_umum_status($stat2,$umum,$tgl1);

        $tbc1=$this->stat->get_kunjungan_umum_tbc($umum,$tgl1);
        $diare1=$this->stat->get_kunjungan_umum_diare($umum,$tgl1);
        $ispa1=$this->stat->get_kunjungan_umum_ispa($umum,$tgl1);
        $campak1=$this->stat->get_kunjungan_umum_campak($umum,$tgl1);
        $umum1=$this->stat->get_kunjungan_umum_m($umum,$tgl1);

        $grafik=array(

        'umum_pab'=>$umum_pab,
        'umum_cib'=>$umum_cib,
        'umum_lw'=>$umum_lw,
        'umum_lk'=>$umum_lk,

        'tbc'=>$tbc,
        'diare'=>$diare,
        'ispa'=>$ispa,
        'campak'=> $campak,
        'umum'=>$umum,

        'umum_pab1'=>$umum_pab1,
        'umum_cib1'=>$umum_cib1,
        'umum_lw1'=>$umum_lw1,
        'umum_lk1'=>$umum_lk1,

        'tbc1'=>$tbc1,
        'diare1'=>$diare1,
        'ispa1'=>$ispa1,
        'campak1'=> $campak1,
        'umum1'=>$umum1,
        
        );

        $data['grafik']=$grafik;

        $this->load->view('stat_v', $data);
    }

}
?>
