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
        
        for($i=1;$i<=cal_days_in_month(CAL_GREGORIAN, $bln, $thn); $i++) {

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

            /*mantuox*/
            $mantuox = $this->M_pembayaran->get_total_by_layanan($tgl,"mantuox");
            
            $laporan[] = array(

                'umum' => $umum,
                'labor' => $labor,
                'rontgen' => $rontgen,
                'usg' => $usg,
                'ekg' => $ekg,
                'haji'  => $haji,
                'catin'  => $catin,
                'mantuox' => $mantuox,
                'bulan' => $bln,
                'tahun' => $thn

            );

            $data['laporan'] = $laporan;
       }
        $this->load->view('rekapitulasi_setoran', $data);
        
    }

    function laporan_kunjungan_bulanan(){

        $this->load->view('laporan_kunjungan_bulanan');
    }

    function lb_4(){
        $this->load->view('lb_4');
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

        for($i=1;$i<=cal_days_in_month(CAL_GREGORIAN, $bln, $thn); $i++) {

            $tgl = date("Y-m-d", strtotime("$thn-$bln-$i"));

            /*Kunjungan Lama*/
            $kunj_lama_pabaton = $this->M_kunjungan->get_pasien_baru_by_tgl_wil($tgl,"Pabaton");
                echo $kunj_lama_pabaton;exit;
             $laporan[] = array(

                'lama_pab' => $kunj_lama_pabaton
                );
             
             $data['laporan'] = $laporan;

        }
        print_r($data);exit;
        $this->load->view('rekapitulasi_kunjungan',$data);
    }
}