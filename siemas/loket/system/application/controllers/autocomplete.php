<?php

class Autocomplete extends Controller {

    function Autocomplete() {
        parent::Controller();
        $this->load->model("M_autocomplete");
    }

    function index() {

    }

    function nama_pasien() {

        $nama = $this->input->post('term');
        
        $daftar_pasien = $this->M_autocomplete->get_pasien_by_nama($nama);
        $array_autocomplete = array();

        foreach ($daftar_pasien as $pasien) {
            $array_autocomplete[] = $pasien['nama_pasien'];
        }

        echo json_encode($array_autocomplete);
    }

}

