<?php

class Kegiatan extends Controller {

    function Kegiatan() {
        parent::Controller();
        $this->load->model("Pegawai_model", 'pegawai');
        $this->load->model("Kegiatan_model", 'kegiatan');
    }

    function index() {
        $this->input_kegiatan();
    }

    function input_kegiatan() {
        $data = array();

        if ($this->input->post('submit')) {
            $data = array(
                'tanggal' => format_tanggal_database($this->input->post('tanggal_kegiatan')),
                'lokasi' => $this->input->post('lokasi_kegiatan'),
                'kegiatan' => $this->input->post('kegiatan'),
                'id_pegawai' => $this->input->post('sel_pegawai')
            );

            $this->kegiatan->insert_kegiatan($data);
            $data['saved'] = true;
        }

        $data['daftar_pegawai'] = $this->pegawai->get_semua_pegawai();
        $this->load->view('form/input_kegiatan', $data);
    }

    function list_kegiatan($id_pegawai) {
        $data = array();
        
        $data['daftar_kegiatan'] = $this->kegiatan->get_kegiatan_pegawai($id_pegawai);
        $this->load->view('form/list_kegiatan', $data);
    }

    function hapus_kegiatan($id) {
        // via AJAX
        if($this->kegiatan->hapus_kegiatan($id)) echo "1";
        else echo "0";
    }

}
