<?php

class M_kunjungan extends Model {

    function  __construct() {
        parent::Model();
    }

    function insert_id_kunjungan($data){
        $insert = $this->db->insert('kunjungan',$data);

        if($insert){
            return $this->db->insert_id(); //fungsi dari CInya
        }
        else {
            return 0;
        }
    }

    function tambah_no_kunjungan($tgl_pendaftaran){
        $q = $this->db->query("SELECT COUNT(*) AS jumlah FROM kunjungan WHERE tanggal_kunjungan = '$tgl_pendaftaran' ");
        $jumlah_kunjungan = $q->result_array();
        return $jumlah_kunjungan[0]['jumlah'];
    }

    function get_pasien_by_kunjungan($id_kunjungan){
        $q = $this->db->query("SELECT pasien.id_pasien,kk.id_kk,kunjungan.*
                            FROM kunjungan
                            JOIN pasien USING(id_pasien)
                            JOIN kk USING (id_kk)
                            WHERE
                            kunjungan.id_kunjungan = $id_kunjungan");
         return $q->result_array();

    }

    function get_kunjungan_umum($tanggal){
        $q = $this->db->query("SELECT count(*) as jumlah
                                FROM kunjungan
                                JOIN pasien USING (id_pasien)
                                WHERE status_pelayanan = 'Umum'
                                AND tanggal_kunjungan = '$tanggal'");
        $jum_umum = $q->result_array();
        return $jum_umum[0]['jumlah'];
    }

    function get_tahun_kunjungan(){
        $q = $this->db->query("SELECT distinct year(tanggal_kunjungan) AS tahun FROM `kunjungan` order by year(tanggal_kunjungan)");
        if($q->num_rows() > 0) {
            foreach ($q->result_array() as $row) {
                $data[] = $row;
            }
        }

        $q->free_result();
        return $data;
    }

    function get_pasien_baru_by_tgl_wil($tgl,$wil){
        $q = $this->db->query("SELECT count(*) as jumlah
                                FROM kunjungan
                                JOIN pasien USING (id_pasien)
                                JOIN kk USING (id_kk)
                                WHERE tanggal_kunjungan = pasien.tanggal_pendaftaran
                                AND tanggal_kunjungan = '2011-08-11'
                                AND kecamatan_kk LIKE '%$wil%'");
    $jumlah_kunjungan = $q->result_array();
    return $jumlah_kunjungan[0]['jumlah'];

    }
    
}