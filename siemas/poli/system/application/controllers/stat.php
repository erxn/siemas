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
        $gigi=1;

        $p1="karies gigi";
        $p2="penyakit pulpa & jaringan periapikal";
        $p3="penyakit gusi & periodontal";
        $p4="penyakit dentofasial termasuk inaloklusi";
        $p5="gangguan gigi & jaringan penunjang lain";

        $gigi_pab=$this->stat->get_kunjungan_gigi_wil($wil1,$gigi,$tgl);
        $gigi_cib=$this->stat->get_kunjungan_gigi_wil($wil1,$gigi,$tgl);
        $gigi_lw=$this->stat->get_kunjungan_gigi_status($stat1,$gigi,$tgl);
        $gigi_lk=$this->stat->get_kunjungan_gigi_status($stat2,$gigi,$tgl);


        $penyakit1=$this->stat->get_kunjungan_gigi_penyakit($p1,$gigi,$tgl);
        $penyakit2=$this->stat->get_kunjungan_gigi_penyakit($p2,$gigi,$tgl);
        $penyakit3=$this->stat->get_kunjungan_gigi_penyakit($p3,$gigi,$tgl);
        $penyakit4=$this->stat->get_kunjungan_gigi_penyakit($p4,$gigi,$tgl);
        $penyakit5=$this->stat->get_kunjungan_gigi_penyakit($p5,$gigi,$tgl);


        $grafik=array(
        'gigi_pab'=>$gigi_pab,
        'gigi_cib'=>$gigi_cib,
        'gigi_lw'=>$gigi_lw,
        'gigi_lk'=>$gigi_lk,

        'penyakit1'=> $penyakit1,
        'penyakit2'=> $penyakit2,
        'penyakit3'=> $penyakit3,
        'penyakit4'=> $penyakit4,
        'penyakit5'=> $penyakit5,

        );
        
        

        $data['grafik']=$grafik;

        $this->load->view('stat_v', $data);
    }

}
?>
