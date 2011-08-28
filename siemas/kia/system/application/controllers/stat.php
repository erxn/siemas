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

        if($this->input->post('submit')) {
            $tgl=$this->input->post('tgl_statistik');
        }
        else {
            $tgl=date("d-m-Y");
        }

        $data['tgl']=$tgl;

        $tgl=date("Y-m-d",strtotime($tgl));

        $wil1="pabaton";
        $stat1="Luar wilayah";
        $wil2="cibogor";
        $stat2="Luar kota";
        $kia=3;


        $kia_pab=$this->stat->get_kunjungan_kia_wil($wil1,$kia,$tgl);
        $kia_cib=$this->stat->get_kunjungan_kia_wil($wil1,$kia,$tgl);
        $kia_lw=$this->stat->get_kunjungan_kia_status($stat1,$kia,$tgl);
        $kia_lk=$this->stat->get_kunjungan_kia_status($stat2,$kia,$tgl);


        $grafik=array(
        'kia_pab'=>$kia_pab,
        'kia_cib'=>$kia_cib,
        'kia_lw'=>$kia_lw,
        'kia_lk'=>$kia_lk,

        );
        
        

        $data['grafik']=$grafik;

        $this->load->view('stat_v', $data);
    }

}
?>
