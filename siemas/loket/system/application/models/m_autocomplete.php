<?php

class M_autocomplete extends Model {

    function  __construct() {
        parent::Model();
    }

    function get_pasien_by_nama($nama) {
        $data = array();
        $q = $this->db->query("SELECT DISTINCT nama_pasien FROM pasien WHERE nama_pasien LIKE '%$nama%' ORDER BY nama_pasien");

        if ($q->num_rows() > 0) {
            foreach ($q->result_array() as $row) {
                $data[] = $row;
            }
        }

        $q->free_result();
        return $data;
    }

    function get_kk_by_nama($nama) {
        $data = array();
        $q = $this->db->query("SELECT DISTINCT nama_kk FROM kk WHERE nama_kk LIKE '%$nama%' ORDER BY nama_kk");

        if ($q->num_rows() > 0) {
            foreach ($q->result_array() as $row) {
                $data[] = $row;
            }
        }

        $q->free_result();
        return $data;
    }

    function get_kode_pasien($kode){
        $data = array();
        $q = $this->db->query("SELECT kode_pasien FROM pasien WHERE kode_pasien LIKE '%$kode%' ORDER BY kode_pasien");

        if ($q->num_rows() > 0) {
            foreach ($q->result_array() as $row) {
                $data[] = $row;
            }
        }

        $q->free_result();
        return $data;
    }

}