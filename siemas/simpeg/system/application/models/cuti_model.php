<?php

class Cuti_model extends Model {

    function __construct() {
        parent::Model();
    }

    function insert_cuti($data) {
        $this->db->insert('cuti', $data);
    }

    function get_cuti_pegawai($id) {
        $data = array();
        $q = $this->db->query("SELECT * FROM cuti WHERE id_pegawai = $id ORDER BY tanggal_selesai");

        if ($q->num_rows() > 0) {
            foreach ($q->result_array() as $row) {
                $data[] = $row;
            }
        }

        $q->free_result();
        return $data;
    }

    function hapus_cuti($id) {
        return $this->db->query("DELETE FROM cuti WHERE id_cuti = $id");
    }

    function get_cuti_by_tanggal($tahun, $bulan, $tanggal) {
        $data = array();
        $tanggal = date("Y-m-d", strtotime("$tahun-$bulan-$tanggal"));

        $q = $this->db->query("SELECT cuti.*, pegawai.nama FROM cuti JOIN pegawai USING (id_pegawai)
                               WHERE tanggal_mulai <= '$tanggal' AND tanggal_selesai >= '$tanggal' ORDER BY tanggal_mulai");

        if ($q->num_rows() > 0) {
            foreach ($q->result_array() as $row) {
                $data[] = $row;
            }
        }

        $q->free_result();
        return $data;

    }

}