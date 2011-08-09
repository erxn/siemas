<?php

class Penilaian_model extends Model {

    function  __construct() {
        parent::Model();
    }

    function get_nilai_dp3($tahun) {
        $data = array();
        $q = $this->db->query("SELECT pegawai.id_pegawai,
                                      pegawai.nama,
                                      nilai_dp3.kesetiaan,
                                      nilai_dp3.prestasi_kerja,
                                      nilai_dp3.tanggung_jawab,
                                      nilai_dp3.ketaatan,
                                      nilai_dp3.kejujuran,
                                      nilai_dp3.kerjasama,
                                      nilai_dp3.prakarsa,
                                      nilai_dp3.kepemimpinan
                               FROM pegawai LEFT JOIN nilai_dp3
                                     ON pegawai.id_pegawai = nilai_dp3.id_pegawai
                                     AND nilai_dp3.tahun = $tahun
                               WHERE pegawai.aktif = 1 AND pegawai.id_atasan IS NOT NULL ORDER BY pegawai.rank_struktural, pegawai.id_pegawai");

        if ($q->num_rows() > 0) {
            foreach ($q->result_array() as $row) {
                $data[] = $row;
            }
        }

        $q->free_result();
        return $data;
    }

    function insert_dp3($data) {
        $this->db->insert('nilai_dp3', $data);
    }

    function get_tunjangan($tahun, $bulan) {
        $data = array();
        $q = $this->db->query("SELECT pegawai.id_pegawai,
                                      pegawai.nama,
                                      tunjangan.tahun,
                                      tunjangan.bulan,
                                      tunjangan.tunjangan,
                                      tunjangan.pph21
                               FROM pegawai
                               LEFT JOIN tunjangan
                               ON pegawai.id_pegawai = tunjangan.pegawai_id_pegawai
                                  AND tunjangan.tahun = $tahun
                                  AND tunjangan.bulan = $bulan
                               WHERE pegawai.aktif = 1
                               ORDER BY pegawai.rank_struktural, pegawai.id_pegawai");

        if ($q->num_rows() > 0) {
            foreach ($q->result_array() as $row) {
                $data[] = $row;
            }
        }

        $q->free_result();
        return $data;
    }

    function insert_tunjangan($data) {
        $this->db->insert('tunjangan', $data);
    }

    function get_rumus_tpp() {
        $data = array();
        $q = $this->db->query("SELECT * FROM kontribusi_tpp LIMIT 1");

        if($q->num_rows() > 0)
        {
            $data = $q->row_array();
        }

        $q->free_result();
        return $data;
    }

    function set_rumus_tpp($kehadiran, $apel, $jam_efektif) {
        $this->db->query("DELETE FROM kontribusi_tpp");
        $this->db->insert('kontribusi_tpp', array(
            'jumlah_kehadiran' => $kehadiran,
            'jumlah_apel' => $apel,
            'jumlah_jam_efek' => $jam_efektif
        ));
    }

}