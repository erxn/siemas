<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Stat_m extends Model{

    function Stat_m(){
        parent::Model();
    }


    function get_kunjungan_umum_wil($wil=0,$poli=0,$tgl=0){
        $q=$this->db->query("SELECT COUNT(*) as jumlah
                                FROM antrian
                                JOIN kunjungan USING (id_kunjungan)
                                JOIN pasien USING(id_pasien)
                                JOIN kk USING (id_kk)
                                WHERE tanggal_kunjungan ='$tgl'
                                AND antrian.id_poli=$poli
                                AND kelurahan_kk LIKE '%$wil%'
                            ");
        $jum_gigi=$q->result_array();
        return $jum_gigi[0]['jumlah'];
    }

     function get_kunjungan_umum_status($stat=0,$poli=0,$tgl=0){
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

    function get_kunjungan_umum_tbc($umum=0,$tgl=0){
        $q = $this->db->query("
                            SELECT COUNT( * ) AS jumlah
                            FROM `antrian`
                            JOIN kunjungan
                            USING ( id_kunjungan )
                            JOIN pasien
                            USING ( id_pasien )
                            JOIN remed_poli_umum
                            USING ( id_pasien )
                            JOIN tbc
                            USING (id_remed_umum)
                            WHERE tanggal_kunjungan = '$tgl'
                            AND antrian.id_poli = $umum
                            ");
        $jum_umum = $q->result_array();
        return $jum_umum[0]['jumlah'];
    }

    function get_kunjungan_umum_diare($umum=0,$tgl=0){
        $q = $this->db->query("
                            SELECT COUNT( * ) AS jumlah
                            FROM `antrian`
                            JOIN kunjungan
                            USING ( id_kunjungan )
                            JOIN pasien
                            USING ( id_pasien )
                            JOIN remed_poli_umum
                            USING ( id_pasien )
                            JOIN diare
                            USING (id_remed_umum)
                            WHERE tanggal_kunjungan = '$tgl'
                            AND antrian.id_poli = $umum
                            ");
        $jum_umum = $q->result_array();
        return $jum_umum[0]['jumlah'];
    }


    function get_kunjungan_umum_ispa($umum=0,$tgl=0){
        $q = $this->db->query("
                            SELECT COUNT( * ) AS jumlah
                            FROM `antrian`
                            JOIN kunjungan
                            USING ( id_kunjungan )
                            JOIN pasien
                            USING ( id_pasien )
                            JOIN remed_poli_umum
                            USING ( id_pasien )
                            JOIN ispa
                            USING (id_remed_umum)
                            WHERE tanggal_kunjungan = '$tgl'
                            AND antrian.id_poli = $umum
                            ");
        $jum_umum = $q->result_array();
        return $jum_umum[0]['jumlah'];
    }

    

    function get_kunjungan_umum_m($umum=0,$tgl=0){
        $q = $this->db->query("
                            SELECT COUNT( * ) AS jumlah
                            FROM `antrian`
                            JOIN kunjungan
                            USING ( id_kunjungan )
                            JOIN pasien
                            USING ( id_pasien )
                            JOIN remed_poli_umum
                            USING ( id_pasien )
                            WHERE tanggal_kunjungan = '$tgl'
                            AND antrian.id_poli = $umum
                            ");
        $jum_umum = $q->result_array();
        return $jum_umum[0]['jumlah'];
    }
}


?>
