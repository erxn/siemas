<?php

class Penilaian extends Controller {

    function Penilaian()
    {
        parent::Controller();
        $this->load->model("Penilaian_model", "penilaian");
        $this->load->model("Pegawai_model", "pegawai");
        $this->load->model("Absensi_model", "absensi");
    }

    function index()
    {

    }

    function input_dp3($tahun = 0) {

        $data = array();

        if($tahun == 0)
            $data['tahun'] = intval(date("Y"));
        else
            $data['tahun'] = $tahun;

        if($this->input->post('submit')) {

            $id_pegawai = $this->input->post('id_pegawai');
            $kesetiaan  = $this->input->post('kesetiaan');
            $prestasi   = $this->input->post('prestasi');
            $tanggung_jawab = $this->input->post('tanggung_jawab');
            $ketaatan = $this->input->post('ketaatan');
            $kejujuran = $this->input->post('kejujuran');
            $kerjasama = $this->input->post('kerjasama');
            $prakarsa = $this->input->post('prakarsa');
            $kepemimpinan = $this->input->post('kepemimpinan');

            $this->db->query("DELETE FROM nilai_dp3 WHERE tahun = {$data['tahun']}");

            for ($i=0; $i < count($id_pegawai); $i++) {
                $this->penilaian->insert_dp3(array(
                    'kesetiaan' => $kesetiaan[$i],
                    'prestasi_kerja' => $prestasi[$i],
                    'tanggung_jawab' => $tanggung_jawab[$i],
                    'ketaatan' => $ketaatan[$i],
                    'kejujuran' => $kejujuran[$i],
                    'kerjasama' => $kerjasama[$i],
                    'prakarsa' => $prakarsa[$i],
                    'kepemimpinan' => $kepemimpinan[$i],
                    'tahun' => $data['tahun'],
                    'id_pegawai' => $id_pegawai[$i]
                ));
            }

            $data['saved'] = true;

        }

        $data['daftar_nilai'] = $this->penilaian->get_nilai_dp3($data['tahun']);

        if (count($data['daftar_nilai']) == 0) {
            // kosong, prepopulate
            $semua_pegawai = $this->pegawai->get_semua_pegawai();

            foreach ($semua_pegawai as $pegawai) {
                $this->penilaian->insert_dp3(array(
                    'kesetiaan' => 0,
                    'prestasi_kerja' => 0,
                    'tanggung_jawab' => 0,
                    'ketaatan' => 0,
                    'kejujuran' => 0,
                    'kerjasama' => 0,
                    'prakarsa' => 0,
                    'kepemimpinan' => 0,
                    'tahun' => $data['tahun'],
                    'id_pegawai' => $pegawai['id_pegawai']
                ));
            }

            // ambil lagi
            $data['daftar_nilai'] = $this->penilaian->get_nilai_dp3($data['tahun']);

        }

        $this->load->view('form/input_dp3', $data);
    }

    function input_tunjangan($bulan = 0, $tahun = 0) {
        
        $data = array();

        if($tahun == 0 || $bulan == 0) {
            $data['tahun'] = intval(date("Y"));
            $data['bulan'] = intval(date("n"));
        } else {
            $data['tahun'] = $tahun;
            $data['bulan'] = $bulan;
        }

        if($this->input->post('submit')) {

            $id_pegawai = $this->input->post('id_pegawai');
            $tunjangan  = $this->input->post('tunjangan');
            $pph        = $this->input->post('pph21');

            // bersihin dulu
            $this->db->query("DELETE FROM tunjangan WHERE tahun = {$data['tahun']} AND bulan = {$data['bulan']}");

            for ($i=0; $i < count($id_pegawai); $i++) {
                $this->penilaian->insert_tunjangan(array(
                    'tahun' => $data['tahun'],
                    'bulan' => $data['bulan'],
                    'tunjangan' => $tunjangan[$i],
                    'pph21' => $pph[$i],
                    'pegawai_id_pegawai' => $id_pegawai[$i]
                ));
            }

            $data['saved'] = true;

        }

        $data['daftar_tunjangan'] = $this->penilaian->get_tunjangan($data['tahun'], $data['bulan']);

        if (count($data['daftar_tunjangan']) == 0) {
            // kosong, prepopulate
            $semua_pegawai = $this->pegawai->get_semua_pegawai();

            foreach ($semua_pegawai as $pegawai) {
                $this->penilaian->insert_tunjangan(array(
                    'tahun' => $data['tahun'],
                    'bulan' => $data['bulan'],
                    'tunjangan' => 0,
                    'pph21' => 0,
                    'pegawai_id_pegawai' => $pegawai['id_pegawai']
                ));
            }

            // ambil lagi
            $data['daftar_tunjangan'] = $this->penilaian->get_tunjangan($data['tahun'], $data['bulan']);

        }

        $this->load->view('form/input_tunjangan', $data);
    }

    function input_rumus_tpp() {

        $data = array();

        if($this->input->post('submit')) {
            $this->penilaian->set_rumus_tpp(
                    $this->input->post('kehadiran'),
                    $this->input->post('apel'),
                    $this->input->post('jam_efektif')
            );

            $data['saved'] = true;
        }

        $data['kontribusi'] = $this->penilaian->get_rumus_tpp();

        $this->load->view('form/input_rumus_tpp', $data);
    }

    function laporan_nilai_dp3($tahun = 0, $tahun_2 = 0) {
        $data = array();

        if($tahun == 0) {
            $data['tahun_1'] = date("Y");
        } else {
            $data['tahun_1'] = $tahun;
        }

        $data['tahun_2'] = $tahun_2;

        $data['daftar_nilai_1'] = $this->penilaian->get_nilai_dp3($data['tahun_1']);
        $data['daftar_nilai_2'] = $this->penilaian->get_nilai_dp3($data['tahun_2']);

        $data['list_tahun'] = $this->penilaian->get_tahun_dp3();
        $this->load->view('laporan/nilai_dp3', $data);
    }

    function laporan_nilai_tpp($bulan = 0, $tahun = 0) {
        $data = array();

        if($tahun == 0 || $bulan == 0) {
            $data['tahun'] = intval(date("Y"));
            $data['bulan'] = intval(date("n"));
        } else {
            $data['tahun'] = $tahun;
            $data['bulan'] = $bulan;
        }

        $data['tpp_pkm'] = $this->penilaian->get_data_tpp_pkm($data['tahun'], $data['bulan']);
        $data['tpp_bp']  = $this->penilaian->get_data_tpp_bp($data['tahun'], $data['bulan']);

        // insert ke DB hasil hitungannya

        $this->db->query("DELETE FROM nilai_tpp WHERE tahun = {$data['tahun']} AND bulan = {$data['bulan']}");

        foreach ($data['tpp_pkm'] as $d) {
            $this->penilaian->insert_tpp(array(
                'tahun' => $data['tahun'],
                'bulan' => $data['bulan'],
                'tpp'   => $d['jumlah'],
                'pegawai_id_pegawai' => $d['id_pegawai']
            ));
        }

        foreach ($data['tpp_bp'] as $d) {
            $this->penilaian->insert_tpp(array(
                'tahun' => $data['tahun'],
                'bulan' => $data['bulan'],
                'tpp'   => $d['jumlah'],
                'pegawai_id_pegawai' => $d['id_pegawai']
            ));
        }
        
        $data['list_tahun'] = $this->absensi->get_tahun_absensi();
        $this->load->view('laporan/nilai_tpp', $data);
    }

    function rekap_tunjangan($bulan = 0, $tahun = 0) {
        $data = array();

        if($tahun == 0 || $bulan == 0) {
            $data['tahun'] = intval(date("Y"));
            $data['bulan'] = intval(date("n"));
        } else {
            $data['tahun'] = $tahun;
            $data['bulan'] = $bulan;
        }
        
        $data['daftar_tunjangan'] = $this->penilaian->get_tunjangan($data['tahun'], $data['bulan']);

        $data['list_tahun'] = $this->penilaian->get_tahun_tunjangan();
        $this->load->view('laporan/rekap_tunjangan', $data);
    }

}