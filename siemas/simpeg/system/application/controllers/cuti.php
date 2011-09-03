<?php

class Cuti extends Controller {

    function Cuti() {
        parent::Controller();
        $this->load->model("Pegawai_model", 'pegawai');
        $this->load->model("Cuti_model", 'cuti');

        // if not login
        if ($this->session->userdata('admin_logged_in') != true) {
            die("<h3>Anda harus login terlebih dahulu</h3>");
        }
    }

    function index() {
        $this->input_cuti();
    }

    function input_cuti() {
        $data = array();

        if ($this->input->post('submit')) {
            $data = array(
                'tanggal_mulai' => format_tanggal_database($this->input->post('dari_tanggal')),
                'tanggal_selesai' => format_tanggal_database($this->input->post('sampai_tanggal')),
                'keperluan' => $this->input->post('keperluan'),
                'alamat_cuti' => $this->input->post('alamat'),
                'keterangan' => $this->input->post('keterangan'),
                'id_pegawai' => $this->input->post('sel_pegawai')
            );

            $this->cuti->insert_cuti($data);
            $data['saved'] = true;
        }

        $data['daftar_pegawai'] = $this->pegawai->get_semua_pegawai();
        $this->load->view('form/input_cuti', $data);
    }

    function list_cuti($id_pegawai) {
        $data = array();
        
        $data['daftar_cuti'] = $this->cuti->get_cuti_pegawai($id_pegawai);
        $this->load->view('form/list_cuti', $data);
    }

    function hapus_cuti($id) {
        // via AJAX
        if($this->cuti->hapus_cuti($id)) echo "1";
        else echo "0";
    }

}
