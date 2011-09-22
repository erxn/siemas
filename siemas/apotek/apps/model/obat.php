<?php

class Model_obat {

    public function __construct() {

        $this->db = new library_db();
        $this->date = new Model_history();
    }

    public function ambil() {

        $result = $this->db->results("SELECT * FROM obat");

        return $result;
    }

    public function ambil_obat($id) {

        $result = $this->db->row("SELECT * FROM obat WHERE id_obat='$id'");

        return $result;
    }

    public function ambil_nama_obat() {

        $result = $this->db->results("SELECT nbk_obat, id_obat FROM obat");

        return $result;
    }

    public function ambil_narkotik() {

        $result = $this->db->results("SELECT * FROM obat WHERE narkotik='1'");

        return $result;
    }

    public function auto_pasien($tanggal) {
        $data = array();
        $data[] = new stdClass();
        $result = $this->db->results("SELECT no_kunjungan, id_pasien FROM kunjungan WHERE tanggal_kunjungan='$tanggal'");
        if (isset($result)) {
            $n = 0;
            foreach ($result as $value) {
                $data[$n]->no_kunjungan = $value->no_kunjungan;
                $data[$n]->nama_pasien = $this->db->find_var("SELECT nama_pasien FROM pasien WHERE id_pasien='$value->id_pasien'");

                $n++;
            }
        }
        return $data;
    }

    public function cek_kadaluarsa() {

        $date = date("Y-m-d");
        $kadaluarsa = date("Y-m-d", strtotime("+14 days"));
        $data = $this->db->find_var("SELECT COUNT(*) FROM history_obat
                                    WHERE tanggal_kadaluarsa>='$date' AND tanggal_kadaluarsa<='$kadaluarsa'");
        return $data;
    }

    public function cek_obat($id_obat) {
        $temp = 1;
        $n = 1;
        foreach ($id_obat as $result) {
            if ($id_obat[$n]) {
                $nbk = $this->db->results("SELECT * FROM obat WHERE id_obat='$id_obat[$n]'");
                if (!$nbk) {
                    $temp = 0;
                    break;
                }
            }
            $n++;
        }
        return $temp;
    }

    public function cek_pasien($no_kunjungan, $tanggal_kunjungan) {

        $result = $this->db->results("SELECT * FROM kunjungan where no_kunjungan='$no_kunjungan' AND tanggal_kunjungan='$tanggal_kunjungan'");

        return $result;
    }

    public function history_bt($BT) {
        $data = array();
        $data[] = new stdClass();
        $result = $this->db->results("SELECT DISTINCT(no_sbkk),tanggal FROM history_obat WHERE tanggal LIKE '$BT%' ORDER BY tanggal");
        if (isset($result)) {
            $n = 0;
            foreach ($result as $value) {
                $data[$n]->no_sbkk = $value->no_sbkk;
                $data[$n]->tanggal = $this->date->reverse($value->tanggal);
                $n++;
            }
        }
        return $data;
    }

    public function history_isi_pemasukan($tanggal, $sbkk) {
        $data = array();
        $data[] = new stdClass();
        $result = $this->db->results("SELECT id_obat,penambahan_obat FROM history_obat WHERE tanggal='$tanggal' AND no_sbkk='$sbkk'");
        $n = 0;
        foreach ($result as $daftar) {
            $data[$n]->id_obat = $daftar->id_obat;
            $data[$n]->nbk_obat = $this->db->find_var("SELECT nbk_obat FROM obat WHERE id_obat = '$daftar->id_obat'");
            $data[$n]->satuan_obat = $this->db->find_var("SELECT satuan_obat FROM obat WHERE id_obat = '$daftar->id_obat'");
            $data[$n]->penambahan_obat = $daftar->penambahan_obat;
            $n++;
        }
        return $data;
    }

    public function history_pemakaian($tanggal) {

        $data = $this->db->results("SELECT DISTINCT(poli),waktu FROM pemakainan_intern WHERE waktu = '$tanggal'");
        return $data;
    }

    public function history_pemakaian_bt($bulan, $tahun) {
        $data = array();
        $result = $this->db->results("SELECT DISTINCT(waktu) FROM pemakainan_intern 
                WHERE year(waktu) = '$tahun' AND month(waktu) = '$bulan' ORDER BY waktu");
        $n = 0;
        if ($result) {
            foreach ($result as $list) {
                $tanggal = $this->date->buang_jam($list->waktu);
                $data[$n]['tanggal'] = $this->date->reverse($tanggal);
                $data[$n]['tanggal2'] = $tanggal;
                $data[$n]['poli'] = $this->db->results("SELECT DISTINCT(poli) FROM pemakainan_intern WHERE waktu = '$list->waktu'");

                $n++;
            }
        }
        return $data;
    }

    public function history_resep($tanggal) {

        $result = $this->db->results("SELECT DISTINCT(id_pasien) FROM resep WHERE waktu LIKE '$tanggal%'");
        $data = $this->history_resep_nama($result, $tanggal);
        return $data;
    }

    public function history_resep_nama($antrian, $tanggal) {
        $n = '1';
        if ($antrian) {
            foreach ($antrian as $antrian) {
                $data[$n]['id_pasien'] = $antrian->id_pasien;
                $data[$n]['no_kunjungan'] = $this->db->find_var("SELECT no_kunjungan FROM kunjungan WHERE id_pasien = '$antrian->id_pasien' AND tanggal_kunjungan='$tanggal'");
                $data[$n]['tanggal'] = $tanggal;
                $data[$n]['nama_pasien'] = $this->db->find_var("SELECT nama_pasien FROM pasien WHERE id_pasien = '$antrian->id_pasien'");

                $n++;
            }
            return $data;
        } else {
            return NULL;
        }
    }

    public function history_isi_resep($id_pasien, $tanggal) {
        $id_resep = $this->db->find_var("SELECT id_resep FROM resep WHERE id_pasien = '$id_pasien' AND waktu LIKE '$tanggal%'");
        $daftar_obat = $this->db->results("SELECT id_obat,jumlah_terpakai FROM isi_resep WHERE id_resep = '$id_resep'");
        $n = '1';
        foreach ($daftar_obat as $daftar) {
            $data[$n]['id_obat'] = $daftar->id_obat;
            $data[$n]['nbk_obat'] = $this->db->find_var("SELECT nbk_obat FROM obat WHERE id_obat = '$daftar->id_obat'");
            $data[$n]['satuan_obat'] = $this->db->find_var("SELECT satuan_obat FROM obat WHERE id_obat = '$daftar->id_obat'");
            $data[$n]['jumlah'] = $daftar->jumlah_terpakai;

            $n++;
        }
        return $data;
    }

    public function history_isi_pemakaian($poli, $tanggal) {
        $id_pemakaian = $this->db->results("SELECT id_pemakainan_intern as id FROM pemakainan_intern WHERE poli = '$poli' AND waktu = '$tanggal'");
        $x = 1;
        foreach ($id_pemakaian as $id) {
            $daftar_obat = $this->db->results("SELECT id_obat,jumlah_terpakai FROM isi_obat_intern WHERE id_pemakainan_intern = '$id->id'");
            $n = '1';
            $a = 'id_obat' . $x;
            $b = 'nbk_obat' . $x;
            $c = 'satuan_obat' . $x;
            $d = 'jumlah' . $x;
            
            if (isset($daftar_obat)) {
                foreach ($daftar_obat as $daftar) {
                    $data[$n][$a] = $daftar->id_obat;
                    $data[$n][$b] = $this->db->find_var("SELECT nbk_obat FROM obat WHERE id_obat = '$daftar->id_obat'");
                    $data[$n][$c] = $this->db->find_var("SELECT satuan_obat FROM obat WHERE id_obat = '$daftar->id_obat'");
                    $data[$n][$d] = $daftar->jumlah_terpakai;

                    $n++;
                }$x++;
            }
        }
        return $data;
    }

    public function jumlah() {

        $result = $this->db->find_var("SELECT COUNT(*) FROM obat");

        return $result;
    }

    public function kadaluarsa() {

        $date = date("Y-m-d");
        $kadaluarsa = date("Y-m-d", strtotime("+14 days"));
        $data = $this->db->results("SELECT no_sbkk, tanggal, COUNT(*) AS jumlahnya FROM history_obat
                                    WHERE tanggal_kadaluarsa>='$date' AND tanggal_kadaluarsa<='$kadaluarsa'
                                    GROUP BY no_sbkk ORDER BY tanggal ASC ");
        return $data;
    }

    public function lihat_kadaluarsa($tanggal, $sbkk) {
        $data = array();
        $data[] = new stdClass();
        $date = date("Y-m-d");
        $kadaluarsa = date("Y-m-d", strtotime("+14 days"));
        $result = $this->db->results("SELECT id_obat,tanggal_kadaluarsa FROM history_obat
                                    WHERE tanggal='$tanggal' AND no_sbkk='$sbkk' AND tanggal_kadaluarsa>='$date' AND tanggal_kadaluarsa<='$kadaluarsa'");
        if (isset($result)) {
            $n = 0;
            foreach ($result as $value) {
                $data[$n]->id_obat = $value->id_obat;
                $data[$n]->kadaluarsa = $value->tanggal_kadaluarsa;
                $data[$n]->nbk_obat = $this->db->find_var("SELECT nbk_obat FROM obat WHERE id_obat='$value->id_obat'");
                $n++;
            }
        }
        return $data;
    }

    public function lihat_obat_kadaluarsa() {
        $data = array();
        $data[] = new stdClass();
        $date = date("Y-m-d");
        $kadaluarsa = date("Y-m-d", strtotime("+14 days"));
        $result = $this->db->results("SELECT no_sbkk, tanggal, tanggal_kadaluarsa, id_obat FROM history_obat
                                    WHERE tanggal_kadaluarsa>='$date' AND tanggal_kadaluarsa<='$kadaluarsa'");
        if (isset($result)) {
            $n = 0;
            foreach ($result as $value) {
                $data[$n]->tanggal_input = $this->date->reverse($value->tanggal);
                $data[$n]->no_sbkk = $value->no_sbkk;
                $data[$n]->id_obat = $value->id_obat;
                $data[$n]->kadaluarsa = $value->tanggal_kadaluarsa;
                $data[$n]->nbk_obat = $this->db->find_var("SELECT nbk_obat FROM obat WHERE id_obat='$value->id_obat'");
                $n++;
            }
        }
        return $data;
    }

    public function resep_pasien($tanggal, $no_kunjungan) {
        $id_pasien = $this->db->find_var("SELECT id_pasien FROM kunjungan WHERE no_kunjungan='$no_kunjungan' AND tanggal_kunjungan='$tanggal'");
        $waktu = $tanggal . ' ' . date('H:i:s');
        $data['waktu'] = $waktu;
        $data['id_pasien'] = $id_pasien;
        $query = $this->db->insert('resep', $data);
        return $id_pasien;
    }

    public function tambah($sbkk, $isi, $kadaluarsa, $batch) {

        $date = date('Y-m-d');
        $result = $this->db->results("SELECT * FROM obat");
        $n = '1';
        foreach ($result as $result) {
            if (isset($isi[$n])) {
                $total = $result->stok_obat + $isi[$n];
            } else {
                $total = $result->stok_obat;
            }
            $data['id_history_obat'] = NULL;
            $data['no_sbkk'] = $sbkk;
            $data['tanggal'] = $date;
            $data['stok_awal_obat'] = $result->stok_obat;
            $data['total_obat'] = $total;
            $data['penambahan_obat'] = $total - $result->stok_obat;
            $data2['stok_obat'] = $total;
            $data3['id_obat'] = $result->id_obat;
            if (isset($kadaluarsa[$n])) {
                $data['tanggal_kadaluarsa'] = $this->date->reverse($kadaluarsa[$n]);
            }
            if (isset($batch[$n])) {
                $data['no_batch'] = $batch[$n];
            }
            $data['id_obat'] = $result->id_obat;
            if ($data['penambahan_obat']) {
                $query = $this->db->insert('history_obat', $data);
                $query = $this->db->update('obat', $data2, $data3);
            }
            $n++;
        }
    }

    public function tambah_isi_pemakaian($intern, $tanggal, $id_obat, $jumlah, $keterangan) {
        $this->tambah_pemakaian($tanggal, $keterangan, $intern);
        $id_pemakaian = $this->db->find_var("SELECT id_pemakainan_intern FROM pemakainan_intern WHERE poli='$intern' AND waktu = '$tanggal'");
        $n = '1';
        foreach ($id_obat as $result) {
            if ($id_obat[$n]) {
                $data2['id_obat'] = $id_obat[$n];
                $data2['id_pemakainan_intern'] = $id_pemakaian;
                $data2['jumlah_terpakai'] = $jumlah[$n];
                $stok = $this->db->find_var("SELECT stok_obat FROM obat WHERE id_obat='$id_obat[$n]'");
                $total = $stok - $jumlah[$n];
                $data['stok_obat'] = $total;
                $data3['id_obat'] = $id_obat[$n];
                $query = $this->db->insert('isi_obat_intern', $data2);
            }
            $query = $this->db->update('obat', $data, $data3);

            $n++;
        }
    }

    public function tambah_isi_resep($id_pasien, $tanggal, $id_obat, $jumlah) {
        $id_resep = $this->db->find_var("SELECT id_resep FROM resep WHERE id_pasien='$id_pasien' AND waktu LIKE '$tanggal%'");
        $n = '1';
        foreach ($id_obat as $result) {
            if ($id_obat[$n]) {
                $data2['id_obat'] = $id_obat[$n];
                $data2['id_resep'] = $id_resep;
                $data2['jumlah_terpakai'] = $jumlah[$n];
                $stok = $this->db->find_var("SELECT stok_obat FROM obat WHERE id_obat='$id_obat[$n]'");
                $total = $stok - $jumlah[$n];
                $data['stok_obat'] = $total;
                $data3['id_obat'] = $id_obat[$n];
                $query = $this->db->insert('isi_resep', $data2);
            }
            $query = $this->db->update('obat', $data, $data3);

            $n++;
        }
    }

    public function tambah_jenis_obat($nbk_obat, $satuan_obat, $narkotik, $jumlah) {

        $data['nbk_obat'] = $nbk_obat;
        $data['satuan_obat'] = $satuan_obat;
        $data['narkotik'] = $narkotik;
        $data['stok_obat'] = $jumlah;
        $query = $this->db->insert('obat', $data);
        ;
    }

    public function tambah_pemakaian($waktu, $keterangan, $poli) {

        $data['waktu'] = $waktu;
        $data['keterangan'] = $keterangan;
        $data['poli'] = $poli;
        $query = $this->db->insert('pemakainan_intern', $data);
        ;
    }

    public function update_jenis_obat($id, $nbk_obat, $satuan_obat, $stok_obat) {
        $data2['id_obat'] = $id;
        $data['nbk_obat'] = $nbk_obat;
        $data['satuan_obat'] = $satuan_obat;
        $data['stok_obat'] = $stok_obat;
        $query = $this->db->update('obat', $data, $data2);
        ;
    }

}
