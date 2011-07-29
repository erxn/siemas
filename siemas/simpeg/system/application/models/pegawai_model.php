<?php

class Pegawai_model extends Model {

    function __construct() {
        parent::Model();
    }

    function get_semua_pegawai($order = 'id_pegawai') {
        $data = array();
        $q = $this->db->query("SELECT * FROM pegawai ORDER BY $order");

        if ($q->num_rows() > 0) {
            foreach ($q->result_array() as $row) {
                $data[] = $row;
            }
        }

        $q->free_result();
        return $data;
    }

    function get_semua_pegawai_pkm($order = 'id_pegawai') {
        $data = array();
        $q = $this->db->query("SELECT * FROM pegawai WHERE bp_pemda = 0 ORDER BY $order");

        if ($q->num_rows() > 0) {
            foreach ($q->result_array() as $row) {
                $data[] = $row;
            }
        }

        $q->free_result();
        return $data;
    }

    function get_semua_pegawai_bpp($order = 'id_pegawai') {
        $data = array();
        $q = $this->db->query("SELECT * FROM pegawai WHERE bp_pemda = 1 ORDER BY $order");

        if ($q->num_rows() > 0) {
            foreach ($q->result_array() as $row) {
                $data[] = $row;
            }
        }

        $q->free_result();
        return $data;
    }

    function insert_data_pokok($data) {

        $insert = $this->db->insert('pegawai', $data);

        if ($insert) {
            return $this->db->insert_id();
        } else {
            return 0;
        }
    }

    function insert_data_pelatihan($data) {
        $this->db->insert('pelatihan', $data);
    }

    function insert_data_pendidikan($data) {
        $this->db->insert('pendidikan', $data);
    }

    function insert_data_tanggungan($data) {
        $this->db->insert('tanggungan', $data);
    }

    function insert_pangkat_golongan($data) {
        $this->db->insert('pangkat_golongan', $data);
    }

    function insert_jabatan($data) {
        $this->db->insert('jabatan', $data);
    }

    function insert_gaji($data) {
        $this->db->insert('gaji', $data);
    }

}