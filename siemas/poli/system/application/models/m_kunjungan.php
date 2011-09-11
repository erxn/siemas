<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class M_kunjungan extends Model{
    function M_kunjungan(){
        parent::Model();
    }

function get_status_harian($tgl,$status){
        
        $data = array();
        $q = $this->db->query("SELECT * , extract( YEAR FROM from_days( datediff( curdate( ) , tanggal_lahir ) ) ) AS umur, kunjungan.tanggal_kunjungan
                                FROM poli
                                JOIN antrian ON poli.id_poli = antrian.id_poli
                                JOIN kunjungan ON antrian.id_kunjungan = kunjungan.id_kunjungan
                                JOIN pasien ON kunjungan.id_pasien = pasien.id_pasien
                                JOIN kk ON pasien.id_KK = kk.id_kk
                                JOIN remed_poli_gigi ON kunjungan.id_kunjungan = remed_poli_gigi.id_kunjungan
                                JOIN penyakit_remed_gigi ON remed_poli_gigi.id_remed_gigi = penyakit_remed_gigi.id_remed_gigi
                                JOIN penyakit ON penyakit_remed_gigi.id_penyakit = penyakit.id_penyakit
                                JOIN remed_gigi_layanan ON remed_poli_gigi.id_remed_gigi=remed_gigi_layanan.id_remed_gigi
                                JOIN layanan ON remed_gigi_layanan.id_layanan=layanan.id_layanan WHERE kunjungan.tanggal_kunjungan = '$tgl'
                                AND pasien.status_pelayanan LIKE '%$status%'
                                ORDER BY no_kunjungan
                                ");

        if($q->num_rows() > 0) {
            foreach ($q->result_array() as $row) {
                $data[] = $row;
            }
        }
        $q->free_result();
        return $data;
    }

    function get_harian($tgl){

        $data = array();
        $q = $this->db->query("SELECT * , extract( YEAR FROM from_days( datediff( curdate( ) , tanggal_lahir ) ) ) AS umur, kunjungan.tanggal_kunjungan
                            FROM poli
                            JOIN antrian ON poli.id_poli = antrian.id_poli
                            JOIN kunjungan ON antrian.id_kunjungan = kunjungan.id_kunjungan
                            JOIN pasien ON kunjungan.id_pasien = pasien.id_pasien
                            JOIN kk ON pasien.id_KK = kk.id_kk
                            JOIN remed_poli_gigi ON kunjungan.id_kunjungan = remed_poli_gigi.id_kunjungan
                            JOIN penyakit_remed_gigi ON remed_poli_gigi.id_remed_gigi = penyakit_remed_gigi.id_remed_gigi
                            JOIN penyakit ON penyakit_remed_gigi.id_penyakit = penyakit.id_penyakit
                            JOIN remed_gigi_layanan ON remed_poli_gigi.id_remed_gigi=remed_gigi_layanan.id_remed_gigi
                            JOIN layanan ON remed_gigi_layanan.id_layanan=layanan.id_layanan WHERE kunjungan.tanggal_kunjungan = '$tgl'
                            ORDER BY no_kunjungan
                                ");

        if($q->num_rows() > 0) {
            foreach ($q->result_array() as $row) {
                $data[] = $row;
            }
        }
        $q->free_result();
        return $data;
    }

}
?>
