<?php

class Pangkat_model extends Model {

    var $tabel = 'pangkat_golongan';

    function  __construct() {
        parent::Model();
        $this->load->model("Pegawai_model", "pegawai");
    }

    function insert($data) {
        $this->db->insert($this->tabel, $data);
        $this->pegawai->update_rank_pangkat($data['id_pegawai']);
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