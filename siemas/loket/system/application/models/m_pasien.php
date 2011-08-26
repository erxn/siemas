<?php

class M_pasien extends Model {

    function  __construct() {
        parent::Model();
    }

    function get_semua_pasien() {
        $data = array();
        $q = $this->db->query("SELECT * FROM pasien");

        if($q->num_rows() > 0) {
            foreach ($q->result_array() as $row) {
                $data[] = $row;
            }
        }

        $q->free_result();
        return $data;
    }

    function insert_data_pasien($data) {
        $insert = $this->db->insert('pasien',$data);

        if($insert) {
            return $this->db->insert_id(); //fungsi dari CInya
        }
        else {
            return 0;
        }

    }
    
    function lihat_profil_pasien($id_kk, $id_pasien) {
        $data = array();
        $q = $this->db->query("SELECT pasien.*, kk.*, extract(YEAR FROM from_days(datediff(curdate(), tanggal_lahir))) AS umur
                              FROM pasien JOIN kk USING(id_kk)
                              WHERE pasien.id_pasien = $id_pasien AND pasien.id_kk = $id_kk");

        if($q->num_rows() > 0) {
            foreach ($q->result_array() as $row) {
                $data[] = $row;
            }
        }

        $q->free_result();
        return $data;
    }

    function tambah_id_pasien($id_kk) {
        $q = $this->db->query("SELECT COUNT(id_kk) AS jumlah FROM pasien WHERE id_kk =  $id_kk");
        $jumlah = $q->result_array();
        return $jumlah[0]['jumlah'];
    }

    function cari_pasien($kode_pasien,$nama_pasien,$umur_pasien,$alamat="") {

        $where = "WHERE 1 ";

        if($nama_pasien != "") $where .= " AND nama_pasien LIKE '%$nama_pasien%'";
        if($umur_pasien != "") $where .= " AND extract(YEAR FROM from_days(datediff(curdate(), tanggal_lahir))) BETWEEN $umur_pasien-1 and $umur_pasien+1";
        if($alamat != "") $where .= "AND (kk.alamat_kk LIKE '%$alamat_pasien%'
                                                                  OR kk.kecamatan_kk LIKE '%$alamat_pasien%'
                                                                  OR kk.kelurahan_kk LIKE '%$alamat_pasien%'
                                                                  OR kk.kota_kab_kk LIKE '%$alamat_pasien%') ";

        $data = array();
        if($kode_pasien != '') {
            $q = $this->db->query("SELECT pasien.*, kk.*, extract(YEAR FROM from_days(datediff(curdate(), tanggal_lahir))) AS umur
                                 FROM pasien JOIN kk USING(id_kk)
                                 WHERE kode_pasien = '$kode_pasien'");
            if($q->num_rows() > 0) {
                foreach ($q->result_array() as $row) {
                    $data[] = $row;
                }
            }
            $q->free_result();
            return $data;

        }
        else {

            $q = $this->db->query("SELECT pasien.*, kk.*, extract(YEAR FROM from_days(datediff(curdate(), tanggal_lahir))) AS umur
                                 FROM pasien JOIN kk USING(id_kk) $where");


            if($q->num_rows() > 0) {
                foreach ($q->result_array() as $row) {
                    $data[] = $row;
                }
            }

            $q->free_result();
            return $data;
        }

    }
}
