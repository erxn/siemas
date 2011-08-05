<?php

class Ribbon extends Controller {

    function Ribbon()
    {
        parent::Controller();
        $this->load->model("Absensi_model", "absensi");
    }


    function index()
    {
        $data = array();

        $absensi = $this->absensi->get_jadwal_pkm();
        $hari_ini = date("N");

        $data['jam_kerja'] = $absensi[$hari_ini - 1];

        $this->load->view("ribbon", $data);
    }


}