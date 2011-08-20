<?php

class Test extends Controller {

    function Test()
    {
        parent::Controller();
        $this->load->model("m_pasien", "pasien");
    }


    function index()
    {
        $daftar_pasien = $this->pasien->get_semua_pasien();

        $judul_halaman = "Daftar Pasien";

        $data['pasien'] = $daftar_pasien;
        $data['judul'] = $judul_halaman;

        $this->load->view("test", $data);
    }

    function poli_umum(){
        $this->load->view("poli_umum");
    }


}