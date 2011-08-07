<?php

class Event_model extends Model {

    function  __construct() {
        parent::Model();
        $this->load->model("Absensi_model", "absensi");
        $this->load->model("Cuti_model", "cuti");
        $this->load->model("Kegiatan_model", "kegiatan");
        $this->load->model("Pegawai_model", "pegawai");
    }

    function get_event_tanggal($tahun, $bulan, $tanggal) {

        $events = array();

        $daftar_cuti = $this->cuti->get_cuti_by_tanggal($tahun, $bulan, $tanggal);
        $daftar_kegiatan = $this->kegiatan->get_kegiatan_by_tanggal($tahun, $bulan, $tanggal);
        $daftar_kenaikan = $this->pegawai->get_kenaikan_gaji_by_tanggal($tahun, $bulan, $tanggal);

        if(count($daftar_cuti) > 0) foreach ($daftar_cuti as $d) {
            $events[] = "Cuti " . $d['nama'];
        }

        if(count($daftar_kegiatan) > 0) foreach ($daftar_kegiatan as $d) {
            $events[] = "Kegiatan " . $d['kegiatan'] . " di " . $d['lokasi'];
        }

        if(count($daftar_kenaikan) > 0) foreach ($daftar_kenaikan as $d) {
            $events[] = "Kenaikan gaji " . $d['nama'];
        }

        return $events;

    }

}