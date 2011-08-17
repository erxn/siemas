<?php

class Penilaian_model extends Model {

    function  __construct() {
        parent::Model();
        $this->load->model("Absensi_model", "absensi");
        $this->load->model("Pegawai_model", "pegawai");
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

    function get_tahun_dp3() {
        $data = array();
        $q = $this->db->query("SELECT DISTINCT tahun FROM nilai_dp3 ORDER BY tahun");

        if ($q->num_rows() > 0) {
            foreach ($q->result_array() as $row) {
                $data[] = $row;
            }
        }

        $q->free_result();
        return $data;
    }

    function get_tahun_tunjangan() {
        $data = array();
        $q = $this->db->query("SELECT DISTINCT tahun FROM tunjangan ORDER BY tahun");

        if ($q->num_rows() > 0) {
            foreach ($q->result_array() as $row) {
                $data[] = $row;
            }
        }

        $q->free_result();
        return $data;
    }

    function get_data_tpp_pkm($tahun, $bulan) {

        $data_pegawai_pkm = $this->pegawai->get_semua_pegawai_pkm();
        $tpp_pkm = array();
        $jumlah = 0;
        $kehadiran_ideal = $this->absensi->get_kehadiran_ideal_pkm($tahun, $bulan);
        $jam_efek_ideal  = $this->absensi->get_jam_efek_ideal_pkm($tahun, $bulan);
        $rumus_tpp = $this->get_rumus_tpp();

        $data_absensi = $this->absensi->get_data_absensi_pkm($tahun, $bulan);
        $data_jam_efek = $this->absensi->get_data_jam_efek_pkm($tahun, $bulan);

        $i = 0;
        foreach ($data_pegawai_pkm as $p) {

            $j = $this->pegawai->get_jabatan_terakhir($p['id_pegawai']);
            $row = array(
                'id_pegawai'       => $p['id_pegawai'],
                'nama'             => $p['nama'],
                'jabatan'          => $j['jabatan'],
                'kehadiran_ideal'  => $kehadiran_ideal,
                'kehadiran_dicapai'=> $data_absensi[$i]['jumlah'],
                'jam_efek_ideal'   => $jam_efek_ideal,
                'jam_efek_dicapai' => $data_jam_efek[$i]['jumlah'],
                'apel_ideal'       => $kehadiran_ideal,
                'apel_dicapai'     => $data_absensi[$i]['jumlah']
            );

            $nilai = array(
                'nilai_kehadiran'  => ($row['kehadiran_dicapai'] / $row['kehadiran_ideal'] * $rumus_tpp['jumlah_kehadiran']),
                'nilai_jam_efek'   => ($row['jam_efek_dicapai'] / $row['jam_efek_ideal'] * $rumus_tpp['jumlah_jam_efek']),
                'nilai_apel'       => ($row['apel_dicapai'] / $row['apel_ideal'] * $rumus_tpp['jumlah_apel'])
            );

            $row = array_merge($row, $nilai);
            $row['jumlah'] = $nilai['nilai_kehadiran'] + $nilai['nilai_jam_efek'] + $nilai['nilai_apel'];

            $tpp_pkm[] = $row;
            $i++;
            unset($row);
        }

        return $tpp_pkm;

    }

    function get_data_tpp_bp($tahun, $bulan) {

        $data_pegawai_bp = $this->pegawai->get_semua_pegawai_bpp();
        $tpp_bp = array();
        $jumlah = 0;
        $kehadiran_ideal = $this->absensi->get_kehadiran_ideal_bp($tahun, $bulan);
        $jam_efek_ideal  = $this->absensi->get_jam_efek_ideal_bp($tahun, $bulan);
        $rumus_tpp = $this->get_rumus_tpp();

        $data_absensi = $this->absensi->get_data_absensi_bp($tahun, $bulan);
        $data_jam_efek = $this->absensi->get_data_jam_efek_bp($tahun, $bulan);

        $i = 0;
        foreach ($data_pegawai_bp as $p) {

            $j = $this->pegawai->get_jabatan_terakhir($p['id_pegawai']);
            $row = array(
                'id_pegawai'       => $p['id_pegawai'],
                'nama'             => $p['nama'],
                'jabatan'          => $j['jabatan'],
                'kehadiran_ideal'  => $kehadiran_ideal,
                'kehadiran_dicapai'=> $data_absensi[$i]['jumlah'],
                'jam_efek_ideal'   => $jam_efek_ideal,
                'jam_efek_dicapai' => $data_jam_efek[$i]['jumlah'],
                'apel_ideal'       => $kehadiran_ideal,
                'apel_dicapai'     => $data_absensi[$i]['jumlah']
            );

            $nilai = array(
                'nilai_kehadiran'  => ($row['kehadiran_dicapai'] / $row['kehadiran_ideal'] * $rumus_tpp['jumlah_kehadiran']),
                'nilai_jam_efek'   => ($row['jam_efek_dicapai'] / $row['jam_efek_ideal'] * $rumus_tpp['jumlah_jam_efek']),
                'nilai_apel'       => ($row['apel_dicapai'] / $row['apel_ideal'] * $rumus_tpp['jumlah_apel'])
            );

            $row = array_merge($row, $nilai);
            $row['jumlah'] = $nilai['nilai_kehadiran'] + $nilai['nilai_jam_efek'] + $nilai['nilai_apel'];

            $tpp_bp[] = $row;
            $i++;
            unset($row);
        }

        return $tpp_bp;

    }

}