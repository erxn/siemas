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

}