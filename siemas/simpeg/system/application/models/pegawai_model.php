<?php

class Pegawai_model extends Model {

    function  __construct() {
        parent::Model();
    }

    function get_semua_pegawai() {
        $data = array();
        $q = $this->db->query("SELECT * FROM pegawai");

        if($q->num_rows() > 0)
        {
            foreach ($q->result_array() as $row)
            {
                $data[] = $row;
            }
        }

        $q->free_result();
        return $data;
    }

}