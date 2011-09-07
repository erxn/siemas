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


        $gigi_pab1=$this->stat->get_kunjungan_gigi_wil($wil1,$gigi,$tgl1);
        $gigi_cib1=$this->stat->get_kunjungan_gigi_wil($wil1,$gigi,$tgl1);
        $gigi_lw1=$this->stat->get_kunjungan_gigi_status($stat1,$gigi,$tgl1);
        $gigi_lk1=$this->stat->get_kunjungan_gigi_status($stat2,$gigi,$tgl1);

        $penyakit11=$this->stat->get_kunjungan_gigi_penyakit($p1,$gigi,$tgl1);
        $penyakit21=$this->stat->get_kunjungan_gigi_penyakit($p2,$gigi,$tgl1);
        $penyakit31=$this->stat->get_kunjungan_gigi_penyakit($p3,$gigi,$tgl1);
        $penyakit41=$this->stat->get_kunjungan_gigi_penyakit($p4,$gigi,$tgl1);
        $penyakit51=$this->stat->get_kunjungan_gigi_penyakit($p5,$gigi,$tgl1);

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

        'gigi_pab1'=>$gigi_pab1,
        'gigi_cib1'=>$gigi_cib1,
        'gigi_lw1'=>$gigi_lw1,
        'gigi_lk1'=>$gigi_lk1,

        'penyakit11'=> $penyakit11,
        'penyakit21'=> $penyakit21,
        'penyakit31'=> $penyakit31,
        'penyakit41'=> $penyakit41,
        'penyakit51'=> $penyakit51,
        );
        
        

        $data['grafik']=$grafik;

        $this->load->view('stat_v', $data);
    }

}
?>
