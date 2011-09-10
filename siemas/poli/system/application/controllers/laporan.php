<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Laporan extends Controller{
    function Laporan(){
        parent::Controller();
         $this->load->model('laporan_model', "lap");
        $this->load->library('pagination');

    }

    function index(){

        $this->load->view('laporan_view');
    }

    function bulanan_layanan($bulan, $tahun){

//        echo $bulan . ' ' . $tahun; exit;

         $this->load->plugin('phpexcel');
         
         $lay=$this->lap->layanan();
        $layanan['layanan_h']=$lay;
        $layanan['bulan'] = $bulan;
        $layanan['tahun'] = $tahun;
      
       $this->load->view('laporan_harian_excel_lay',$layanan);
    }

     function bulanan_penyakit($bulan,$tahun){
        $this->load->plugin('phpexcel');
        $data['bulan']=$bulan;
        $data['tahun']=$tahun;
        $this->load->view('laporan_harian_excel_peny');
    }

    function tahunan(){
        $this->load->plugin('phpexcel');
        $this->load->view('laporan_tahunan');
    }

   function lb4($bln,$thn){
       $this->load->plugin('phpexcel');


        $lw='luar wilayah'; $lk='luar kota';
       $pab='baton';    $cib='cibogor';
       $askes='askes';  $jamkesmas='jamkesmas'; $umum='umum;';
       $lama='lama';    $baru='baru';
       $hamil_ya='ya';  $hamil_tdk='tidak';
       $anak_ya='ya';  $anak_tdk='tidak';


        for($i=1;$i<=cal_days_in_month(CAL_GREGORIAN, intval($bln), intval($thn)); $i++) {

            $tgl = date("Y-m-d", strtotime("$thn-$bln-$i"));
       //pabaton
       $p_a_anak_lama = $this->lap->lb4($pab,0,$askes,$lama,0,$anak_ya,$tgl);
       $data['pab_a_anak_lama']=$p_a_anak_lama;

       $p_a_anak_baru=$this->lap->lb4($pab,0,$askes,$baru,0,$anak_ya,$tgl);
       $data['pab_a_anak_baru']=$p_a_anak_baru;
       
       $p_a_hamil_lama=$this->lap->lb4($pab,0,$askes,$lama,$hamil_ya,0,$tgl);
       $data['pab_a_hamil_lama']=$p_a_hamil_lama;
       
       $p_a_hamil_baru=$this->lap->lb4($pab,0,$askes,$baru,$hamil_ya,0,$tgl);
       $data['pab_a_hamil_baru']=$p_a_hamil_baru;



       $p_j_anak_lama = $this->lap->lb4($pab,0,$jamkesmas,$lama,0,$anak_ya,$tgl);
       $data['pab_j_anak_lama']=$p_j_anak_lama;

       $p_j_anak_baru=$this->lap->lb4($pab,0,$jamkesmas,$baru,0,$anak_ya,$tgl);
       $data['pab_j_anak_baru']=$p_j_anak_baru;

       $p_j_hamil_lama=$this->lap->lb4($pab,0,$jamkesmas,$lama,$hamil_ya,0,$tgl);
       $data['pab_j_hamil_lama']=$p_j_hamil_lama;

       $p_j_hamil_baru=$this->lap->lb4($pab,0,$jamkesmas,$baru,$hamil_ya,0,$tgl);
       $data['pab_j_hamil_baru']=$p_j_hamil_baru;



       $p_u_anak_lama = $this->lap->lb4($pab,0,$umum,$lama,0,$anak_ya,$tgl);
       $data['pab_u_anak_lama']=$p_u_anak_lama;

       $p_u_anak_baru=$this->lap->lb4($pab,0,$umum,$baru,0,$anak_ya,$tgl);
       $data['pab_u_anak_baru']=$p_u_anak_baru;

       $p_u_hamil_lama=$this->lap->lb4($pab,0,$umum,$lama,$hamil_ya,0,$tgl);
       $data['pab_u_hamil_lama']=$p_u_hamil_lama;

       $p_u_hamil_baru=$this->lap->lb4($pab,0,$umum,$baru,$hamil_ya,0,$tgl);
       $data['pab_u_hamil_baru']=$p_u_hamil_baru;

       //cibogor

       $c_a_anak_lama = $this->lap->lb4($cib,0,$askes,$lama,0,$anak_ya,$tgl);
       $data['cib_a_anak_lama']=$c_a_anak_lama;

       $c_a_anak_baru=$this->lap->lb4($cib,0,$askes,$baru,0,$anak_ya,$tgl);
       $data['cib_a_anak_baru']=$c_a_anak_baru;

       $c_a_hamil_lama=$this->lap->lb4($cib,0,$askes,$lama,$hamil_ya,0,$tgl);
       $data['cib_a_hamil_lama']=$c_a_hamil_lama;

       $c_a_hamil_baru=$this->lap->lb4($cib,0,$askes,$baru,$hamil_ya,0,$tgl);
       $data['cib_a_hamil_baru']=$c_a_hamil_baru;



       $c_j_anak_lama = $this->lap->lb4($cib,0,$jamkesmas,$lama,0,$anak_ya,$tgl);
       $data['cib_j_anak_lama']=$c_j_anak_lama;

       $c_j_anak_baru=$this->lap->lb4($cib,0,$jamkesmas,$baru,0,$anak_ya,$tgl);
       $data['cib_j_anak_baru']=$c_j_anak_baru;

       $c_j_hamil_lama=$this->lap->lb4($cib,0,$jamkesmas,$lama,$hamil_ya,0,$tgl);
       $data['cib_j_hamil_lama']=$c_j_hamil_lama;

       $c_j_hamil_baru=$this->lap->lb4($cib,0,$jamkesmas,$baru,$hamil_ya,0,$tgl);
       $data['cib_j_hamil_baru']=$c_j_hamil_baru;


       $c_u_anak_lama = $this->lap->lb4($cib,0,$umum,$lama,0,$anak_ya,$tgl);
       $data['cib_u_anak_lama']=$c_u_anak_lama;

       $c_u_anak_baru=$this->lap->lb4($cib,0,$umum,$baru,0,$anak_ya,$tgl);
       $data['cib_u_anak_baru']=$c_u_anak_baru;

       $c_u_hamil_lama=$this->lap->lb4($cib,0,$umum,$lama,$hamil_ya,0,$tgl);
       $data['cib_u_hamil_lama']=$c_u_hamil_lama;

       $c_u_hamil_baru=$this->lap->lb4($cib,0,$umum,$baru,$hamil_ya,0,$tgl);
       $data['cib_u_hamil_baru']=$c_u_hamil_baru;





       //status luar wilayah

       $lw_a_anak_lama = $this->lap->lb4(0,$lw,$askes,$lama,0,$anak_ya,$tgl);
       $data['lw_a_anak_lama']=$lw_a_anak_lama;

       $lw_a_anak_baru=$this->lap->lb4(0,$lw,$askes,$baru,0,$anak_ya,$tgl);
       $data['lw_a_anak_baru']=$lw_a_anak_baru;

       $lw_a_hamil_lama=$this->lap->lb4(0,$lw,$askes,$lama,$hamil_ya,0,$tgl);
       $data['lw_a_hamil_lama']=$lw_a_hamil_lama;

       $lw_a_hamil_baru=$this->lap->lb4(0,$lw,$askes,$baru,$hamil_ya,0,$tgl);
       $data['lw_a_hamil_baru']=$lw_a_hamil_baru;



       $lw_j_anak_lama = $this->lap->lb4(0,$lw,$jamkesmas,$lama,0,$anak_ya,$tgl);
       $data['lw_j_anak_lama']=$lw_j_anak_lama;

       $lw_j_anak_baru=$this->lap->lb4(0,$lw,$jamkesmas,$baru,0,$anak_ya,$tgl);
       $data['lw_j_anak_baru']=$lw_j_anak_baru;

       $lw_j_hamil_lama=$this->lap->lb4(0,$lw,$jamkesmas,$lama,$hamil_ya,0,$tgl);
       $data['lw_j_hamil_lama']=$lw_j_hamil_lama;

       $lw_j_hamil_baru=$this->lap->lb4(0,$lw,$jamkesmas,$baru,$hamil_ya,0,$tgl);
       $data['lw_j_hamil_baru']=$lw_j_hamil_baru;



       $lw_u_anak_lama = $this->lap->lb4(0,$lw,$umum,$lama,0,$anak_ya,$tgl);
       $data['lw_u_anak_lama']=$lw_u_anak_lama;

       $lw_u_anak_baru=$this->lap->lb4(0,$lw,$umum,$baru,0,$anak_ya,$tgl);
       $data['lw_u_anak_baru']=$lw_u_anak_baru;

       $lw_u_hamil_lama=$this->lap->lb4(0,$lw,$umum,$lama,$hamil_ya,0,$tgl);
       $data['lw_u_hamil_lama']=$lw_u_hamil_lama;

       $lw_u_hamil_baru=$this->lap->lb4(0,$lw,$umum,$baru,$hamil_ya,0,$tgl);
       $data['lw_u_hamil_baru']=$lw_u_hamil_baru;





       //status luar wilayah bogor

       $lk_a_anak_lama = $this->lap->lb4(0,$lk,$askes,$lama,0,$anak_ya,$tgl);
       $data['lk_a_anak_lama']=$lk_a_anak_lama;

       $lk_a_anak_baru=$this->lap->lb4(0,$lk,$askes,$baru,0,$anak_ya,$tgl);
       $data['lk_a_anak_baru']=$lk_a_anak_baru;

       $lk_a_hamil_lama=$this->lap->lb4(0,$lk,$askes,$lama,$hamil_ya,0,$tgl);
       $data['lk_a_hamil_lama']=$lk_a_hamil_lama;

       $lk_a_hamil_baru=$this->lap->lb4(0,$lk,$askes,$baru,$hamil_ya,0,$tgl);
       $data['lk_a_hamil_baru']=$lk_a_hamil_baru;



       $lk_j_anak_lama = $this->lap->lb4(0,$lk,$jamkesmas,$lama,0,$anak_ya,$tgl);
       $data['lk_j_anak_lama']=$lk_j_anak_lama;

       $lk_j_anak_baru=$this->lap->lb4(0,$lk,$jamkesmas,$baru,0,$anak_ya,$tgl);
       $data['lk_j_anak_baru']=$lk_j_anak_baru;

       $lk_j_hamil_lama=$this->lap->lb4(0,$lk,$jamkesmas,$lama,$hamil_ya,0,$tgl);
       $data['lk_j_hamil_lama']=$lk_j_hamil_lama;

       $lk_j_hamil_baru=$this->lap->lb4(0,$lk,$jamkesmas,$baru,$hamil_ya,0,$tgl);
       $data['lk_j_hamil_baru']=$lk_j_hamil_baru;



       $lk_u_anak_lama = $this->lap->lb4(0,$lk,$umum,$lama,0,$anak_ya,$tgl);
       $data['lk_u_anak_lama']=$lk_u_anak_lama;

       $lk_u_anak_baru=$this->lap->lb4(0,$lk,$umum,$baru,0,$anak_ya,$tgl);
       $data['lk_u_anak_baru']=$lk_u_anak_baru;

       $lk_u_hamil_lama=$this->lap->lb4(0,$lk,$umum,$lama,$hamil_ya,0,$tgl);
       $data['lk_u_hamil_lama']=$lk_u_hamil_lama;

       $lk_u_hamil_baru=$this->lap->lb4(0,$lk,$umum,$baru,$hamil_ya,0,$tgl);
       $data['lk_u_hamil_baru']=$lk_u_hamil_baru;


       //kunjungan baru
       $p_a_kunj_baru=$this->lap->get_pasien_baru($tgl,$askes,$pab,0);
       $data['p_a_kunj_baru']=$p_a_kunj_baru;
       
       $p_j_kunj_baru=$this->lap->get_pasien_baru($tgl,$jamkesmas,$pab,0);
       $data['p_j_kunj_baru']=$p_j_kunj_baru;

       $p_u_kunj_baru=$this->lap->get_pasien_baru($tgl,$umum,$pab,0);
       $data['p_u_kunj_baru']=$p_u_kunj_baru;


       $c_a_kunj_baru=$this->lap->get_pasien_baru($tgl,$askes,$cib,0);
       $data['c_a_kunj_baru']=$c_a_kunj_baru;

       $c_j_kunj_baru=$this->lap->get_pasien_baru($tgl,$jamkesmas,$cib,0);
       $data['c_j_kunj_baru']=$c_j_kunj_baru;

       $c_u_kunj_baru=$this->lap->get_pasien_baru($tgl,$umum,$cib,0);
       $data['c_u_kunj_baru']=$c_u_kunj_baru;


       $lw_a_kunj_baru=$this->lap->get_pasien_baru($tgl,$askes,0,$lw);
       $data['lw_a_kunj_baru']=$lw_a_kunj_baru;

       $lw_j_kunj_baru=$this->lap->get_pasien_baru($tgl,$jamkesmas,0,$lw);
       $data['lw_j_kunj_baru']=$lw_j_kunj_baru;

       $lw_u_kunj_baru=$this->lap->get_pasien_baru($tgl,$umum,0,$lw);
       $data['lw_u_kunj_baru']=$lw_u_kunj_baru;


       $lk_a_kunj_baru=$this->lap->get_pasien_baru($tgl,$askes,0,$lk);
       $data['lk_a_kunj_baru']=$lk_a_kunj_baru;

       $lk_j_kunj_baru=$this->lap->get_pasien_baru($tgl,$jamkesmas,0,$lk);
       $data['lk_j_kunj_baru']=$lk_j_kunj_baru;

       $lk_u_kunj_baru=$this->lap->get_pasien_baru($tgl,$umum,0,$lk);
       $data['lk_u_kunj_baru']=$lk_u_kunj_baru;


       //kunjungan lama
       $p_a_kunj_lama=$this->lap->get_pasien_lama($tgl,$askes,$pab,0);
       $data['p_a_kunj_lama']=$p_a_kunj_lama;

       $p_j_kunj_lama=$this->lap->get_pasien_baru($tgl,$jamkesmas,$pab,0);
       $data['p_j_kunj_lama']=$p_j_kunj_lama;

       $p_u_kunj_lama=$this->lap->get_pasien_lama($tgl,$umum,$pab,0);
       $data['p_u_kunj_lama']=$p_u_kunj_lama;


       $c_a_kunj_lama=$this->lap->get_pasien_lama($tgl,$askes,$cib,0);
       $data['c_a_kunj_lama']=$c_a_kunj_lama;

       $c_j_kunj_lama=$this->lap->get_pasien_lama($tgl,$jamkesmas,$cib,0);
       $data['c_j_kunj_lama']=$c_j_kunj_lama;

       $c_u_kunj_lama=$this->lap->get_pasien_lama($tgl,$umum,$cib,0);
       $data['c_u_kunj_lama']=$c_u_kunj_lama;


       $lw_a_kunj_lama=$this->lap->get_pasien_lama($tgl,$askes,0,$lw);
       $data['lw_a_kunj_lama']=$lw_a_kunj_lama;

       $lw_j_kunj_lama=$this->lap->get_pasien_lama($tgl,$jamkesmas,0,$lw);
       $data['lw_j_kunj_lama']=$lw_j_kunj_lama;

       $lw_u_kunj_lama=$this->lap->get_pasien_lama($tgl,$umum,0,$lw);
       $data['lw_u_kunj_lama']=$lw_u_kunj_lama;


       $lk_a_kunj_lama=$this->lap->get_pasien_lama($tgl,$askes,0,$lk);
       $data['lk_a_kunj_lama']=$lk_a_kunj_lama;

       $lk_j_kunj_lama=$this->lap->get_pasien_lama($tgl,$jamkesmas,0,$lk);
       $data['lk_j_kunj_lama']=$lk_j_kunj_lama;

       $lk_u_kunj_lama=$this->lap->get_pasien_lama($tgl,$umum,0,$lk);
       $data['lk_u_kunj_lama']=$lk_u_kunj_lama;


       //penyakit
       $karies='karies gigi';
       $pulpa='Penyakit Pulpa & Jaringan Periapikal';
       $gusi_periodontal='Penyakit Gusi & Periodontal';
       $dentofasial='Penyakit Dentofasial termasuk inaloklusi';
       $gangguan_gusi='Gangguan Gusi & Jaringan Penunjang Lainnya';

       //karies
       $p_a_karies=$this->lap->get_penyakit($tgl,$askes,$pab,0,$karies);
       $data['p_a_karies']=$p_a_karies;

       $p_j_karies=$this->lap->get_penyakit($tgl,$jamkesmas,$pab,0,$karies);
       $data['p_j_karies']=$p_j_karies;

       $p_u_karies=$this->lap->get_penyakit($tgl,$umum,$pab,0,$karies);
       $data['p_u_karies']=$p_u_karies;


       $c_a_karies=$this->lap->get_penyakit($tgl,$askes,$cib,0,$karies);
       $data['c_a_karies']=$c_a_karies;

       $c_j_karies=$this->lap->get_penyakit($tgl,$jamkesmas,$cib,0,$karies);
       $data['c_j_karies']=$c_j_karies;

       $c_u_karies=$this->lap->get_penyakit($tgl,$umum,$cib,0,$karies);
       $data['c_u_karies']=$c_u_karies;


       $lw_a_karies=$this->lap->get_penyakit($tgl,$askes,0,$lw,$karies);
       $data['lw_a_karies']=$lw_a_karies;

       $lw_j_karies=$this->lap->get_penyakit($tgl,$jamkesmas,0,$lw,$karies);
       $data['lw_j_karies']=$lw_j_karies;

       $lw_u_karies=$this->lap->get_penyakit($tgl,$umum,0,$lw,$karies);
       $data['lw_u_karies']=$lw_u_karies;


       $lk_a_karies=$this->lap->get_penyakit($tgl,$askes,0,$lk,$karies);
       $data['lk_a_karies']=$lk_a_karies;

       $lk_j_karies=$this->lap->get_penyakit($tgl,$jamkesmas,0,$lk,$karies);
       $data['lk_j_karies']=$lk_j_karies;

       $lk_u_karies=$this->lap->get_penyakit($tgl,$umum,0,$lk,$karies);
       $data['lk_u_karies']=$lk_u_karies;


       //penyakit pulpa dan jaringan periodontal
       $p_a_pulpa=$this->lap->get_penyakit($tgl,$askes,$pab,0,$pulpa);
       $data['p_a_pulpa']=$p_a_pulpa;

       $p_j_pulpa=$this->lap->get_penyakit($tgl,$jamkesmas,$pab,0,$pulpa);
       $data['p_j_pulpa']=$p_j_pulpa;

       $p_u_pulpa=$this->lap->get_penyakit($tgl,$umum,$pab,0,$pulpa);
       $data['p_u_pulpa']=$p_u_pulpa;


       $c_a_pulpa=$this->lap->get_penyakit($tgl,$askes,$cib,0,$pulpa);
       $data['c_a_pulpa']=$c_a_pulpa;

       $c_j_pulpa=$this->lap->get_penyakit($tgl,$jamkesmas,$cib,0,$pulpa);
       $data['c_j_pulpa']=$c_j_pulpa;

       $c_u_pulpa=$this->lap->get_penyakit($tgl,$umum,$cib,0,$pulpa);
       $data['c_u_pulpa']=$c_u_pulpa;


       $lw_a_pulpa=$this->lap->get_penyakit($tgl,$askes,0,$lw,$pulpa);
       $data['lw_a_pulpa']=$lw_a_pulpa;

       $lw_j_pulpa=$this->lap->get_penyakit($tgl,$jamkesmas,0,$lw,$pulpa);
       $data['lw_j_pulpa']=$lw_j_pulpa;

       $lw_u_pulpa=$this->lap->get_penyakit($tgl,$umum,0,$lw,$pulpa);
       $data['lw_u_pulpa']=$lw_u_pulpa;


       $lk_a_pulpa=$this->lap->get_penyakit($tgl,$askes,0,$lk,$pulpa);
       $data['lk_a_pulpa']=$lk_a_pulpa;

       $lk_j_pulpa=$this->lap->get_penyakit($tgl,$jamkesmas,0,$lk,$pulpa);
       $data['lk_j_pulpa']=$lk_j_pulpa;

       $lk_u_pulpa=$this->lap->get_penyakit($tgl,$umum,0,$lk,$pulpa);
       $data['lk_u_pulpa']=$lk_u_pulpa;


       //penyakit gusi dan periodontal
       $p_a_periodontal=$this->lap->get_penyakit($tgl,$askes,$pab,0,$gusi_periodontal);
       $data['p_a_periodontal']=$p_a_periodontal;

       $p_j_periodontal=$this->lap->get_penyakit($tgl,$jamkesmas,$pab,0,$gusi_periodontal);
       $data['p_j_periodontal']=$p_j_periodontal;

       $p_u_periodontal=$this->lap->get_penyakit($tgl,$umum,$pab,0,$gusi_periodontal);
       $data['p_u_periodontal']=$p_u_periodontal;


       $c_a_periodontal=$this->lap->get_penyakit($tgl,$askes,$cib,0,$gusi_periodontal);
       $data['c_a_periodontal']=$c_a_periodontal;

       $c_j_periodontal=$this->lap->get_penyakit($tgl,$jamkesmas,$cib,0,$gusi_periodontal);
       $data['c_j_periodontal']=$c_j_periodontal;

       $c_u_periodontal=$this->lap->get_penyakit($tgl,$umum,$cib,0,$gusi_periodontal);
       $data['c_u_periodontal']=$c_u_periodontal;


       $lw_a_periodontal=$this->lap->get_penyakit($tgl,$askes,0,$lw,$gusi_periodontal);
       $data['lw_a_periodontal']=$lw_a_periodontal;

       $lw_j_periodontal=$this->lap->get_penyakit($tgl,$jamkesmas,0,$lw,$gusi_periodontal);
       $data['lw_j_periodontal']=$lw_j_periodontal;

       $lw_u_periodontal=$this->lap->get_penyakit($tgl,$umum,0,$lw,$gusi_periodontal);
       $data['lw_u_periodontal']=$lw_u_periodontal;


       $lk_a_periodontal=$this->lap->get_penyakit($tgl,$askes,0,$lk,$gusi_periodontal);
       $data['lk_a_periodontal']=$lk_a_periodontal;

       $lk_j_periodontal=$this->lap->get_penyakit($tgl,$jamkesmas,0,$lk,$gusi_periodontal);
       $data['lk_j_periodontal']=$lk_j_periodontal;

       $lk_u_periodontal=$this->lap->get_penyakit($tgl,$umum,0,$lk,$gusi_periodontal);
       $data['lk_u_periodontal']=$lk_u_periodontal;


       //penyakit dentofasial termasuk inaloklusi
       $p_a_dentofasial=$this->lap->get_penyakit($tgl,$askes,$pab,0,$dentofasial);
       $data['p_a_dentofasial']=$p_a_dentofasial;

       $p_j_dentofasial=$this->lap->get_penyakit($tgl,$jamkesmas,$pab,0,$dentofasial);
       $data['p_j_dentofasial']=$p_j_dentofasial;

       $p_u_dentofasial=$this->lap->get_penyakit($tgl,$umum,$pab,0,$dentofasial);
       $data['p_u_dentofasial']=$p_u_dentofasial;


       $c_a_dentofasial=$this->lap->get_penyakit($tgl,$askes,$cib,0,$dentofasial);
       $data['c_a_dentofasial']=$c_a_dentofasial;

       $c_j_dentofasial=$this->lap->get_penyakit($tgl,$jamkesmas,$cib,0,$dentofasial);
       $data['c_j_dentofasial']=$c_j_dentofasial;

       $c_u_dentofasial=$this->lap->get_penyakit($tgl,$umum,$cib,0,$dentofasial);
       $data['c_u_dentofasial']=$c_u_dentofasial;


       $lw_a_dentofasial=$this->lap->get_penyakit($tgl,$askes,0,$lw,$dentofasial);
       $data['lw_a_dentofasial']=$lw_a_dentofasial;

       $lw_j_dentofasial=$this->lap->get_penyakit($tgl,$jamkesmas,0,$lw,$dentofasial);
       $data['lw_j_dentofasial']=$lw_j_dentofasial;

       $lw_u_dentofasial=$this->lap->get_penyakit($tgl,$umum,0,$lw,$dentofasial);
       $data['lw_u_dentofasial']=$lw_u_dentofasial;


       $lk_a_dentofasial=$this->lap->get_penyakit($tgl,$askes,0,$lk,$dentofasial);
       $data['lk_a_dentofasial']=$lk_a_dentofasial;

       $lk_j_dentofasial=$this->lap->get_penyakit($tgl,$jamkesmas,0,$lk,$dentofasial);
       $data['lk_j_dentofasial']=$lk_j_dentofasial;

       $lk_u_dentofasial=$this->lap->get_penyakit($tgl,$umum,0,$lk,$dentofasial);
       $data['lk_u_dentofasial']=$lk_u_dentofasial;


       //Gangguan Gusi & Jaringan Penunjang Lainnya
       $p_a_gangguan_gusi=$this->lap->get_penyakit($tgl,$askes,$pab,0,$gangguan_gusi);
       $data['p_a_gangguan_gusi']=$p_a_gangguan_gusi;

       $p_j_gangguan_gusi=$this->lap->get_penyakit($tgl,$jamkesmas,$pab,0,$gangguan_gusi);
       $data['p_j_gangguan_gusi']=$p_j_gangguan_gusi;

       $p_u_gangguan_gusi=$this->lap->get_penyakit($tgl,$umum,$pab,0,$gangguan_gusi);
       $data['p_u_gangguan_gusi']=$p_u_gangguan_gusi;


       $c_a_gangguan_gusi=$this->lap->get_penyakit($tgl,$askes,$cib,0,$gangguan_gusi);
       $data['c_a_gangguan_gusi']=$c_a_gangguan_gusi;

       $c_j_gangguan_gusi=$this->lap->get_penyakit($tgl,$jamkesmas,$cib,0,$gangguan_gusi);
       $data['c_j_gangguan_gusi']=$c_j_gangguan_gusi;

       $c_u_gangguan_gusi=$this->lap->get_penyakit($tgl,$umum,$cib,0,$gangguan_gusi);
       $data['c_u_gangguan_gusi']=$c_u_gangguan_gusi;


       $lw_a_gangguan_gusi=$this->lap->get_penyakit($tgl,$askes,0,$lw,$gangguan_gusi);
       $data['lw_a_gangguan_gusi']=$lw_a_gangguan_gusi;

       $lw_j_gangguan_gusi=$this->lap->get_penyakit($tgl,$jamkesmas,0,$lw,$gangguan_gusi);
       $data['lw_j_gangguan_gusi']=$lw_j_gangguan_gusi;

       $lw_u_gangguan_gusi=$this->lap->get_penyakit($tgl,$umum,0,$lw,$gangguan_gusi);
       $data['lw_u_gangguan_gusi']=$lw_u_gangguan_gusi;


       $lk_a_gangguan_gusi=$this->lap->get_penyakit($tgl,$askes,0,$lk,$gangguan_gusi);
       $data['lk_a_gangguan_gusi']=$lk_a_gangguan_gusi;

       $lk_j_gangguan_gusi=$this->lap->get_penyakit($tgl,$jamkesmas,0,$lk,$gangguan_gusi);
       $data['lk_j_gangguan_gusi']=$lk_j_gangguan_gusi;

       $lk_u_gangguan_gusi=$this->lap->get_penyakit($tgl,$umum,0,$lk,$gangguan_gusi);
       $data['lk_u_gangguan_gusi']=$lk_u_gangguan_gusi;



       //layanan
       $tumpatan_tetap='Tumpatan gigi tetap';
       
       //Tumpatan gigi tetap
       $p_a_tumpatan_tetap=$this->lap->get_layanan($tgl,$askes,$pab,0,$tumpatan_tetap);
       $data['p_a_tumpatan_tetap']=$p_a_tumpatan_tetap;

       $p_j_tumpatan_tetap=$this->lap->get_layanan($tgl,$jamkesmas,$pab,0,$tumpatan_tetap);
       $data['p_j_tumpatan_tetap']=$p_j_tumpatan_tetap;

       $p_u_tumpatan_tetap=$this->lap->get_layanan($tgl,$umum,$pab,0,$tumpatan_tetap);
       $data['p_u_tumpatan_tetap']=$p_u_tumpatan_tetap;


       $c_a_tumpatan_tetap=$this->lap->get_layanan($tgl,$askes,$cib,0,$tumpatan_tetap);
       $data['c_a_tumpatan_tetap']=$c_a_tumpatan_tetap;

       $c_j_tumpatan_tetap=$this->lap->get_layanan($tgl,$jamkesmas,$cib,0,$tumpatan_tetap);
       $data['c_j_tumpatan_tetap']=$c_j_tumpatan_tetap;

       $c_u_tumpatan_tetap=$this->lap->get_layanan($tgl,$umum,$cib,0,$tumpatan_tetap);
       $data['c_u_tumpatan_tetap']=$c_u_tumpatan_tetap;


       $lw_a_tumpatan_tetap=$this->lap->get_layanan($tgl,$askes,0,$lw,$tumpatan_tetap);
       $data['lw_a_tumpatan_tetap']=$lw_a_tumpatan_tetap;

       $lw_j_tumpatan_tetap=$this->lap->get_layanan($tgl,$jamkesmas,0,$lw,$tumpatan_tetap);
       $data['lw_j_tumpatan_tetap']=$lw_j_tumpatan_tetap;

       $lw_u_tumpatan_tetap=$this->lap->get_layanan($tgl,$umum,0,$lw,$tumpatan_tetap);
       $data['lw_u_tumpatan_tetap']=$lw_u_tumpatan_tetap;


       $lk_a_tumpatan_tetap=$this->lap->get_layanan($tgl,$askes,0,$lk,$tumpatan_tetap);
       $data['lk_a_tumpatan_tetap']=$lk_a_tumpatan_tetap;

       $lk_j_tumpatan_tetap=$this->lap->get_layanan($tgl,$jamkesmas,0,$lk,$tumpatan_tetap);
       $data['lk_j_tumpatan_tetap']=$lk_j_tumpatan_tetap;

       $lk_u_tumpatan_tetap=$this->lap->get_layanan($tgl,$umum,0,$lk,$tumpatan_tetap);
       $data['lk_u_tumpatan_tetap']=$lk_u_tumpatan_tetap;


       $pencabutan_tetap='Pencabutan gigi tetap';

       //Pencabutan gigi tetap
       $p_a_pencabutan_tetap=$this->lap->get_layanan($tgl,$askes,$pab,0,$pencabutan_tetap);
       $data['p_a_pencabutan_tetap']=$p_a_pencabutan_tetap;

       $p_j_pencabutan_tetap=$this->lap->get_layanan($tgl,$jamkesmas,$pab,0,$pencabutan_tetap);
       $data['p_j_pencabutan_tetap']=$p_j_pencabutan_tetap;

       $p_u_pencabutan_tetap=$this->lap->get_layanan($tgl,$umum,$pab,0,$pencabutan_tetap);
       $data['p_u_pencabutan_tetap']=$p_u_pencabutan_tetap;


       $c_a_pencabutan_tetap=$this->lap->get_layanan($tgl,$askes,$cib,0,$pencabutan_tetap);
       $data['c_a_pencabutan_tetap']=$c_a_pencabutan_tetap;

       $c_j_pencabutan_tetap=$this->lap->get_layanan($tgl,$jamkesmas,$cib,0,$pencabutan_tetap);
       $data['c_j_pencabutan_tetap']=$c_j_pencabutan_tetap;

       $c_u_pencabutan_tetap=$this->lap->get_layanan($tgl,$umum,$cib,0,$pencabutan_tetap);
       $data['c_u_pencabutan_tetap']=$c_u_pencabutan_tetap;


       $lw_a_pencabutan_tetap=$this->lap->get_layanan($tgl,$askes,0,$lw,$pencabutan_tetap);
       $data['lw_a_pencabutan_tetap']=$lw_a_pencabutan_tetap;

       $lw_j_pencabutan_tetap=$this->lap->get_layanan($tgl,$jamkesmas,0,$lw,$pencabutan_tetap);
       $data['lw_j_pencabutan_tetap']=$lw_j_pencabutan_tetap;

       $lw_u_pencabutan_tetap=$this->lap->get_layanan($tgl,$umum,0,$lw,$pencabutan_tetap);
       $data['lw_u_pencabutan_tetap']=$lw_u_pencabutan_tetap;


       $lk_a_pencabutan_tetap=$this->lap->get_layanan($tgl,$askes,0,$lk,$pencabutan_tetap);
       $data['lk_a_pencabutan_tetap']=$lk_a_pencabutan_tetap;

       $lk_j_pencabutan_tetap=$this->lap->get_layanan($tgl,$jamkesmas,0,$lk,$pencabutan_tetap);
       $data['lk_j_pencabutan_tetap']=$lk_j_pencabutan_tetap;

       $lk_u_pencabutan_tetap=$this->lap->get_layanan($tgl,$umum,0,$lk,$pencabutan_tetap);
       $data['lk_u_pencabutan_tetap']=$lk_u_pencabutan_tetap;


       $tumpatan_sulung='Tumpatan gigi sulung';

       //tumpatan gigi slung
       $p_a_tumpatan_sulung=$this->lap->get_layanan($tgl,$askes,$pab,0,$tumpatan_sulung);
       $data['p_a_tumpatan_sulung']=$p_a_tumpatan_sulung;

       $p_j_tumpatan_sulung=$this->lap->get_layanan($tgl,$jamkesmas,$pab,0,$tumpatan_sulung);
       $data['p_j_tumpatan_sulung']=$p_j_tumpatan_sulung;

       $p_u_tumpatan_sulung=$this->lap->get_layanan($tgl,$umum,$pab,0,$tumpatan_sulung);
       $data['p_u_tumpatan_sulung']=$p_u_tumpatan_sulung;


       $c_a_tumpatan_sulung=$this->lap->get_layanan($tgl,$askes,$cib,0,$tumpatan_sulung);
       $data['c_a_tumpatan_sulung']=$c_a_tumpatan_sulung;

       $c_j_tumpatan_sulung=$this->lap->get_layanan($tgl,$jamkesmas,$cib,0,$tumpatan_sulung);
       $data['c_j_tumpatan_sulung']=$c_j_tumpatan_sulung;

       $c_u_tumpatan_sulung=$this->lap->get_layanan($tgl,$umum,$cib,0,$tumpatan_sulung);
       $data['c_u_tumpatan_sulung']=$c_u_tumpatan_sulung;


       $lw_a_tumpatan_sulung=$this->lap->get_layanan($tgl,$askes,0,$lw,$tumpatan_sulung);
       $data['lw_a_tumpatan_sulung']=$lw_a_tumpatan_sulung;

       $lw_j_tumpatan_sulung=$this->lap->get_layanan($tgl,$jamkesmas,0,$lw,$tumpatan_sulung);
       $data['lw_j_tumpatan_sulung']=$lw_j_tumpatan_sulung;

       $lw_u_tumpatan_sulung=$this->lap->get_layanan($tgl,$umum,0,$lw,$tumpatan_sulung);
       $data['lw_u_tumpatan_sulung']=$lw_u_tumpatan_sulung;


       $lk_a_tumpatan_sulung=$this->lap->get_layanan($tgl,$askes,0,$lk,$tumpatan_sulung);
       $data['lk_a_tumpatan_sulung']=$lk_a_tumpatan_sulung;

       $lk_j_tumpatan_sulung=$this->lap->get_layanan($tgl,$jamkesmas,0,$lk,$tumpatan_sulung);
       $data['lk_j_tumpatan_sulung']=$lk_j_tumpatan_sulung;

       $lk_u_tumpatan_sulung=$this->lap->get_layanan($tgl,$umum,0,$lk,$tumpatan_sulung);
       $data['lk_u_tumpatan_sulung']=$lk_u_tumpatan_sulung;


        $pencabutan_sulung='Pencabutan gigi sulung';

       $pulpa_periapikal='pengobatan pulpa & jaringan periapikal';
       $gusi_periodontal='pengobatan gusi dan atau periodontal';
       $karang_gigi='Pembersihan karang gigi';


       //Pencabutan gigi sulung
       $p_a_pencabutan_sulung=$this->lap->get_layanan($tgl,$askes,$pab,0,$pencabutan_sulung);
       $data['p_a_pencabutan_sulung']=$p_a_pencabutan_sulung;

       $p_j_pencabutan_sulung=$this->lap->get_layanan($tgl,$jamkesmas,$pab,0,$pencabutan_sulung);
       $data['p_j_pencabutan_sulung']=$p_j_pencabutan_sulung;

       $p_u_pencabutan_sulung=$this->lap->get_layanan($tgl,$umum,$pab,0,$pencabutan_sulung);
       $data['p_u_pencabutan_sulung']=$p_u_pencabutan_sulung;


       $c_a_pencabutan_sulung=$this->lap->get_layanan($tgl,$askes,$cib,0,$pencabutan_sulung);
       $data['c_a_pencabutan_sulung']=$c_a_pencabutan_sulung;

       $c_j_pencabutan_sulung=$this->lap->get_layanan($tgl,$jamkesmas,$cib,0,$pencabutan_sulung);
       $data['c_j_pencabutan_sulung']=$c_j_pencabutan_sulung;

       $c_u_pencabutan_sulung=$this->lap->get_layanan($tgl,$umum,$cib,0,$pencabutan_sulung);
       $data['c_u_pencabutan_sulung']=$c_u_pencabutan_sulung;


       $lw_a_pencabutan_sulung=$this->lap->get_layanan($tgl,$askes,0,$lw,$pencabutan_sulung);
       $data['lw_a_pencabutan_sulung']=$lw_a_pencabutan_sulung;

       $lw_j_pencabutan_sulung=$this->lap->get_layanan($tgl,$jamkesmas,0,$lw,$pencabutan_sulung);
       $data['lw_j_pencabutan_sulung']=$lw_j_pencabutan_sulung;

       $lw_u_pencabutan_sulung=$this->lap->get_layanan($tgl,$umum,0,$lw,$pencabutan_sulung);
       $data['lw_u_pencabutan_sulung']=$lw_u_pencabutan_sulung;


       $lk_a_pencabutan_sulung=$this->lap->get_layanan($tgl,$askes,0,$lk,$pencabutan_sulung);
       $data['lk_a_pencabutan_sulung']=$lk_a_pencabutan_sulung;

       $lk_j_pencabutan_sulung=$this->lap->get_layanan($tgl,$jamkesmas,0,$lk,$pencabutan_sulung);
       $data['lk_j_pencabutan_sulung']=$lk_j_pencabutan_sulung;

       $lk_u_pencabutan_sulung=$this->lap->get_layanan($tgl,$umum,0,$lk,$pencabutan_sulung);
       $data['lk_u_pencabutan_sulung']=$lk_u_pencabutan_sulung;


        $pulpa_periapikal='pengobatan pulpa & jaringan periapikal';



       //Pengobatan pulpa & jaringan periapikal
       $p_a_pulpa_periapikal=$this->lap->get_layanan($tgl,$askes,$pab,0,$pulpa_periapikal);
       $data['p_a_pulpa_periapikal']=$p_a_pulpa_periapikal;

       $p_j_pulpa_periapikal=$this->lap->get_layanan($tgl,$jamkesmas,$pab,0,$pulpa_periapikal);
       $data['p_j_pulpa_periapikal']=$p_j_pulpa_periapikal;

       $p_u_pulpa_periapikal=$this->lap->get_layanan($tgl,$umum,$pab,0,$pulpa_periapikal);
       $data['p_u_pulpa_periapikal']=$p_u_pulpa_periapikal;


       $c_a_pulpa_periapikal=$this->lap->get_layanan($tgl,$askes,$cib,0,$pulpa_periapikal);
       $data['c_a_pulpa_periapikal']=$c_a_pulpa_periapikal;

       $c_j_pulpa_periapikal=$this->lap->get_layanan($tgl,$jamkesmas,$cib,0,$pulpa_periapikal);
       $data['c_j_pulpa_periapikal']=$c_j_pulpa_periapikal;

       $c_u_pulpa_periapikal=$this->lap->get_layanan($tgl,$umum,$cib,0,$pulpa_periapikal);
       $data['c_u_pulpa_periapikal']=$c_u_pulpa_periapikal;


       $lw_a_pulpa_periapikal=$this->lap->get_layanan($tgl,$askes,0,$lw,$pulpa_periapikal);
       $data['lw_a_pulpa_periapikal']=$lw_a_pulpa_periapikal;

       $lw_j_pulpa_periapikal=$this->lap->get_layanan($tgl,$jamkesmas,0,$lw,$pulpa_periapikal);
       $data['lw_j_pulpa_periapikal']=$lw_j_pulpa_periapikal;

       $lw_u_pulpa_periapikal=$this->lap->get_layanan($tgl,$umum,0,$lw,$pulpa_periapikal);
       $data['lw_u_pulpa_periapikal']=$lw_u_pulpa_periapikal;


       $lk_a_pulpa_periapikal=$this->lap->get_layanan($tgl,$askes,0,$lk,$pulpa_periapikal);
       $data['lk_a_pulpa_periapikal']=$lk_a_pulpa_periapikal;

       $lk_j_pulpa_periapikal=$this->lap->get_layanan($tgl,$jamkesmas,0,$lk,$pulpa_periapikal);
       $data['lk_j_pulpa_periapikal']=$lk_j_pulpa_periapikal;

       $lk_u_pulpa_periapikal=$this->lap->get_layanan($tgl,$umum,0,$lk,$pulpa_periapikal);
       $data['lk_u_pulpa_periapikal']=$lk_u_pulpa_periapikal;


 $gusi_periodontal='pengobatan gusi dan atau periodontal';

 //Pengobatan gusi
       $p_a_gusi_periodontal=$this->lap->get_layanan($tgl,$askes,$pab,0,$gusi_periodontal);
       $data['p_a_gusi_periodontal']=$p_a_gusi_periodontal;

       $p_j_gusi_periodontal=$this->lap->get_layanan($tgl,$jamkesmas,$pab,0,$gusi_periodontal);
       $data['p_j_gusi_periodontal']=$p_j_gusi_periodontal;

       $p_u_gusi_periodontal=$this->lap->get_layanan($tgl,$umum,$pab,0,$gusi_periodontal);
       $data['p_u_gusi_periodontal']=$p_u_gusi_periodontal;


       $c_a_gusi_periodontal=$this->lap->get_layanan($tgl,$askes,$cib,0,$gusi_periodontal);
       $data['c_a_gusi_periodontal']=$c_a_gusi_periodontal;

       $c_j_gusi_periodontal=$this->lap->get_layanan($tgl,$jamkesmas,$cib,0,$gusi_periodontal);
       $data['c_j_gusi_periodontal']=$c_j_gusi_periodontal;

       $c_u_gusi_periodontal=$this->lap->get_layanan($tgl,$umum,$cib,0,$gusi_periodontal);
       $data['c_u_gusi_periodontal']=$c_u_gusi_periodontal;


       $lw_a_gusi_periodontal=$this->lap->get_layanan($tgl,$askes,0,$lw,$gusi_periodontal);
       $data['lw_a_gusi_periodontal']=$lw_a_gusi_periodontal;

       $lw_j_gusi_periodontal=$this->lap->get_layanan($tgl,$jamkesmas,0,$lw,$gusi_periodontal);
       $data['lw_j_gusi_periodontal']=$lw_j_gusi_periodontal;

       $lw_u_gusi_periodontal=$this->lap->get_layanan($tgl,$umum,0,$lw,$gusi_periodontal);
       $data['lw_u_gusi_periodontal']=$lw_u_gusi_periodontal;


       $lk_a_gusi_periodontal=$this->lap->get_layanan($tgl,$askes,0,$lk,$gusi_periodontal);
       $data['lk_a_gusi_periodontal']=$lk_a_gusi_periodontal;

       $lk_j_gusi_periodontal=$this->lap->get_layanan($tgl,$jamkesmas,0,$lk,$gusi_periodontal);
       $data['lk_j_gusi_periodontal']=$lk_j_gusi_periodontal;

       $lk_u_gusi_periodontal=$this->lap->get_layanan($tgl,$umum,0,$lk,$gusi_periodontal);
       $data['lk_u_gusi_periodontal']=$lk_u_gusi_periodontal;



 $karang_gigi='Pembersihan karang gigi';
 //Pengobatan gusi
       $p_a_karang_gigi=$this->lap->get_layanan($tgl,$askes,$pab,0,$karang_gigi);
       $data['p_a_karang_gigi']=$p_a_karang_gigi;

       $p_j_karang_gigi=$this->lap->get_layanan($tgl,$jamkesmas,$pab,0,$karang_gigi);
       $data['p_j_karang_gigi']=$p_j_karang_gigi;

       $p_u_karang_gigi=$this->lap->get_layanan($tgl,$umum,$pab,0,$karang_gigi);
       $data['p_u_karang_gigi']=$p_u_karang_gigi;


       $c_a_karang_gigi=$this->lap->get_layanan($tgl,$askes,$cib,0,$karang_gigi);
       $data['c_a_karang_gigi']=$c_a_karang_gigi;

       $c_j_karang_gigi=$this->lap->get_layanan($tgl,$jamkesmas,$cib,0,$karang_gigi);
       $data['c_j_karang_gigi']=$c_j_karang_gigi;

       $c_u_karang_gigi=$this->lap->get_layanan($tgl,$umum,$cib,0,$karang_gigi);
       $data['c_u_karang_gigi']=$c_u_karang_gigi;


       $lw_a_karang_gigi=$this->lap->get_layanan($tgl,$askes,0,$lw,$karang_gigi);
       $data['lw_a_karang_gigi']=$lw_a_karang_gigi;

       $lw_j_karang_gigi=$this->lap->get_layanan($tgl,$jamkesmas,0,$lw,$karang_gigi);
       $data['lw_j_karang_gigi']=$lw_j_karang_gigi;

       $lw_u_karang_gigi=$this->lap->get_layanan($tgl,$umum,0,$lw,$karang_gigi);
       $data['lw_u_karang_gigi']=$lw_u_karang_gigi;


       $lk_a_karang_gigi=$this->lap->get_layanan($tgl,$askes,0,$lk,$karang_gigi);
       $data['lk_a_karang_gigi']=$lk_a_karang_gigi;

       $lk_j_karang_gigi=$this->lap->get_layanan($tgl,$jamkesmas,0,$lk,$karang_gigi);
       $data['lk_j_karang_gigi']=$lk_j_karang_gigi;

       $lk_u_karang_gigi=$this->lap->get_layanan($tgl,$umum,0,$lk,$karang_gigi);
       $data['lk_u_karang_gigi']=$lk_u_karang_gigi;
        }
      $this->load->view('lb4',$data);
   }
    
}
?>
