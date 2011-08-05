<?php

class Home extends Controller {

    function Home()
    {
        parent::Controller();
        $this->load->model("Absensi_model", "absensi");
        $this->load->model("Cuti_model", "cuti");
        $this->load->model("Kegiatan_model", "kegiatan");
    }


    function index()
    {
        $this->load->view("home/home");
    }

    function hari_ini()
    {
        $data = array();
        $data['pegawai_absen'] = $this->absensi->get_pegawai_tidak_hadir(date("Y"), date("m"), date("d"));
        $data['pegawai_cuti']  = $this->cuti->get_cuti_by_tanggal(date("Y"), date("m"), date("d"));
        $data['pegawai_kegiatan']  = $this->kegiatan->get_kegiatan_by_tanggal(date("Y"), date("m"), date("d"));

        $this->load->view("home/hari_ini", $data);
    }

    function kalender($bulan = 0, $tahun = 0)
    {
        $this->load->view("home/home_kalender");
    }

}

