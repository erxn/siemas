<?php
class Statistik extends Controller{
    function Statistik(){
        parent::Controller();
        $this->load->model('M_kunjungan');
    }

    function index(){

        $data = array();

        if($this->input->post('submit')) {
            $tgl = $this->input->post('tgl_statistik');
        } else {
            $tgl = date("d-m-Y");
        }

        $data['tgl'] = $tgl;

        // harian

        $tgl = date("Y-m-d", strtotime($tgl));
        
        $wil1 = "pabaton";          $stat1 = "Luar wilayah";
        $wil2 = "cibogor";          $stat2 = "Luar Kota";
        $gigi=1; $umum=2; $kia=3; $lab=4; $radio=5; $rujuk=6; $anak=7; $dalam=8;

        /*Kunjungan Lama*/
        $kunj_lama_pabaton = $this->M_kunjungan->get_pasien_lama_wil_stat($tgl,$wil1,0);
        $kunj_lama_cibogor = $this->M_kunjungan->get_pasien_lama_wil_stat($tgl,$wil2,0);
        $kunj_lama_LW = $this->M_kunjungan->get_pasien_lama_wil_stat($tgl,0,$stat1);
        $kunj_lama_LKot = $this->M_kunjungan->get_pasien_lama_wil_stat($tgl,0,$stat2);

        /*Kunjungan Baru*/
        $kunj_baru_pabaton = $this->M_kunjungan->get_pasien_baru_wil_stat($tgl,$wil1,0);
        $kunj_baru_cibogor = $this->M_kunjungan->get_pasien_baru_wil_stat($tgl,$wil2,0);
        $kunj_baru_LW = $this->M_kunjungan->get_pasien_baru_wil_stat($tgl,0,$stat1);
        $kunj_baru_LKot = $this->M_kunjungan->get_pasien_baru_wil_stat($tgl,0,$stat2);
        $kunj_umum_pabaton = $this->M_kunjungan->get_kunjungan_poli_wil($wil1,$umum,$tgl);
        $kunj_umum_cibogor = $this->M_kunjungan->get_kunjungan_poli_wil($wil2,$umum,$tgl);
        $kunj_umum_LW = $this->M_kunjungan->get_kunjungan_poli_status($stat1,$umum,$tgl);
        $kunj_umum_LKot = $this->M_kunjungan->get_kunjungan_poli_status($stat2,$umum,$tgl);


        $kunj_gigi_pabaton = $this->M_kunjungan->get_kunjungan_poli_wil($wil1,$gigi,$tgl);
        $kunj_gigi_cibogor = $this->M_kunjungan->get_kunjungan_poli_wil($wil2,$gigi,$tgl);
        $kunj_gigi_LW = $this->M_kunjungan->get_kunjungan_poli_status($stat1,$gigi,$tgl);
        $kunj_gigi_LKot = $this->M_kunjungan->get_kunjungan_poli_status($stat2,$gigi,$tgl);

        $kunj_kia_pabaton = $this->M_kunjungan->get_kunjungan_poli_wil($wil1,$kia,$tgl);
        $kunj_kia_cibogor = $this->M_kunjungan->get_kunjungan_poli_wil($wil2,$kia,$tgl);
        $kunj_kia_LW = $this->M_kunjungan->get_kunjungan_poli_status($stat1,$kia,$tgl);
        $kunj_kia_LKot = $this->M_kunjungan->get_kunjungan_poli_status($stat2,$kia,$tgl);

        $kunj_anak_pabaton = $this->M_kunjungan->get_kunjungan_poli_wil($wil1,$anak,$tgl);
        $kunj_anak_cibogor = $this->M_kunjungan->get_kunjungan_poli_wil($wil2,$anak,$tgl);
        $kunj_anak_LW = $this->M_kunjungan->get_kunjungan_poli_status($stat1,$anak,$tgl);
        $kunj_anak_LKot = $this->M_kunjungan->get_kunjungan_poli_status($stat2,$anak,$tgl);

        $kunj_dalam_pabaton = $this->M_kunjungan->get_kunjungan_poli_wil($wil1,$dalam,$tgl);
        $kunj_dalam_cibogor = $this->M_kunjungan->get_kunjungan_poli_wil($wil2,$dalam,$tgl);
        $kunj_dalam_LW = $this->M_kunjungan->get_kunjungan_poli_status($stat1,$dalam,$tgl);
        $kunj_dalam_LKot = $this->M_kunjungan->get_kunjungan_poli_status($stat2,$dalam,$tgl);

        $kunj_radio_pabaton = $this->M_kunjungan->get_kunjungan_poli_wil($wil1,$radio,$tgl);
        $kunj_radio_cibogor = $this->M_kunjungan->get_kunjungan_poli_wil($wil2,$radio,$tgl);
        $kunj_radio_LW = $this->M_kunjungan->get_kunjungan_poli_status($stat1,$radio,$tgl);
        $kunj_radio_LKot = $this->M_kunjungan->get_kunjungan_poli_status($stat2,$radio,$tgl);
        
        $kunj_rujuk_pabaton = $this->M_kunjungan->get_kunjungan_poli_wil($wil1,$rujuk,$tgl);
        $kunj_rujuk_cibogor = $this->M_kunjungan->get_kunjungan_poli_wil($wil2,$rujuk,$tgl);
        $kunj_rujuk_LW = $this->M_kunjungan->get_kunjungan_poli_status($stat1,$rujuk,$tgl);
        $kunj_rujuk_LKot = $this->M_kunjungan->get_kunjungan_poli_status($stat2,$rujuk,$tgl);

        $kunjungan_jamkesmas = $this->M_kunjungan->kunjungan_layanan($tgl,'Jamkesmas');
        $kunjungan_askes = $this->M_kunjungan->kunjungan_layanan($tgl,'Askes');
        $kunjungan_umum = $this->M_kunjungan->kunjungan_layanan($tgl,'Umum');
        $kunjungan_lain = $this->M_kunjungan->kunjungan_layanan($tgl,'Lain-lain');
        
        $laporan = array(

            'lama_pab' => $kunj_lama_pabaton,
            'lama_cib' => $kunj_lama_cibogor,
            'lama_LW' => $kunj_lama_LW,
            'lama_LKot' => $kunj_lama_LKot,

            'baru_pab' => $kunj_baru_pabaton,
            'baru_cib' => $kunj_baru_cibogor,
            'baru_LW' => $kunj_baru_LW,
            'baru_LKot' => $kunj_baru_LKot,

            'umum_pab' => $kunj_umum_pabaton,
            'umum_cib' => $kunj_umum_cibogor,
            'umum_LW' => $kunj_umum_LW,
            'umum_LKot' => $kunj_umum_LKot,

            'gigi_pab' => $kunj_gigi_pabaton,
            'gigi_cib' => $kunj_gigi_cibogor,
            'gigi_LW' => $kunj_gigi_LW,
            'gigi_LKot' => $kunj_gigi_LKot,

            'kia_pab' => $kunj_kia_pabaton,
            'kia_cib' => $kunj_kia_cibogor,
            'kia_LW' => $kunj_kia_LW,
            'kia_LKot' => $kunj_kia_LKot,

            'anak_pab' => $kunj_anak_pabaton,
            'anak_cib' => $kunj_anak_cibogor,
            'anak_LW' => $kunj_anak_LW,
            'anak_LKot' => $kunj_anak_LKot,

            'dalam_pab' => $kunj_dalam_pabaton,
            'dalam_cib' => $kunj_dalam_cibogor,
            'dalam_LW' => $kunj_dalam_LW,
            'dalam_LKot' => $kunj_dalam_LKot,

            'radio_pab' => $kunj_radio_pabaton,
            'radio_cib' => $kunj_radio_cibogor,
            'radio_LW' => $kunj_radio_LW,
            'radio_LKot' => $kunj_radio_LKot,

            'rujuk_pab' => $kunj_rujuk_pabaton,
            'rujuk_cib' => $kunj_rujuk_cibogor,
            'rujuk_LW' => $kunj_rujuk_LW,
            'rujuk_LKot' => $kunj_rujuk_LKot,

            'askes' => $kunjungan_askes,
            'jamkesmas' => $kunjungan_jamkesmas,
            'umum' => $kunjungan_umum,
            'lain' => $kunjungan_lain

            );

         $data['laporan'] = $laporan;
        
        $this->load->view('statistik_view', $data);
    }
}