<?php

class Gaji_model extends Model {

    var $tabel = 'gaji';

    function __construct() {
        parent::Model();
    }

    function insert($data) {
        $this->db->insert($this->tabel, $data);
    }

    function get_by_id_pegawai($id_pegawai) {
        $data = array();
        $q = $this->db->query("SELECT * FROM {$this->tabel} WHERE id_pegawai = $id_pegawai ORDER BY TMT");

        if ($q->num_rows() > 0) {
            foreach ($q->result_array() as $row) {
                $data[] = $row;
            }
        }

        $q->free_result();
        return $data;
    }

    function hapus($id) {
        return $this->db->query("DELETE FROM {$this->tabel} WHERE id_{$this->tabel} = $id");
    }

}