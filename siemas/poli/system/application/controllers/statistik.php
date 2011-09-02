<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
*/
class Statistik extends Controller {
    function Statistik() {
        parent::Controller();
        $this->load->model("statistik_model", "stat");
    }

    function index() {
        $this->load->view('statistik_view');
    }

    function grafik_bulanan_penyakit() {
        $bulan=$this->input->post('bulan_peny');
        $tahun=$this->input->post('tahun_peny');
        $karies = $this->stat->get_id_by_penyakit("Karies Gigi");
        $pulpa = $this->stat->get_id_by_penyakit("Penyakit Pulpa & Jaringan Periapikal");
        $gusi = $this->stat->get_id_by_penyakit("Penyakit Gusi & Periodontal");
        $dentofasial = $this->stat->get_id_by_penyakit("Penyakit Dentofasial termasuk Inaloklusi");
        $gigi = $this->stat->get_id_by_penyakit("Gangguan Gigi & Jaringan Penunjang Lain");

        $data1 = $this->stat->bulanan_penyakit($bulan, $tahun, $karies);
        $data['data1']=$data1;
        $data2 = $this->stat->bulanan_penyakit($bulan, $tahun,  $pulpa);
        $data['data2']=$data2;
        $data3 = $this->stat->bulanan_penyakit($bulan,$tahun, $gusi);
        $data['data3']=$data3;
        $data4 = $this->stat->bulanan_penyakit($bulan, $tahun,  $dentofasial);
        $data['data4']=$data4;
        $data5 = $this->stat->bulanan_penyakit($bulan, $tahun, $gigi);
        $data['data5']=$data5;

        $total=$data1+$data2+$data3+$data4+$data5;
        $data['total']=$total;
        $this->load->view('grafik_bulanan_penyakit_view', $data);

    }

    function grafik_bulanan_wilayah() {
        $this->load->view('grafik_bulanan_wilayah_view');
    }

    function grafik_tahunan_penyakit($tahun) {
     
        $karies = $this->stat->get_id_by_penyakit("Karies Gigi");
        $pulpa = $this->stat->get_id_by_penyakit("Penyakit Pulpa & Jaringan Periapikal");
        $gusi = $this->stat->get_id_by_penyakit("Penyakit Gusi & Periodontal");
        $dentofasial = $this->stat->get_id_by_penyakit("Penyakit Dentofasial termasuk Inaloklusi");
        $gigi = $this->stat->get_id_by_penyakit("Gangguan Gigi & Jaringan Penunjang Lain 	");


        $data1 = $this->stat->tahunan_penyakit(1,$tahun,  $karies);
        $data['data1']=$data1;
        $data2 = $this->stat->tahunan_penyakit(1,$tahun,$pulpa);
        $data['data2']=$data2;
        $data3 = $this->stat->tahunan_penyakit(1,$tahun, $gusi);
        $data['data3']=$data3;
        $data4 = $this->stat->tahunan_penyakit(1,$tahun, $dentofasial);
        $data['data4']=$data4;
        $data5 = $this->stat->tahunan_penyakit(1,$tahun, $gigi);
        $data['data5']=$data5;


        $data6 = $this->stat->tahunan_penyakit(2,$tahun,  $karies);
        $data['data6']=$data6;
        $data7 = $this->stat->tahunan_penyakit(2,$tahun,$pulpa);
        $data['data7']=$data7;
        $data8 = $this->stat->tahunan_penyakit(2,$tahun, $gusi);
        $data['data8']=$data8;
        $data9 = $this->stat->tahunan_penyakit(2,$tahun, $dentofasial);
        $data['data9']=$data9;
        $data10 = $this->stat->tahunan_penyakit(2,$tahun, $gigi);
        $data['data10']=$data10;

        $data11 = $this->stat->tahunan_penyakit(3,$tahun,  $karies);
        $data['data11']=$data11;
        $data12 = $this->stat->tahunan_penyakit(3,$tahun,$pulpa);
        $data['data12']=$data12;
        $data13 = $this->stat->tahunan_penyakit(3,$tahun, $gusi);
        $data['data13']=$data13;
        $data14 = $this->stat->tahunan_penyakit(3,$tahun, $dentofasial);
        $data['data14']=$data14;
        $data15 = $this->stat->tahunan_penyakit(3,$tahun, $gigi);
        $data['data15']=$data15;


        $data16 = $this->stat->tahunan_penyakit(4,$tahun,  $karies);
        $data['data16']=$data16;
        $data17 = $this->stat->tahunan_penyakit(4,$tahun,$pulpa);
        $data['data17']=$data17;
        $data18 = $this->stat->tahunan_penyakit(4,$tahun, $gusi);
        $data['data18']=$data18;
        $data19 = $this->stat->tahunan_penyakit(4,$tahun, $dentofasial);
        $data['data19']=$data19;
        $data20 = $this->stat->tahunan_penyakit(4,$tahun, $gigi);
        $data['data20']=$data20;

        $data21 = $this->stat->tahunan_penyakit(5,$tahun,  $karies);
        $data['data21']=$data21;
        $data22 = $this->stat->tahunan_penyakit(5,$tahun,$pulpa);
        $data['data22']=$data22;
        $data23 = $this->stat->tahunan_penyakit(5,$tahun, $gusi);
        $data['data23']=$data23;
        $data24 = $this->stat->tahunan_penyakit(5,$tahun, $dentofasial);
        $data['data24']=$data24;
        $data25 = $this->stat->tahunan_penyakit(5,$tahun, $gigi);
        $data['data25']=$data25;

        $data26 = $this->stat->tahunan_penyakit(6,$tahun,  $karies);
        $data['data26']=$data26;
        $data27 = $this->stat->tahunan_penyakit(6,$tahun,$pulpa);
        $data['data27']=$data27;
        $data28 = $this->stat->tahunan_penyakit(6,$tahun, $gusi);
        $data['data28']=$data28;
        $data29 = $this->stat->tahunan_penyakit(6,$tahun, $dentofasial);
        $data['data29']=$data29;
        $data30 = $this->stat->tahunan_penyakit(6,$tahun, $gigi);
        $data['data30']=$data30;


        $data31 = $this->stat->tahunan_penyakit(7,$tahun,  $karies);
        $data['data31']=$data31;
        $data32 = $this->stat->tahunan_penyakit(7,$tahun,$pulpa);
        $data['data32']=$data32;
        $data33 = $this->stat->tahunan_penyakit(7,$tahun, $gusi);
        $data['data33']=$data33;
        $data34 = $this->stat->tahunan_penyakit(7,$tahun, $dentofasial);
        $data['data34']=$data34;
        $data35 = $this->stat->tahunan_penyakit(7,$tahun, $gigi);
        $data['data35']=$data35;


        $data36 = $this->stat->tahunan_penyakit(8,$tahun,  $karies);
        $data['data36']=$data36;
        $data37 = $this->stat->tahunan_penyakit(8,$tahun,$pulpa);
        $data['data37']=$data37;
        $data38 = $this->stat->tahunan_penyakit(8,$tahun, $gusi);
        $data['data38']=$data38;
        $data39 = $this->stat->tahunan_penyakit(8,$tahun, $dentofasial);
        $data['data39']=$data39;
        $data40 = $this->stat->tahunan_penyakit(8,$tahun, $gigi);
        $data['data40']=$data40;


        $data41 = $this->stat->tahunan_penyakit(9,$tahun,  $karies);
        $data['data41']=$data41;
        $data42 = $this->stat->tahunan_penyakit(9,$tahun,$pulpa);
        $data['data42']=$data42;
        $data43 = $this->stat->tahunan_penyakit(9,$tahun, $gusi);
        $data['data43']=$data43;
        $data44 = $this->stat->tahunan_penyakit(9,$tahun, $dentofasial);
        $data['data44']=$data44;
        $data45 = $this->stat->tahunan_penyakit(9,$tahun, $gigi);
        $data['data45']=$data45;


        $data46 = $this->stat->tahunan_penyakit(10,$tahun,  $karies);
        $data['data46']=$data46;
        $data47 = $this->stat->tahunan_penyakit(10,$tahun,$pulpa);
        $data['data47']=$data47;
        $data48 = $this->stat->tahunan_penyakit(10,$tahun, $gusi);
        $data['data48']=$data48;
        $data49 = $this->stat->tahunan_penyakit(10,$tahun, $dentofasial);
        $data['data49']=$data49;
        $data50 = $this->stat->tahunan_penyakit(10,$tahun, $gigi);
        $data['data50']=$data50;


        $data51 = $this->stat->tahunan_penyakit(11,$tahun,  $karies);
        $data['data51']=$data51;
        $data52 = $this->stat->tahunan_penyakit(11,$tahun,$pulpa);
        $data['data52']=$data52;
        $data53 = $this->stat->tahunan_penyakit(11,$tahun, $gusi);
        $data['data53']=$data53;
        $data54 = $this->stat->tahunan_penyakit(11,$tahun, $dentofasial);
        $data['data54']=$data54;
        $data55 = $this->stat->tahunan_penyakit(11,$tahun, $gigi);
        $data['data55']=$data55;


        $data56 = $this->stat->tahunan_penyakit(12,$tahun,  $karies);
        $data['data56']=$data56;
        $data57 = $this->stat->tahunan_penyakit(12,$tahun,$pulpa);
        $data['data57']=$data57;
        $data58 = $this->stat->tahunan_penyakit(12,$tahun, $gusi);
        $data['data58']=$data58;
        $data59 = $this->stat->tahunan_penyakit(12,$tahun, $dentofasial);
        $data['data59']=$data59;
        $data60 = $this->stat->tahunan_penyakit(12,$tahun, $gigi);
        $data['data60']=$data60;

        $this->load->view('grafik_tahunan_penyakit_view');
    }

    function grafik_tahunan_wilayah() {
        $this->load->view('grafik_tahunan_wilayah_view');
    }

}

?>
