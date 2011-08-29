<?php

class M_harian extends Model {

    function  __construct() {
        parent::Model();
    }

    function get_all_harian($tgl){
        $data = array();
        $q = $this->db->query("SELECT *,extract(YEAR FROM from_days(datediff(curdate(), tanggal_lahir))) AS umur
                                FROM poli
                                JOIN antrian USING (id_poli)
                                JOIN kunjungan USING (id_kunjungan)
                                JOIN pasien USING (id_pasien)
                                JOIN kk USING (id_kk)
                                WHERE tanggal_kunjungan = '$tgl'
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

    function get_layanan_harian($tgl,$layanan){
        $data = array();
        $q = $this->db->query("SELECT *,extract(YEAR FROM from_days(datediff(curdate(), tanggal_lahir))) AS umur
                                FROM poli
                                JOIN antrian USING (id_poli)
                                JOIN kunjungan USING (id_kunjungan)
                                JOIN pasien USING (id_pasien)
                                JOIN kk USING (id_kk)
                                WHERE tanggal_kunjungan = '$tgl'
                                AND status_pelayanan = '$layanan'
                                AND status_bawa_kartu = 'Bawa'
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
    function get_umum_harian($tgl,$layanan){
        
        $data = array();
        $q = $this->db->query("SELECT *,extract(YEAR FROM from_days(datediff(curdate(), tanggal_lahir))) AS umur,kunjungan.tanggal_kunjungan
                                FROM poli
                                JOIN antrian USING (id_poli)
                                JOIN kunjungan USING (id_kunjungan)
                                JOIN pasien USING (id_pasien)
                                JOIN kk USING (id_kk)
                                WHERE tanggal_kunjungan = '$tgl'
                                AND (status_pelayanan = '$layanan'
                                OR status_bawa_kartu = 'Tidak')
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