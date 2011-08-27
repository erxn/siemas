<?php
class C_laporan extends Controller {

    function __construct() {
        parent::Controller();
        $this->load->model('M_kk');
        $this->load->model('M_pasien');
        $this->load->model('M_kunjungan');
        $this->load->model('M_pembayaran');
    }
    function index(){
        $this->load->view('laporan');
    }

    function rekapitulasi_setoran(){
        /*tahun yang ada di database*/
        $list_thn = $this->M_kunjungan->get_tahun_kunjungan();
        $data['tahun'] = $list_thn;


        if($this->input->post('pilih')){
            /*bulan dan tahun yang dipilih*/
            $bln = $this->input->post('bulan_kunjungan');
            $thn = $this->input->post('tahun_kunjungan');

        } else {

            $bln = date("m");
            $thn = date("Y");

        }

        $laporan = array();
        
        for($i=1;$i<=cal_days_in_month(CAL_GREGORIAN, intval($bln), intval($thn)); $i++) {

            $tgl = date("Y-m-d", strtotime("$thn-$bln-$i"));

            /*Untuk RONTGEN*/
            $x_ray_gigi = $this->M_pembayaran->get_total_by_layanan($tgl, "x-ray");
            $thorax = $this->M_pembayaran->get_total_by_layanan($tgl,"thorax");
            $rontgen = $x_ray_gigi + $thorax;
            
            /*Untuk USG*/
            $usg = $this->M_pembayaran->get_total_by_layanan($tgl,"usg");
            

            /*untuk EKG*/
            $ekg = $this->M_pembayaran->get_total_by_layanan($tgl,"ekg");
            

            /*untuk karcis umum*/
            $umum = $this->M_pembayaran->total_karcis_umum($tgl);

            /*untuk laboratorium*/
            $labor = $this->M_pembayaran->total_harga_by_poli($tgl,4);

            /*untuk haji*/
            $haji = $this->M_pembayaran->get_total_by_layanan($tgl,"haji");

            /*untuk haji*/
            $catin = $this->M_pembayaran->get_total_by_layanan($tgl,"catin");

            /*untuk RB -- bersalin?*/
            $rb = $this->M_pembayaran->get_total_by_layanan($tgl,"persalinan normal");

            /*untuk Spesialis Anak*/
            $anak = $this->M_kunjungan->get_kunjungan_poli($tgl,7);
            $anak *= 20000;

            /*untuk Spesialis Penyakit Dalam*/
            $dalam = $this->M_kunjungan->get_kunjungan_poli($tgl,8);
            $dalam *= 20000;

            /*mantuox*/
            $mantuox = $this->M_pembayaran->get_total_by_layanan($tgl,"mantuox");
            
            $laporan[] = array(

                'umum' => $umum,
                'labor' => $labor,
                'rontgen' => $rontgen,
                'usg' => $usg,
                'ekg' => $ekg,
                'haji'  => $haji,
                'rb' => $rb,
                'anak' => $anak,
                'dalam' => $dalam,
                'catin'  => $catin,
                'mantuox' => $mantuox,
                'bulan' => $bln,
                'tahun' => $thn

            );

            $data['laporan'] = $laporan;
       }
        $this->load->view('rekapitulasi_setoran', $data);
        
    }

    function lb_4(){

        $list_thn = $this->M_kunjungan->get_tahun_kunjungan();
        $data['tahun'] = $list_thn;

        if($this->input->post('pilih')){
            /*bulan dan tahun yang dipilih*/
            $bln = $this->input->post('bulan_kunjungan');
            $thn = $this->input->post('tahun_kunjungan');

        } else {

            $bln = date("m");
            $thn = date("Y");
        }
        
        $laporan = array();
        $gigi = 1; $umum = 2; $kia=3;
        $pab = 'pabaton'; $cib='cibogor'; $lw='luar wilayah'; $lk='luar kota';
        $askes = 'Askes'; $askeskin = 'Jamkesmas'; $gr = 'Lain-lain'; $bayar = 'Umum';
        $ekg = 'ekg'; $usg = 'usg'; $haji='haji';$rontgen = 'radiologi';

        $kunj_gakin_pabaton = $this->M_kunjungan->get_kunjungan_jamkesmas($bln,$thn,$pab,$askeskin,0);
        $kunj_ngakin_pabaton = $this->M_kunjungan->get_kunjungan_jamkesmas($bln,$thn,$pab,$bayar,0);
        $kunj_gakin_cibogor = $this->M_kunjungan->get_kunjungan_jamkesmas($bln,$thn,$cib,$askeskin,0);
        $kunj_ngakin_cibogor = $this->M_kunjungan->get_kunjungan_jamkesmas($bln,$thn,$cib,$bayar,0);

        $kunj_gakin_lw = $this->M_kunjungan->get_kunjungan_jamkesmas($bln,$thn,0,$askeskin,$lw);
        $kunj_ngakin_lw = $this->M_kunjungan->get_kunjungan_jamkesmas($bln,$thn,0,$bayar,$lw);
        $kunj_gakin_lk = $this->M_kunjungan->get_kunjungan_jamkesmas($bln,$thn,0,$askeskin,$lk);
        $kunj_ngakin_lk = $this->M_kunjungan->get_kunjungan_jamkesmas($bln,$thn,0,$bayar,$lk);

        $kunj_lama_pabaton = $this->M_kunjungan->get_pasien_lama_jam($bln,$thn,$pab,'Jamkesmas');

        //echo $kunj_gakin_pabaton;exit;
        $laporan[] = array(
                'kunj_gakin_pab' => $kunj_gakin_pabaton,
                'kunj_ngakin_pab' => $kunj_gakin_pabaton,
                'kunj_gakin_cib' => $kunj_gakin_cibogor,
                'kunj_ngakin_cib' => $kunj_gakin_cibogor,

                'kunj_gakin_lw' => $kunj_gakin_lw,
                'kunj_ngakin_lw' => $kunj_gakin_lw,
                'kunj_gakin_lk' => $kunj_gakin_lk,
                'kunj_ngakin_lk' => $kunj_gakin_lk,

                'kunj_lama_pab' => $kunj_lama_pabaton,
                'bulan' => $bln,
                'tahun' => $thn
                );
        $data['laporan'] = $laporan;
        
        $this->load->view('lb_4', $data);
    }

    function laporan_kunjungan_bulanan(){
        $list_thn = $this->M_kunjungan->get_tahun_kunjungan();
        $data['tahun'] = $list_thn;

        if($this->input->post('pilih')){
            /*bulan dan tahun yang dipilih*/
            $bln = $this->input->post('bulan_kunjungan');
            $thn = $this->input->post('tahun_kunjungan');

        } else {

            $bln = date("m");
            $thn = date("Y");
        }

        $laporan = array();
        $gigi = 1; $umum = 2; $kia=3; $anak=7; $dalam=8;
        $askes = 'Askes'; $askeskin = 'Jamkesmas'; $gr = 'Lain-lain'; $bayar = 'Umum';

        $ekg = 'ekg'; $usg = 'usg'; $haji='haji';$rontgen = 'radiologi';

        $umum_askes = $this->M_kunjungan->get_kunjungan_poli_st_layan($bln,$thn,$umum,$askes);
        $umum_askeskin = $this->M_kunjungan->get_kunjungan_poli_st_layan($bln,$thn,$umum,$askeskin);
        $umum_gr = $this->M_kunjungan->get_kunjungan_poli_st_layan($bln,$thn,$umum,$gr);
        $umum_bayar = $this->M_kunjungan->get_kunjungan_poli_st_layan($bln,$thn,$umum,$bayar);

        $gigi_askes = $this->M_kunjungan->get_kunjungan_poli_st_layan($bln,$thn,$gigi,$askes);
        $gigi_askeskin = $this->M_kunjungan->get_kunjungan_poli_st_layan($bln,$thn,$gigi,$askeskin);
        $gigi_gr = $this->M_kunjungan->get_kunjungan_poli_st_layan($bln,$thn,$gigi,$gr);
        $gigi_bayar = $this->M_kunjungan->get_kunjungan_poli_st_layan($bln,$thn,$gigi,$bayar);

        $kia_askes = $this->M_kunjungan->get_kunjungan_poli_st_layan($bln,$thn,$kia,$askes);
        $kia_askeskin = $this->M_kunjungan->get_kunjungan_poli_st_layan($bln,$thn,$kia,$askeskin);
        $kia_gr = $this->M_kunjungan->get_kunjungan_poli_st_layan($bln,$thn,$kia,$gr);
        $kia_bayar = $this->M_kunjungan->get_kunjungan_poli_st_layan($bln,$thn,$kia,$bayar);

        $ekg_askes = $this->M_kunjungan->get_kunjungan_layanan($bln,$thn,$ekg,$askes);
        $ekg_askeskin = $this->M_kunjungan->get_kunjungan_layanan($bln,$thn,$ekg,$askeskin);
        $ekg_gr = $this->M_kunjungan->get_kunjungan_layanan($bln,$thn,$ekg,$gr);
        $ekg_bayar = $this->M_kunjungan->get_kunjungan_layanan($bln,$thn,$ekg,$bayar);

        $anak_askes = $this->M_kunjungan->get_kunjungan_poli_st_layan($bln,$thn,$anak,$askes);
        $anak_askeskin = $this->M_kunjungan->get_kunjungan_poli_st_layan($bln,$thn,$anak,$askeskin);
        $anak_gr = $this->M_kunjungan->get_kunjungan_poli_st_layan($bln,$thn,$anak,$gr);
        $anak_bayar = $this->M_kunjungan->get_kunjungan_poli_st_layan($bln,$thn,$anak,$bayar);

        $dalam_askes = $this->M_kunjungan->get_kunjungan_poli_st_layan($bln,$thn,$dalam,$askes);
        $dalam_askeskin = $this->M_kunjungan->get_kunjungan_poli_st_layan($bln,$thn,$dalam,$askeskin);
        $dalam_gr = $this->M_kunjungan->get_kunjungan_poli_st_layan($bln,$thn,$dalam,$gr);
        $dalam_bayar = $this->M_kunjungan->get_kunjungan_poli_st_layan($bln,$thn,$dalam,$bayar);

        $haji_askes = $this->M_kunjungan->get_kunjungan_layanan($bln,$thn,$haji,$askes);
        $haji_askeskin = $this->M_kunjungan->get_kunjungan_layanan($bln,$thn,$haji,$askeskin);
        $haji_gr = $this->M_kunjungan->get_kunjungan_layanan($bln,$thn,$haji,$gr);
        $haji_bayar = $this->M_kunjungan->get_kunjungan_layanan($bln,$thn,$haji,$bayar);

        $rontgen_askes = $this->M_kunjungan->get_kunjungan_layanan($bln,$thn,$rontgen,$askes);
        $rontgen_askeskin = $this->M_kunjungan->get_kunjungan_layanan($bln,$thn,$rontgen,$askeskin);
        $rontgen_gr = $this->M_kunjungan->get_kunjungan_layanan($bln,$thn,$rontgen,$gr);
        $rontgen_bayar = $this->M_kunjungan->get_kunjungan_layanan($bln,$thn,$rontgen,$bayar);

        $laporan[] = array(
                'umum_askes' => $umum_askes,
                'umum_askeskin' => $umum_askeskin,
                'umum_gr' => $umum_gr,
                'umum_bayar' => $umum_bayar,

                'gigi_askes' => $gigi_askes,
                'gigi_askeskin' => $gigi_askeskin,
                'gigi_gr' => $gigi_gr,
                'gigi_bayar' => $gigi_bayar,

                'kia_askes' => $kia_askes,
                'kia_askeskin' => $kia_askeskin,
                'kia_gr' => $kia_gr,
                'kia_bayar' => $kia_bayar,

                'ekg_askes' => $ekg_askes,
                'ekg_askeskin' => $ekg_askeskin,
                'ekg_gr' => $ekg_gr,
                'ekg_bayar' => $ekg_bayar,

                'anak_askes' => $anak_askes,
                'anak_askeskin' => $anak_askeskin,
                'anak_gr' => $anak_gr,
                'anak_bayar' => $anak_bayar,

                'dalam_askes' => $dalam_askes,
                'dalam_askeskin' => $dalam_askeskin,
                'dalam_gr' => $dalam_gr,
                'dalam_bayar' => $dalam_bayar,

                'haji_askes' => $haji_askes,
                'haji_askeskin' => $haji_askeskin,
                'haji_gr' => $haji_gr,
                'haji_bayar' => $haji_bayar,

                'rontgen_askes' => $rontgen_askes,
                'rontgen_askeskin' => $rontgen_askeskin,
                'rontgen_gr' => $rontgen_gr,
                'rontgen_bayar' => $rontgen_bayar,

                'bulan' => $bln,
                'tahun' => $thn
                );
        $data['laporan'] = $laporan;
        $this->load->view('laporan_kunjungan_bulanan',$data);
    }

    function rekapitulasi_kunjungan(){
        /*tahun yang ada di database*/
        $list_thn = $this->M_kunjungan->get_tahun_kunjungan();
        $data['tahun'] = $list_thn;


        if($this->input->post('pilih')){
            /*bulan dan tahun yang dipilih*/
            $bln = $this->input->post('bulan_kunjungan');
            $thn = $this->input->post('tahun_kunjungan');

        } else {

            $bln = date("m");
            $thn = date("Y");
        }

        $laporan = array();

        for($i=1;$i<=cal_days_in_month(CAL_GREGORIAN, intval($bln), intval($thn)); $i++) {

            $tgl = date("Y-m-d", strtotime("$thn-$bln-$i"));
            $wil1 = "pabaton";          $stat1 = "Luar wilayah";
            $wil2 = "cibogor";          $stat2 = "Luar Kota";
            $gigi=1; $umum=2; $kia=3; $lab=4; $radio=4; $rujukan=5;

            /*Kunjungan Lama*/
            $kunj_lama_pabaton = $this->M_kunjungan->get_pasien_lama_by_tgl_wil($tgl,$wil1,'Umum');
            $kunj_lama_cibogor = $this->M_kunjungan->get_pasien_lama_by_tgl_wil($tgl,$wil2,'Umum');
            $kunj_lama_LW = $this->M_kunjungan->get_pasien_lama_by_tgl_wil($tgl,$stat1,'Umum');
            $kunj_lama_LKot = $this->M_kunjungan->get_pasien_lama_by_tgl_wil($tgl,$stat2,'Umum');
            
            /*Kunjungan Baru*/
            $kunj_baru_pabaton = $this->M_kunjungan->get_pasien_baru_by_tgl_wil($tgl,$wil1,'Umum');
            $kunj_baru_cibogor = $this->M_kunjungan->get_pasien_baru_by_tgl_wil($tgl,$wil2,'Umum');
            $kunj_baru_LW = $this->M_kunjungan->get_pasien_baru_by_tgl_status_wil($tgl,$stat1,'Umum');
            $kunj_baru_LKot = $this->M_kunjungan->get_pasien_baru_by_tgl_status_wil($tgl,$stat2,'Umum');

            $kunj_umum_pabaton = $this->M_kunjungan->get_kunjungan_poli_wil($wil1,$umum,$tgl,'Umum');
            $kunj_umum_cibogor = $this->M_kunjungan->get_kunjungan_poli_wil($wil2,$umum,$tgl,'Umum');
            $kunj_umum_LW = $this->M_kunjungan->get_kunjungan_poli_status($stat1,$umum,$tgl,'Umum');
            $kunj_umum_LKot = $this->M_kunjungan->get_kunjungan_poli_status($stat2,$umum,$tgl,'Umum');


            $kunj_gigi_pabaton = $this->M_kunjungan->get_kunjungan_poli_wil($wil1,$gigi,$tgl,'Umum');
            $kunj_gigi_cibogor = $this->M_kunjungan->get_kunjungan_poli_wil($wil2,$gigi,$tgl,'Umum');
            $kunj_gigi_LW = $this->M_kunjungan->get_kunjungan_poli_status($stat1,$gigi,$tgl,'Umum');
            $kunj_gigi_LKot = $this->M_kunjungan->get_kunjungan_poli_status($stat2,$gigi,$tgl,'Umum');

            $kunj_kia_pabaton = $this->M_kunjungan->get_kunjungan_poli_wil($wil1,$kia,$tgl,'Umum');
            $kunj_kia_cibogor = $this->M_kunjungan->get_kunjungan_poli_wil($wil2,$kia,$tgl,'Umum');
            $kunj_kia_LW = $this->M_kunjungan->get_kunjungan_poli_status($stat1,$kia,$tgl,'Umum');
            $kunj_kia_LKot = $this->M_kunjungan->get_kunjungan_poli_status($stat2,$kia,$tgl,'Umum');
            
            $laporan[] = array(

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

                'bulan' => $bln,
                'tahun' => $thn
                );

             $data['laporan'] = $laporan;

        }
        //print_r($data);exit;
        $this->load->view('rekapitulasi_kunjungan',$data);
    }

    function rekap_poli(){
        $this->load->view('rekap_kunjungan_by_poli');
    }


    function rekap_status_askes_poli(){
    /*semuanya pasien yang pake ASKES. Rekapan berdasarkan poli tujuan dan jenis layanan*/
        $list_thn = $this->M_kunjungan->get_tahun_kunjungan();
        $data['tahun'] = $list_thn;

        if($this->input->post('pilih')){
            /*bulan dan tahun yang dipilih*/
            $bln = $this->input->post('bulan_kunjungan');
            $thn = $this->input->post('tahun_kunjungan');

        } else {

            $bln = date("m");
            $thn = date("Y");
        }

        $laporan = array();

        for($i=1;$i<=cal_days_in_month(CAL_GREGORIAN, intval($bln), intval($thn)); $i++) {

            $tgl = date("Y-m-d", strtotime("$thn-$bln-$i"));
            $pab = "pabaton";          $lw = "Luar wilayah";
            $cib = "cibogor";          $lk = "Luar Kota";

            $askes = "Askes"; $jamkesmas = "Jamkesmas";  $GR="Lain-lain";
            $gigi=1; $umum=2; $kia=3; $lab=4; $radio=4; $rujukan=5;

            /*seluruh kunjungan ASKES*/
            $kunjungan_askes = $this->M_kunjungan->get_kunjungan_layanan_wil($tgl,$askes,$cib)+
                               $this->M_kunjungan->get_kunjungan_layanan_wil($tgl,$askes,$pab);
            
            /*pasien ASKES + poli UMUM*/
            $kunj_umum_pabaton = $this->M_kunjungan->get_kunjungan_layanan_wil_poli($tgl,$pab,$askes,$umum);
            $kunj_umum_cibogor = $this->M_kunjungan->get_kunjungan_layanan_wil_poli($tgl,$cib,$askes,$umum);

            /*pasien ASKES + poli GIGI*/
            $kunj_gigi_pabaton = $this->M_kunjungan->get_kunjungan_layanan_wil_poli($tgl,$pab,$askes,$gigi);
            $kunj_gigi_cibogor = $this->M_kunjungan->get_kunjungan_layanan_wil_poli($tgl,$cib,$askes,$gigi);
            $kunj_gigi_LW = $this->M_kunjungan->get_kunjungan_layanan_status($tgl,$lw,$askes,$gigi);
            $kunj_gigi_LKot = $this->M_kunjungan->get_kunjungan_layanan_status($tgl,$lk,$askes,$gigi);

            /*pasien ASKES + poli KIA*/
            $kunj_kia_pabaton = $this->M_kunjungan->get_kunjungan_layanan_wil_poli($tgl,$pab,$askes,$kia);
            $kunj_kia_cibogor = $this->M_kunjungan->get_kunjungan_layanan_wil_poli($tgl,$cib,$askes,$kia);
            $kunj_kia_LW = $this->M_kunjungan->get_kunjungan_layanan_status($tgl,$lw,$askes,$kia);
            $kunj_kia_LKot = $this->M_kunjungan->get_kunjungan_layanan_status($tgl,$lk,$askes,$kia);

            /*pasien ASKES + rujukan*/
            $rujukan = $this->M_kunjungan->get_kunjungan_layanan_wil_poli($tgl,$pab,$askes,$rujukan)+
                       $this->M_kunjungan->get_kunjungan_layanan_wil_poli($tgl,$cib,$askes,$rujukan);

            /*jamkesmas + lokasi*/
            $jam_pab = $this->M_kunjungan->get_kunjungan_layanan_wil($tgl,$pab,$jamkesmas);
            $jam_cib = $this->M_kunjungan->get_kunjungan_layanan_wil($tgl,$cib,$jamkesmas);
            $gr =  $this->M_kunjungan->get_kunjungan_layanan_wil($tgl,$GR,$cib)+
                               $this->M_kunjungan->get_kunjungan_layanan_wil($tgl,$GR,$pab);
            $laporan[] = array(
                'askes' => $kunjungan_askes,
                'umum_pab' => $kunj_umum_pabaton,
                'umum_cib' => $kunj_umum_cibogor,

                'gigi_pab' => $kunj_gigi_pabaton,
                'gigi_cib' => $kunj_gigi_cibogor,
                'gigi_LW' => $kunj_gigi_LW,
                'gigi_LKot' => $kunj_gigi_LKot,

                'kia_pab' => $kunj_kia_pabaton,
                'kia_cib' => $kunj_kia_cibogor,
                'kia_LW' => $kunj_kia_LW,
                'kia_LKot' => $kunj_kia_LKot,

                'rujuk' => $rujukan,
                'jam_pab' => $jam_pab,
                'jam_cib' => $jam_cib,
                'gr' => $gr,
//
//                'gigi_pab' => $kunj_gigi_pabaton,
//                'gigi_cib' => $kunj_gigi_cibogor,
//                'gigi_LW' => $kunj_gigi_LW,
//                'gigi_LKot' => $kunj_gigi_LKot,
//
//                'kia_pab' => $kunj_kia_pabaton,
//                'kia_cib' => $kunj_kia_cibogor,
//                'kia_LW' => $kunj_kia_LW,
//                'kia_LKot' => $kunj_kia_LKot,
//
                'bulan' => $bln,
                'tahun' => $thn
                );

             $data['laporan'] = $laporan;

        }
        
        $this->load->view('rekap_kunjungan_by_status_layanan',$data);
    }
}