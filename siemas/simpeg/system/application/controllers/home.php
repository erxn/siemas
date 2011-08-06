<?php

class Home extends Controller {

    function Home()
    {
        parent::Controller();
        $this->load->model("Absensi_model", "absensi");
        $this->load->model("Cuti_model", "cuti");
        $this->load->model("Kegiatan_model", "kegiatan");
        $this->load->model("Pegawai_model", "pegawai");
    }


    function index()
    {
        $this->load->view("home/home");
    }

    function hari_ini($tahun = 0, $bulan = 0, $tanggal = 0)
    {
        $data = array();

        if ($bulan == 0 || $tahun == 0 || $tanggal == 0) {
            $data['bulan'] = intval(date("n"));
            $data['tahun'] = intval(date("Y"));
            $data['tanggal'] = intval(date("d"));
        } else {
            $data['bulan'] = $bulan;
            $data['tahun'] = $tahun;
            $data['tanggal'] = $tanggal;
        }

        $data['pegawai_absen'] = $this->absensi->get_pegawai_tidak_hadir($data['tahun'], $data['bulan'], $data['tanggal']);
        $data['pegawai_cuti']  = $this->cuti->get_cuti_by_tanggal($data['tahun'], $data['bulan'], $data['tanggal']);
        $data['pegawai_kegiatan']  = $this->kegiatan->get_kegiatan_by_tanggal($data['tahun'], $data['bulan'], $data['tanggal']);

        $this->load->view("home/hari_ini", $data);
    }

    function kalender($tahun = 0, $bulan = 0)
    {
        if ($bulan == 0 || $tahun == 0) {
            $data['bulan'] = intval(date("n"));
            $data['tahun'] = intval(date("Y"));
        } else {
            $data['bulan'] = $bulan;
            $data['tahun'] = $tahun;
        }

        $data['libur_pkm'] = $this->absensi->get_libur_pkm($data['tahun'], $data['bulan']);
        $data['libur_bp']  = $this->absensi->get_libur_bp($data['tahun'], $data['bulan']);

        $data['kegiatan']  = $this->kegiatan->get_kegiatan_by_bulan($data['tahun'], $data['bulan']);
        $data['cuti']      = $this->cuti->get_cuti_by_bulan($data['tahun'], $data['bulan']);
        $data['kenaikan']  = $this->pegawai->get_kenaikan_gaji($data['tahun'], $data['bulan']);

        $this->load->view("home/home_kalender", $data);
    }

}

