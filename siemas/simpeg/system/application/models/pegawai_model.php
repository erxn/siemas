<?php

class Pegawai_model extends Model {

    function __construct() {
        parent::Model();
    }

    function get_kepala_puskesmas() {
        $data = array();
        $q = $this->db->query("SELECT * FROM pegawai WHERE id_atasan IS NULL LIMIT 1");

        if($q->num_rows() > 0)
        {
            $data = $q->row_array();
        }

        $q->free_result();
        return $data;
    }

    function set_kepala_puskesmas($id_pegawai) {
        // set
        $this->db->query("UPDATE pegawai SET id_atasan = NULL WHERE id_pegawai = {$id_pegawai}");
        // update all others
        $this->db->query("UPDATE pegawai SET id_atasan = {$id_pegawai} WHERE id_pegawai != {$id_pegawai}");
    }

    function set_atasan($id_pegawai, $id_atasan) {
        $this->db->query("UPDATE pegawai SET id_atasan = {$id_atasan} WHERE id_pegawai = {$id_pegawai}");

        // update rank struktural
        $rank = $this->get_rank_struktural($id_pegawai);
        $this->db->query("UPDATE pegawai SET rank_struktural = {$rank} WHERE id_pegawai = {$id_pegawai}");
    }

    function get_semua_pegawai($order = 'id_pegawai', $kecuali_kepala = false) {
        $data = array();

        if($kecuali_kepala == true)
            $q = $this->db->query("SELECT * FROM pegawai WHERE aktif = 1 AND id_atasan IS NOT NULL ORDER BY rank_struktural, id_pegawai");
        else
            $q = $this->db->query("SELECT * FROM pegawai WHERE aktif = 1 ORDER BY rank_struktural, id_pegawai");

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
        $q = $this->db->query("SELECT * FROM pegawai WHERE aktif = 1 AND bp_pemda = 0 ORDER BY rank_struktural, id_pegawai");

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
        $q = $this->db->query("SELECT * FROM pegawai WHERE aktif = 1 AND bp_pemda = 1 ORDER BY rank_struktural, id_pegawai");

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
        $this->update_rank_pangkat($data['id_pegawai']);
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
    
    function update_data_pendidikan($id, $data) {
        $this->db->where('id_pendidikan', $id);
        $this->db->update('pendidikan', $data);
    }

    function update_data_pelatihan($id, $data) {
        $this->db->where('id_pelatihan', $id);
        $this->db->update('pelatihan', $data);
    }

    function update_data_tanggungan($id, $data) {
        $this->db->where('id_tanggungan', $id);
        $this->db->update('tanggungan', $data);
    }

    function hapus_data($tabel, $id) {
        return $this->db->query("DELETE FROM $tabel WHERE id_{$tabel} = $id");
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

    function get_kenaikan_gaji($tahun, $bulan) {
        $data = array();
        $q = $this->db->query("SELECT id_pegawai, nama, kenaikan_YAD FROM `pegawai` WHERE year(kenaikan_YAD) = '$tahun' AND month(kenaikan_YAD) = '$bulan'");

        if ($q->num_rows() > 0) {
            foreach ($q->result_array() as $row) {
                $data[] = $row;
            }
        }

        $q->free_result();
        return $data;
    }

    function get_kenaikan_gaji_by_tanggal($tahun, $bulan, $tanggal) {
        $data = array();
        $q = $this->db->query("SELECT id_pegawai, nama, kenaikan_YAD FROM `pegawai` WHERE year(kenaikan_YAD) = '$tahun' AND month(kenaikan_YAD) = '$bulan' AND day(kenaikan_YAD) = '$tanggal'");

        if ($q->num_rows() > 0) {
            foreach ($q->result_array() as $row) {
                $data[] = $row;
            }
        }

        $q->free_result();
        return $data;
    }

//                    SELECT pegawai.*, j1.TMT as TMT_jabatan, j1.jabatan, p1.TMT as TMT_pangkat, p1.pangkat, p1.golongan
//                    FROM pegawai
//                         LEFT JOIN jabatan j1 USING (id_pegawai)
//                         LEFT JOIN pangkat_golongan p1 USING (id_pegawai)
//                    WHERE
//                    (j1.TMT IS NULL
//                        OR j1.TMT = (
//                            SELECT MAX(j2.TMT)
//                            FROM jabatan j2
//                            WHERE j2.id_pegawai = pegawai.id_pegawai
//                        )
//                    )
//                    AND
//                    (p1.TMT IS NULL
//                        OR p1.TMT = (
//                            SELECT MAX(p2.TMT)
//                            FROM pangkat_golongan p2
//                            WHERE p2.id_pegawai = pegawai.id_pegawai
//                        )
//                    )

    function get_rank_struktural($id_pegawai) {

        $rank = 0;

        $saya = $this->get_pegawai_by_id($id_pegawai);
        $id_atasan_saya = $saya['id_atasan'];

        while($id_atasan_saya != '') {

            $atasan_saya = $this->get_pegawai_by_id($id_atasan_saya);
            $id_atasan_dari_atasan_saya = $atasan_saya['id_atasan'];

            $id_atasan_saya = $id_atasan_dari_atasan_saya;

            $rank++;

        }

        return $rank;

    }

    function update_rank_pangkat($id_pegawai) {

        $g = $this->pegawai->get_pangkat_terakhir($id_pegawai);

        $urutan_golongan = array(
            '-' => 0,
            'I / a' => 1,
            'I / b' => 2,
            'I / c' => 3,
            'I / d' => 4,
            'II / a' => 5,
            'II / b' => 6,
            'II / c' => 7,
            'II / d' => 8,
            'III / a' => 9,
            'III / b' => 10,
            'III / c' => 11,
            'III / d' => 12,
            'IV / a' => 13,
            'IV / b' => 14,
            'IV / c' => 15,
            'IV / d' => 16,
            'IV / e' => 17
        );

        $this->db->query("UPDATE pegawai SET rank_pangkat = '{$urutan_golongan[$g['golongan']]}' WHERE id_pegawai = {$id_pegawai}");

    }

}