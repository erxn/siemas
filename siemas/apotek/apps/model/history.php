<?php

class Model_history {

    public function __construct() {

        $this->db = new library_db();
    }

    public function buang_jam($waktu) {

        $tanggal = explode(" ", $waktu);
        $result = $tanggal[0];

        return $result;
    }

    public function cek_habis() {

        $result = $this->db->results("SELECT * FROM obat WHERE stok_obat <= '10'");

        return $result;
    }

    public function cek_history_harian($tanggal) {

        $result = $this->db->results("SELECT * FROM history_harian_obat WHERE tanggal='$tanggal'");
        if (!$result) {
            $data_obat = $this->db->results("SELECT * FROM obat");
            foreach ($data_obat as $datas) {
                $data['tanggal'] = $tanggal;
                $data['stok_awal'] = $datas->stok_obat;
                $data['id_obat'] = $datas->id_obat;
                $query = $this->db->insert('history_harian_obat', $data);
            }
        }
    }

    public function cek_jumlah_habis() {

        $result = $this->db->find_var("SELECT COUNT(*) FROM obat WHERE stok_obat <= '10'");

        return $result;
    }

    public function dasar_url($base) {

        $base_awal = explode("/", $base);
        $result = $base_awal[0] . '//' . $base_awal[2] . '/' . $base_awal[3] . '/';

        return $result;
    }

    public function gabung($dd, $mm, $yy) {

        $result = $yy . '-' . $mm . '-' . $dd;

        return $result;
    }

    public function gabung2($mm, $yy) {
        if ($mm > 9)
            $result = $yy . '-' . $mm;
        else
            $result = $yy . '-0' . $mm;
        return $result;
    }

    public function nama_pasien($id_pasien) {

        $result = $this->db->find_var("SELECT nama_pasien FROM pasien WHERE id_pasien = '$id_pasien'");

        return $result;
    }

    public function reverse($date) {

        $reverse = explode("-", $date);
        $result = $reverse[2] . '-' . $reverse[1] . '-' . $reverse[0];

        return $result;
    }

    public function tambah_bulan($date) {

        $TB = explode("-", $date);
        if ($TB[1] < 12) {
            $tmp = $TB[1] + 1;
            $result = $TB[0] . '-' . $tmp;
        } else {
            $tmp = $TB[0] + 1;
            $result = $tmp . '-01';
        }

        return $result;
    }

}

