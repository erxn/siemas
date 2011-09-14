<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Stat_m extends Model{

    function Stat_m(){
        parent::Model();
    }


    function get_kunjungan_gigi_wil($wil=0,$poli=0,$tgl=0){
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

     function get_kunjungan_gigi_status($stat=0,$poli=0,$tgl=0){
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


    function get_kunjungan_gigi_penyakit($n_penyakit,$poli,$tgl){

        $q=$this->db->query("SELECT COUNT( * ) AS jumlah
                                FROM `antrian`
                                JOIN kunjungan
                                USING ( id_kunjungan )
                                JOIN pasien
                                USING ( id_pasien )
                                JOIN remed_poli_gigi
                                USING ( id_pasien )
                                JOIN penyakit_remed_gigi
                                USING ( id_remed_gigi )
                                JOIN penyakit
                                USING ( id_penyakit )
                                WHERE kunjungan.tanggal_kunjungan = '$tgl'
                                AND antrian.id_poli =$poli
                                AND penyakit.nama_penyakit LIKE '%$n_penyakit%'");
        $jum_penyakit=$q->result_array();
        return $jum_penyakit[0]['jumlah'];
    }
}


?>
