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
        $gigi=1; $umum=2; $kia=3; $lab=4; $radio=4; $rujukan=5;

        /*Kunjungan Lama*/
        $kunj_lama_pabaton = $this->M_kunjungan->get_pasien_lama_by_tgl_wil($tgl,$wil1);
        $kunj_lama_cibogor = $this->M_kunjungan->get_pasien_lama_by_tgl_wil($tgl,$wil2);
        $kunj_lama_LW = $this->M_kunjungan->get_pasien_lama_by_tgl_wil($tgl,$stat1);
        $kunj_lama_LKot = $this->M_kunjungan->get_pasien_lama_by_tgl_wil($tgl,$stat2);

        /*Kunjungan Baru*/
        $kunj_baru_pabaton = $this->M_kunjungan->get_pasien_baru_by_tgl_wil($tgl,$wil1);
        $kunj_baru_cibogor = $this->M_kunjungan->get_pasien_baru_by_tgl_wil($tgl,$wil2);
        $kunj_baru_LW = $this->M_kunjungan->get_pasien_baru_by_tgl_status_wil($tgl,$stat1);
        $kunj_baru_LKot = $this->M_kunjungan->get_pasien_baru_by_tgl_status_wil($tgl,$stat2);

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
            );

         $data['laporan'] = $laporan;
         
        $this->load->view('statistik_view', $data);
    }
}