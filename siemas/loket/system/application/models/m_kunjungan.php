<?php

class M_kunjungan extends Model {

    function  __construct() {
        parent::Model();
    }

    function insert_id_kunjungan($data) {
        $insert = $this->db->insert('kunjungan',$data);

        if($insert) {
            return $this->db->insert_id(); //fungsi dari CInya
        }
        else {
            return 0;
        }
    }

    function tambah_no_kunjungan($tgl_pendaftaran) {
        $q = $this->db->query("SELECT COUNT(*) AS jumlah FROM kunjungan WHERE tanggal_kunjungan = '$tgl_pendaftaran' ");
        $jumlah_kunjungan = $q->result_array();
        return $jumlah_kunjungan[0]['jumlah'];
    }

    function get_pasien_by_kunjungan($id_kunjungan) {
        $q = $this->db->query("SELECT pasien.id_pasien,kk.id_kk,kunjungan.*
                            FROM kunjungan
                            JOIN pasien USING(id_pasien)
                            JOIN kk USING (id_kk)
                            WHERE
                            kunjungan.id_kunjungan = $id_kunjungan");
        return $q->result_array();

    }

    function get_tahun_kunjungan() {
        $q = $this->db->query("SELECT distinct year(tanggal_kunjungan) AS tahun FROM `kunjungan` order by year(tanggal_kunjungan)");
        if($q->num_rows() > 0) {
            foreach ($q->result_array() as $row) {
                $data[] = $row;
            }
        }

        $q->free_result();
        return $data;
    }
/*_____________________________________________________________________________________________________________*/

    

    function get_kunjungan_poli_wil($wil,$poli,$tgl){
        $q = $this->db->query("SELECT COUNT(*) as jumlah
                                FROM `antrian`
                                JOIN kunjungan USING (id_kunjungan)
                                JOIN pasien USING (id_pasien)
                                JOIN kk USING (id_kk)
                                WHERE tanggal_kunjungan = '$tgl'
                                AND antrian.id_poli = $poli
                                AND kelurahan_kk LIKE '%$wil%'");
        $jum_umum = $q->result_array();
        return $jum_umum[0]['jumlah'];
    }

    function get_kunjungan_poli_status($stat,$poli,$tgl){
        $q = $this->db->query("SELECT COUNT(*) as jumlah
                                FROM `antrian`
                                JOIN kunjungan USING (id_kunjungan)
                                JOIN pasien USING (id_pasien)
                                JOIN kk USING (id_kk)
                                WHERE tanggal_kunjungan = '$tgl'
                                AND antrian.id_poli = $poli
                                AND status_wil_luar LIKE '%$stat%'");
        $jum_umum = $q->result_array();
        return $jum_umum[0]['jumlah'];
    }

    function get_kunjungan_layanan_wil_poli($tgl,$wil,$layanan,$poli) {

        $qwery = "SELECT count(*) as jumlah
                                FROM poli
                                JOIN antrian using (id_poli)
                                JOIN kunjungan USING (id_kunjungan)
                                JOIN pasien USING (id_pasien)
                                JOIN kk USING (id_kk)

                                WHERE tanggal_kunjungan = '$tgl'
                                AND id_poli = $poli
                                AND status_pelayanan LIKE '%$layanan%'
                                AND kelurahan_kk LIKE '%$wil%'
                                AND status_bawa_kartu LIKE '%bawa%'
                                ORDER BY status_pelayanan";


        $q = $this->db->query($qwery);
        $jumlah_kunjungan = $q->result_array();

        return $jumlah_kunjungan[0]['jumlah'];
    }

    function get_kunjungan_layanan_status($tgl,$stat,$layanan,$poli) {
        $q = $this->db->query("SELECT count(*) as jumlah
                                FROM poli
                                JOIN antrian using (id_poli)
                                JOIN kunjungan USING (id_kunjungan)
                                JOIN pasien USING (id_pasien)
                                JOIN kk USING (id_kk)

                                WHERE tanggal_kunjungan = '$tgl'
                                AND id_poli = $poli
                                AND status_pelayanan LIKE '%$layanan%'
                                AND status_wil_luar LIKE '%$stat%'
                                AND status_bawa_kartu LIKE '%bawa%'
                                ORDER BY status_pelayanan");
        $jumlah_kunjungan = $q->result_array();
        return $jumlah_kunjungan[0]['jumlah'];
    }

    function get_kunjungan_layanan_wil($tgl,$layanan,$wil,$stat){
        $q = $this->db->query("SELECT count(*) as jumlah
                                FROM poli
                                JOIN antrian using (id_poli)
                                JOIN kunjungan USING (id_kunjungan)
                                JOIN pasien USING (id_pasien)
                                JOIN kk USING (id_kk)

                                WHERE tanggal_kunjungan = '$tgl'
                                AND status_pelayanan LIKE '%$layanan%'
                                AND (kelurahan_kk LIKE '%$wil%' OR status_wil_luar LIKE '%$stat%')
                                AND status_bawa_kartu LIKE '%bawa%'
                                ");
        $jumlah_kunjungan = $q->result_array();
        return $jumlah_kunjungan[0]['jumlah'];
    }

    function get_kunjungan_poli_st_layan($bln,$thn,$poli,$status,$wil,$luar){
        $q = $this->db->query("SELECT count(*) as jumlah
                                FROM antrian
                                JOIN kunjungan USING (id_kunjungan)
                                JOIN pasien USING (id_pasien)
                                JOIN kk USING (id_kk)
                                WHERE id_poli = $poli
                                AND (kelurahan_kk LIKE '%$wil%' OR status_wil_luar LIKE '%$luar%')
                                AND status_pelayanan = '$status'
                                AND MONTH(tanggal_kunjungan) = '$bln'
                                AND YEAR(tanggal_kunjungan) = '$thn'");
        $jumlah_kunjungan = $q->result_array();
        return $jumlah_kunjungan[0]['jumlah'];
    }

    function get_kunjungan_layanan($bln,$thn,$layanan,$status){
        $q = $this->db->query("SELECT COUNT(*) as jumlah
                                FROM pasien
                                JOIN kunjungan ON pasien.id_pasien = kunjungan.id_pasien
                                JOIN kunjungan_has_layanan ON kunjungan_has_layanan.id_kunjungan = kunjungan.id_kunjungan
                                JOIN layanan ON kunjungan_has_layanan.id_layanan = layanan.id_layanan
                                WHERE MONTH(tanggal_kunjungan) = '$bln'
                                AND YEAR(tanggal_kunjungan) = '$thn'
                                AND status_pelayanan LIKE '%$status%'
                                AND nama_layanan LIKE '%$layanan%'");
        $jumlah_kunjungan = $q->result_array();
        return $jumlah_kunjungan[0]['jumlah'];
    }

    /**********************                 JAMKESMAS        per bulan              ******************************/
    function get_kunjungan_jamkesmas($bln,$thn,$wil,$status,$luar){
         $q = $this->db->query("SELECT count(*) as jumlah
                                FROM kunjungan
                                JOIN pasien USING (id_pasien)
                                JOIN kk USING (id_kk)
                                WHERE
                                MONTH(tanggal_kunjungan) = '$bln'
                                AND YEAR(tanggal_kunjungan) = '$thn'
                                AND status_pelayanan = '$status'
                                AND (kelurahan_kk LIKE '%$wil%' OR status_wil_luar LIKE '%$luar%')");
        $jumlah_kunjungan = $q->result_array();
        //echo $bln." ".$thn;exit;
        return $jumlah_kunjungan[0]['jumlah'];
    }

    function get_pasien_lama_jam($tgl,$layanan,$wil,$stat){
            $q = $this->db->query("SELECT count(*) as jumlah
                                FROM kunjungan
                                JOIN pasien USING (id_pasien)
                                JOIN kk USING (id_kk)
                                WHERE NOT tanggal_kunjungan = pasien.tanggal_pendaftaran
                                AND tanggal_kunjungan = '$tgl'
                                AND (kelurahan_kk LIKE '%$wil%' OR status_wil_luar LIKE '$stat')
                                AND status_pelayanan = '$layanan'
                                ");
        $jumlah_kunjungan = $q->result_array();
        return $jumlah_kunjungan[0]['jumlah'];
    }

    function get_pasien_baru_jam($tgl,$layanan,$wil,$stat) {
        $q = $this->db->query("SELECT count(*) as jumlah
                                FROM kunjungan
                                JOIN pasien USING (id_pasien)
                                JOIN kk USING (id_kk)
                                WHERE tanggal_kunjungan = pasien.tanggal_pendaftaran
                                AND tanggal_kunjungan = '$tgl'
                                AND status_pelayanan = '$layanan'
                                AND (kelurahan_kk LIKE '%$wil%' OR status_wil_luar LIKE '$stat')
                                AND status_pelayanan = '$layanan'
                ");
        $jumlah_kunjungan = $q->result_array();
        return $jumlah_kunjungan[0]['jumlah'];
    }


    /***********************************************************************************************************************/
    /*pusing dah ama fungsi -.-*/
    
    /*INI buat nyari total kunjungan HARIAN untuk per status layanan*/
    function kunjungan_layanan($tgl,$layanan){
        $q = $this->db->query("SELECT count(*) as jumlah
                                FROM kunjungan
                                JOIN pasien USING (id_pasien)
                                WHERE tanggal_kunjungan = '$tgl'
                                AND
                                status_pelayanan = '$layanan'");
        $jumlah_kunjungan = $q->result_array();
        return $jumlah_kunjungan[0]['jumlah'];
    }

    /*-----------------------SEMUA PASIEN BARU + LAMA HARI INI ---------------------------------------------------*/
    function get_pasien_baru_wil_stat($tgl,$wil,$stat){
        $q = $this->db->query("SELECT count(*) as jumlah
                                FROM kunjungan
                                JOIN pasien USING (id_pasien)
                                JOIN kk USING (id_kk)
                                WHERE tanggal_kunjungan = pasien.tanggal_pendaftaran
                                AND tanggal_kunjungan = '$tgl'
                                AND (kelurahan_kk LIKE '%$wil%' OR status_wil_luar LIKE '$stat')
                                ");
        $jumlah_kunjungan = $q->result_array();
        return $jumlah_kunjungan[0]['jumlah'];
    }
    
    function get_pasien_lama_wil_stat($tgl,$wil,$stat){
        $q = $this->db->query("SELECT count(*) as jumlah
                                FROM kunjungan
                                JOIN pasien USING (id_pasien)
                                JOIN kk USING (id_kk)
                                WHERE NOT tanggal_kunjungan = pasien.tanggal_pendaftaran
                                AND tanggal_kunjungan = '$tgl'
                                AND (kelurahan_kk LIKE '%$wil%' OR status_wil_luar LIKE '$stat')
                                ");
        $jumlah_kunjungan = $q->result_array();
        return $jumlah_kunjungan[0]['jumlah'];
    }

    /*-----------------------------------------------------------------------------------------------------*/


    /*KUNJUNGAN HARIAN PASIEN*/
    function get_pasien_baru($tgl,$wil,$stat,$layanan) {
        $q = $this->db->query("SELECT count(*) as jumlah
                                FROM kunjungan
                                JOIN pasien USING (id_pasien)
                                JOIN kk USING (id_kk)
                                WHERE tanggal_kunjungan = pasien.tanggal_pendaftaran
                                AND tanggal_kunjungan = '$tgl'
                                AND status_pelayanan = '$layanan'
                                AND (kelurahan_kk LIKE '%$wil%' OR status_wil_luar LIKE '$stat')");
        $jumlah_kunjungan = $q->result_array();
        return $jumlah_kunjungan[0]['jumlah'];
    }

    function get_pasien_lama_harian($tgl,$wil,$stat,$layanan){
        
        $q = $this->db->query("SELECT count(*) as jumlah
                                FROM kunjungan
                                JOIN pasien USING (id_pasien)
                                JOIN kk USING (id_kk)
                                WHERE NOT kunjungan.tanggal_kunjungan = pasien.tanggal_pendaftaran
                                AND tanggal_kunjungan = '$tgl'
                                AND (kelurahan_kk LIKE '%$wil%' OR status_wil_luar LIKE '$stat')
                                AND status_pelayanan = '$layanan'
                                ");
        $jumlah_kunjungan = $q->result_array();
        return $jumlah_kunjungan[0]['jumlah'];
    }

    /** berdasarkan poli+wilayah*/
    function get_poli_wil($tgl,$poli,$wil,$stat,$layanan){
        $q = $this->db->query("SELECT count(*) as jumlah
                            FROM antrian
                            JOIN kunjungan USING (id_kunjungan)
                            JOIN pasien USING (id_pasien)
                            JOIN kk USING (id_kk)
                            WHERE id_poli = $poli
                            AND tanggal_kunjungan = '$tgl'
                            AND (kelurahan_kk LIKE '%$wil%' OR status_wil_luar LIKE '%$stat%')
                            AND status_pelayanan = '$layanan'");
        $jumlah_kunjungan = $q->result_array();
        return $jumlah_kunjungan[0]['jumlah'];
    }

    /*berdasarkan poli saja*/
    function get_kunjungan_poli($tgl,$poli){
        $q = $this->db->query("SELECT COUNT(*) as jumlah
                            FROM kunjungan
                            JOIN antrian USING (id_kunjungan)
                            JOIN poli USING (id_poli)
                            WHERE id_poli = $poli
                            AND tanggal_kunjungan = '$tgl'");
        $jumlah_kunjungan = $q->result_array();
        
        return $jumlah_kunjungan[0]['jumlah'];
    }
    
    /****************************************************************************************************/







//
//    function get_pasien_lama_by_tgl_status_wil($tgl,$stat) {
//        $q = $this->db->query("SELECT count(*) as jumlah
//                                FROM kunjungan
//                                JOIN pasien USING (id_pasien)
//                                JOIN kk USING (id_kk)
//                                WHERE tanggal_kunjungan = pasien.tanggal_pendaftaran
//                                AND tanggal_kunjungan = '$tgl'
//                                AND status_wil_luar LIKE '%$stat%'");
//        $jumlah_kunjungan = $q->result_array();
//        return $jumlah_kunjungan[0]['jumlah'];
//    }


}