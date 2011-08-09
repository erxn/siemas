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
}