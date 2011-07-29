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
        $q = $this->db->query("SELECT pasien.*, kk.* FROM pasien JOIN kk USING(id_kk) WHERE pasien.id_pasien = $id_pasien AND pasien.id_kk = $id_kk");

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

    function cari_pasien($id_pasien,$nama_pasien,$umur_pasien) {
        if($id_pasien) {
            $q = $this->db->query("SELECT extract(YEAR FROM from_days(datediff(curdate(), tanggal_lahir))) AS umur, *
                                 FROM pasien
                                 WHERE id_pasien=$id_pasien");
        }
            else if($nama_pasien != '' && $umur_pasien != '') {
                $q = $this->db->query("SELECT *, extract(YEAR FROM from_days(datediff(curdate(), tanggal_lahir))) AS umur
                             FROM pasien
                             WHERE extract(YEAR FROM from_days(datediff(curdate(), tanggal_lahir))) BETWEEN $umur_pasien-1 and $umur_pasien+1
                                   AND nama_pasien LIKE '%$nama_pasien%'");
            }
        }
    }
