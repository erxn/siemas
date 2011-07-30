<?php

class Pegawai_model extends Model {

    function __construct() {
        parent::Model();
    }

    function get_semua_pegawai($order = 'id_pegawai') {
        $data = array();
        $q = $this->db->query("SELECT * FROM pegawai WHERE aktif = 1 ORDER BY $order");

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
        $q = $this->db->query("SELECT * FROM pegawai WHERE aktif = 1 AND bp_pemda = 0 ORDER BY $order");

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
        $q = $this->db->query("SELECT * FROM pegawai WHERE aktif = 1 AND bp_pemda = 1 ORDER BY $order");

        if ($q->num_rows() > 0) {
            foreach ($q->result_array() as $row) {
                $data[] = $row;
            }
        }

        $q->free_result();
        return $data;
    }

    function get_pendidikan_pegawai($id_pegawai) {
        $data = array();
        $q = $this->db->query("SELECT * FROM pendidikan WHERE id_pegawai = {$id_pegawai} ORDER BY tahun_ijazah");

        if ($q->num_rows() > 0) {
            foreach ($q->result_array() as $row) {
                $data[] = $row;
            }
        }

        $q->free_result();
        return $data;
    }

    function get_pelatihan_pegawai($id_pegawai) {
        $data = array();
        $q = $this->db->query("SELECT * FROM pelatihan WHERE id_pegawai = {$id_pegawai} ORDER BY tahun");

        if ($q->num_rows() > 0) {
            foreach ($q->result_array() as $row) {
                $data[] = $row;
            }
        }

        $q->free_result();
        return $data;
    }

    function get_tanggungan_pegawai($id_pegawai) {
        $data = array();
        $q = $this->db->query("SELECT * FROM tanggungan WHERE id_pegawai = {$id_pegawai} ORDER BY id_tanggungan");

        if ($q->num_rows() > 0) {
            foreach ($q->result_array() as $row) {
                $data[] = $row;
            }
        }

        $q->free_result();
        return $data;
    }

    function get_pegawai_by_id($id_pegawai) {
        $data = array();
        $q = $this->db->query("SELECT * FROM pegawai WHERE id_pegawai = $id_pegawai");

        if($q->num_rows() > 0)
        {
            $data = $q->row_array();
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

    function update_data_pokok($id, $data) {
        $this->db->where('id_pegawai', $id);
        $this->db->update('pegawai', $data);
    }






    function get_jabatan_terakhir($id_pegawai) {
        $data = array();
        $q = $this->db->query("SELECT * FROM jabatan WHERE id_pegawai = $id_pegawai ORDER BY TMT DESC LIMIT 1");

        if($q->num_rows() > 0)
        {
            $data = $q->row_array();
        }

        $q->free_result();
        return $data;
    }

    function get_pangkat_terakhir($id_pegawai) {
        $data = array();
        $q = $this->db->query("SELECT * FROM pangkat_golongan WHERE id_pegawai = $id_pegawai ORDER BY TMT DESC LIMIT 1");

        if($q->num_rows() > 0)
        {
            $data = $q->row_array();
        }

        $q->free_result();
        return $data;
    }

    function get_gaji_terakhir($id_pegawai) {
        $data = array();
        $q = $this->db->query("SELECT * FROM gaji WHERE id_pegawai = $id_pegawai ORDER BY TMT DESC LIMIT 1");

        if($q->num_rows() > 0)
        {
            $data = $q->row_array();
        }

        $q->free_result();
        return $data;
    }

}