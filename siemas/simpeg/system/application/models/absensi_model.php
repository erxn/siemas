<?php

class Absensi_model extends Model {

    function __construct() {
        parent::Model();
    }

    function get_jadwal_pkm() {
        $data = array();
        $q = $this->db->query("SELECT * FROM jadwal_puskesmas WHERE bp_pemda = 0 ORDER BY id_jadwal_puskesmas");

        if ($q->num_rows() > 0) {
            foreach ($q->result_array() as $row) {
                $data[] = $row;
            }
        }

        $q->free_result();
        return $data;
    }

    function get_jadwal_bp() {
        $data = array();
        $q = $this->db->query("SELECT * FROM jadwal_puskesmas WHERE bp_pemda = 1 ORDER BY id_jadwal_puskesmas");

        if ($q->num_rows() > 0) {
            foreach ($q->result_array() as $row) {
                $data[] = $row;
            }
        }

        $q->free_result();
        return $data;
    }

    function set_jadwal($data) {
        /* default:
          INSERT INTO `jadwal_puskesmas` (`id_jadwal_puskesmas`, `hari`, `jam_mulai`, `jam_selesai`, `bp_pemda`, `buka`) VALUES
          (1, 'senin', '07:30:00', '14:30:00', 0, 1),
          (2, 'senin', '08:00:00', '16:00:00', 1, 1),
          (3, 'selasa', '00:00:00', '00:00:00', 0, 1),
          (4, 'selasa', '00:00:00', '00:00:00', 1, 1),
          (5, 'rabu', '00:00:00', '00:00:00', 0, 1),
          (6, 'rabu', '00:00:00', '00:00:00', 1, 1),
          (7, 'kamis', '00:00:00', '00:00:00', 0, 1),
          (8, 'kamis', '00:00:00', '00:00:00', 1, 1),
          (9, 'jumat', '00:00:00', '00:00:00', 0, 1),
          (10, 'jumat', '00:00:00', '00:00:00', 1, 1),
          (11, 'sabtu', '00:00:00', '00:00:00', 0, 0),
          (12, 'sabtu', '00:00:00', '00:00:00', 1, 0),
          (13, 'minggu', '00:00:00', '00:00:00', 0, 0),
          (14, 'minggu', '00:00:00', '00:00:00', 1, 0);
         */
        $this->db->insert('jadwal_puskesmas', $data);
    }

    function get_hari_libur_rutin_pkm() {
        $data = array();
        $q = $this->db->query("SELECT hari FROM jadwal_puskesmas WHERE bp_pemda = 0 AND buka = 0 ORDER BY id_jadwal_puskesmas");

        if ($q->num_rows() > 0) {
            foreach ($q->result_array() as $row) {
                $data[] = $row;
            }
        }

        $q->free_result();

        $data2 = array(); // translated
        foreach ($data as $d) {
            switch ($d['hari']) {
                case "minggu":
                    $data2[] = 'Sun';
                    break;
                case "senin":
                    $data2[] = 'Mon';
                    break;
                case "selasa":
                    $data2[] = 'Tue';
                    break;
                case "rabu":
                    $data2[] = 'Wed';
                    break;
                case "kamis":
                    $data2[] = 'Thu';
                    break;
                case "jumat":
                    $data2[] = 'Fri';
                    break;
                case "sabtu":
                    $data2[] = 'Sat';
                    break;
            }
        }
        return $data2;
    }

    function get_hari_libur_rutin_bp() {
        $data = array();
        $q = $this->db->query("SELECT hari FROM jadwal_puskesmas WHERE bp_pemda = 1 AND buka = 0 ORDER BY id_jadwal_puskesmas");

        if ($q->num_rows() > 0) {
            foreach ($q->result_array() as $row) {
                $data[] = $row;
            }
        }

        $q->free_result();

        $data2 = array(); // translated
        foreach ($data as $d) {
            switch ($d['hari']) {
                case "minggu":
                    $data2[] = 'Sun';
                    break;
                case "senin":
                    $data2[] = 'Mon';
                    break;
                case "selasa":
                    $data2[] = 'Tue';
                    break;
                case "rabu":
                    $data2[] = 'Wed';
                    break;
                case "kamis":
                    $data2[] = 'Thu';
                    break;
                case "jumat":
                    $data2[] = 'Fri';
                    break;
                case "sabtu":
                    $data2[] = 'Sat';
                    break;
            }
        }

        return $data2;
    }

    function get_tanggal_libur_rutin_pkm($tahun, $bulan) {

        $tanggal_libur = array();

        $hari_libur = $this->get_hari_libur_rutin_pkm();
        for ($d = 1; $d <= cal_days_in_month(CAL_GREGORIAN, $bulan, $tahun); $d++) {
            if (in_array(date("D", strtotime("{$tahun}-{$bulan}-{$d}")), $hari_libur)) {
                $tanggal_libur[] = $d;
            }
        }

        return $tanggal_libur;
    }

    function get_tanggal_libur_rutin_bp($tahun, $bulan) {

        $tanggal_libur = array();

        $hari_libur = $this->get_hari_libur_rutin_bp();
        for ($d = 1; $d <= cal_days_in_month(CAL_GREGORIAN, $bulan, $tahun); $d++) {
            if (in_array(date("D", strtotime("{$tahun}-{$bulan}-{$d}")), $hari_libur)) {
                $tanggal_libur[] = $d;
            }
        }

        return $tanggal_libur;
    }

    function insert_libur($data) {
        $this->db->insert('tanggal_libur', $data);
    }

    function get_tanggal_libur_pkm($tahun, $bulan) {
        $data = array();
        $q = $this->db->query("SELECT day(tanggal) AS t FROM tanggal_libur WHERE year(tanggal) = $tahun AND month(tanggal) = $bulan AND bp_pemda = 0 ORDER BY tanggal");

        if ($q->num_rows() > 0) {
            foreach ($q->result_array() as $row) {
                $data[] = $row['t'];
            }
        }

        $q->free_result();
        return $data;
    }

    function get_tanggal_libur_bp($tahun, $bulan) {
        $data = array();
        $q = $this->db->query("SELECT day(tanggal) AS t FROM tanggal_libur WHERE year(tanggal) = $tahun AND month(tanggal) = $bulan AND bp_pemda = 1 ORDER BY tanggal");

        if ($q->num_rows() > 0) {
            foreach ($q->result_array() as $row) {
                $data[] = $row['t'];
            }
        }

        $q->free_result();
        return $data;
    }

    function get_libur_pkm($tahun, $bulan) {
        $data = array();
        $q = $this->db->query("SELECT * FROM tanggal_libur WHERE year(tanggal) = $tahun AND month(tanggal) = $bulan AND bp_pemda = 0 ORDER BY tanggal");

        if ($q->num_rows() > 0) {
            foreach ($q->result_array() as $row) {
                $data[] = $row;
            }
        }

        $q->free_result();
        return $data;
    }

    function get_libur_bp($tahun, $bulan) {
        $data = array();
        $q = $this->db->query("SELECT * FROM tanggal_libur WHERE year(tanggal) = $tahun AND month(tanggal) = $bulan AND bp_pemda = 1 ORDER BY tanggal");

        if ($q->num_rows() > 0) {
            foreach ($q->result_array() as $row) {
                $data[] = $row;
            }
        }

        $q->free_result();
        return $data;
    }

    function get_libur_pkm_all($tahun, $bulan) {
        return array_merge($this->get_tanggal_libur_pkm($tahun, $bulan), $this->get_tanggal_libur_rutin_pkm($tahun, $bulan));
    }

    function get_libur_bp_all($tahun, $bulan) {
        return array_merge($this->get_tanggal_libur_bp($tahun, $bulan), $this->get_tanggal_libur_rutin_bp($tahun, $bulan));
    }

    function hapus_libur($id) {
        $this->db->query("DELETE FROM tanggal_libur WHERE id_tanggal_libur = $id");
    }

    function is_libur_pkm($tahun, $bulan, $tanggal) {
        return in_array($tanggal, $this->get_libur_pkm_all($tahun, $bulan));
    }

    function is_libur_bp($tahun, $bulan, $tanggal) {
        return in_array($tanggal, $this->get_libur_bp_all($tahun, $bulan));
    }

    function get_absensi($tahun, $bulan, $tanggal, $bp = 0) {
        $data = array();
        $tanggal = date("Y-m-d", strtotime("$tahun-$bulan-$tanggal"));

        $q = $this->db->query("SELECT pegawai.id_pegawai,
                                      pegawai.nama,
                                      pegawai.nip,
                                      absensi.id_absensi,
                                      absensi.hadir,
                                      absensi.jam_hadir
                               FROM pegawai LEFT JOIN absensi
                               ON   pegawai.id_pegawai = absensi.id_pegawai AND absensi.tanggal = '$tanggal'
                               WHERE pegawai.bp_pemda = $bp AND pegawai.aktif = 1 ORDER BY pegawai.id_pegawai");

        if ($q->num_rows() > 0) {
            foreach ($q->result_array() as $row) {
                $data[] = $row;
            }
        }

        $q->free_result();
        return $data;
    }

    function insert_absensi($data) {

        $this->db->query("REPLACE INTO absensi (id_absensi, tanggal, hadir, jam_hadir, id_pegawai)
                          VALUES ('{$data['id_absensi']}',
                                  '{$data['tanggal']}',
                                  '{$data['hadir']}',
                                  '{$data['jam_hadir']}',
                                  '{$data['id_pegawai']}')");

    }

    function sudah_diinput_absensi($tahun, $bulan, $tanggal) {

        $tanggal = date("Y-m-d", strtotime("$tahun-$bulan-$tanggal"));
        $jumlah_absensi = $this->db->where('tanggal', $tanggal)->from('absensi')->count_all_results();

        return $jumlah_absensi > 0;

    }

    function get_pegawai_tidak_hadir($tahun, $bulan, $tanggal) {
        $data = array();
        $tanggal = date("Y-m-d", strtotime("$tahun-$bulan-$tanggal"));

        $q = $this->db->query("SELECT pegawai.id_pegawai, pegawai.nama
                               FROM absensi JOIN pegawai USING (id_pegawai)
                               WHERE absensi.hadir = 0
                               AND   absensi.tanggal = '$tanggal'");

        if ($q->num_rows() > 0) {
            foreach ($q->result_array() as $row) {
                $data[] = $row;
            }
        }

        $q->free_result();
        return $data;
    }

}
