<?php

class Test extends Controller {

    function Test()
    {
        parent::Controller();
        $this->load->model("Pegawai_model", "pegawai");
    }


    function index()
    {
        $daftar_pegawai = $this->pegawai->get_semua_pegawai();

        $judul_halaman = "Daftar pegawai";

        $data['pegawai'] = $daftar_pegawai;
        $data['judul'] = $judul_halaman;

        $this->load->view("test", $data);
    }


}