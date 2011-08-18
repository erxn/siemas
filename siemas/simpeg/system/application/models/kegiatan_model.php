<?php

class Kegiatan_model extends Model {

    function  __construct() {
        parent::Model();
    }

    function insert_kegiatan($data) {
        $this->db->insert('kegiatan', $data);
    }

    function get_kegiatan_pegawai($id) {
        $data = array();
        $q = $this->db->query("SELECT * FROM kegiatan WHERE id_pegawai = $id ORDER BY tanggal");

        if ($q->num_rows() > 0) {
            foreach ($q->result_array() as $row) {
                $data[] = $row;
            }
        }

        $q->free_result();
        return $data;
    }

    function hapus_kegiatan($id) {
        return $this->db->query("DELETE FROM kegiatan WHERE id_kegiatan = $id");
    }

    function get_kegiatan_by_tanggal($tahun, $bulan, $tanggal) {
        $data = array();
        $tanggal = date("Y-m-d", strtotime("$tahun-$bulan-$tanggal"));

        $q = $this->db->query("SELECT kegiatan.*, pegawai.nama FROM kegiatan JOIN pegawai USING (id_pegawai)
                               WHERE tanggal = '$tanggal' ORDER BY tanggal");

        if ($q->num_rows() > 0) {
            foreach ($q->result_array() as $row) {
                $data[] = $row;
            }
        }

        $q->free_result();
        return $data;

    }

    function get_kegiatan_by_bulan($tahun, $bulan) {
        $data = array();

        $q = $this->db->query("SELECT kegiatan.*, pegawai.nama FROM kegiatan JOIN pegawai USING (id_pegawai)
                               WHERE year(tanggal) = '$tahun' AND month(tanggal) = '$bulan' ORDER BY tanggal");

        if ($q->num_rows() > 0) {
            foreach ($q->result_array() as $row) {
                $data[] = $row;
            }
        }

        $q->free_result();
        return $data;

    }

    function get_kegiatan_by_bulan_and_pegawai($tahun, $bulan, $id_pegawai) {
        $data = array();

        $q = $this->db->query("SELECT kegiatan.*, pegawai.nama FROM kegiatan JOIN pegawai USING (id_pegawai)
                               WHERE year(tanggal) = '$tahun' AND month(tanggal) = '$bulan' AND kegiatan.id_pegawai = $id_pegawai ORDER BY tanggal");

        if ($q->num_rows() > 0) {
            foreach ($q->result_array() as $row) {
                $data[] = $row;
            }
        }

        $q->free_result();
        return $data;

    }

    function get_tahun_kegiatan() {
        $data = array();
        $q = $this->db->query("SELECT DISTINCT YEAR(tanggal) AS tahun FROM kegiatan ORDER BY YEAR(tanggal)");

        if ($q->num_rows() > 0) {
            foreach ($q->result_array() as $row) {
                $data[] = $row;
            }
        }

        $q->free_result();
        return $data;
    }

}