<?php

class M_pembayaran extends Model {

    function  __construct() {
        parent::Model();
    }

    function data_pembayaran($tanggal){
        $data = array();
         $q = $this->db->query("SELECT antrian.id_antrian,antrian.status,antrian.id_kunjungan AS idkunjungan,antrian.id_poli,kunjungan.no_kunjungan,kunjungan.id_pasien,kunjungan.tanggal_kunjungan,kunjungan.total_harga,kunjungan.status_pembayaran,poli.*,pasien.*,kk.*,extract(YEAR FROM from_days(datediff(curdate(), tanggal_lahir))) AS umur
                                FROM poli
                                JOIN antrian USING (id_poli)
                                JOIN kunjungan USING (id_kunjungan)
                                JOIN pasien USING (id_pasien)
                                JOIN kk USING (id_kk)
                                WHERE kunjungan.tanggal_kunjungan = '$tanggal'
                                AND antrian.status = 'SELESAI'");
//        $q = $this->db->query("SELECT antrian.id_antrian,antrian.status,antrian.id_kunjungan,antrian.id_poli,kunjungan.no_kunjungan,kunjungan.id_pasien,kunjungan.tanggal_kunjungan,kunjungan.total_harga,kunjungan.status_pembayaran, pasien.*,kk.*,poli.nama_poli, extract(YEAR FROM from_days(datediff(curdate(), tanggal_lahir))) AS umur
//                                FROM poli
//                                JOIN antrian USING (id_poli)
//                                JOIN kunjungan USING (id_kunjungan)
//                                JOIN pasien USING (id_pasien)
//                                JOIN kk USING (id_kk)
//                                WHERE kunjungan.tanggal_kunjungan = '$tanggal'
//                                AND antrian.status = 'SELESAI'");

        if($q->num_rows() > 0) {
            foreach ($q->result_array() as $row) {
                $data[] = $row;
            }
        }

        $q->free_result();
        return $data;
    }
    
    function tambah_pembayaran($id_kunjungan,$poli,$layanan,$harga){
       

        $data = array();
        $q = $this->db->query("INSERT INTO kunjungan VALUES()");

        if($q->num_rows() > 0) {
            foreach ($q->result_array() as $row) {
                $data[] = $row;
            }
        }

        $q->free_result();
        return $data;
    }
}