<?php

class Cuti_model extends Model {

    function  __construct() {
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

}