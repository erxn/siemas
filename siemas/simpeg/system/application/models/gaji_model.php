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

    function get_kenaikan_gaji_yad($id_pegawai) {
        $data = array();
        $q = $this->db->query("SELECT kenaikan_YAD FROM pegawai WHERE id_pegawai = $id_pegawai");

        if ($q->num_rows() > 0) {
            $data = $q->row_array();
        }

        $q->free_result();
        return $data['kenaikan_YAD'];
    }

    function set_kenaikan_gaji_yad($id_pegawai, $kenaikan_yad) {
        $this->db->where('id_pegawai', $id_pegawai);
        $this->db->update('pegawai', array('kenaikan_YAD' => $kenaikan_yad));
    }

}