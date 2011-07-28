<?php

class Pasien extends Controller {

    function __construct() {
        parent::Controller();
        $this->load->model('M_pasien');
    }

    function index() {
        $this->load->view('data_pasien');
    }

    function profil_pasien() {
        $this->load->view('profil_pasien');
    }

    function registrasi_kunjungan() {
        $this->load->view('registrasi_kunjungan');
    }

    function registrasi_pasien_baru() {
        if($this->input->post('submit')) {
            $nama_pasien = $this->input->post('nama_pasien');
            $id_kk = $this->input->post('id_kk');
            $no_index = strtoupper(substr($nama_pasien,0,1))."-".str_pad($id_kk, 4, "0", STR_PAD_LEFT); //biar ada 0002 gitu

            $poli = $this->input->post('poli');
            $data = array(

                    'tanggal_pendaftaran'          => ganti_format_tanggal($this->input->post('tanggal_pendaftaran')),
                    'nama_pasien'                   => $this->input->post('nama_pasien'),
                    'jk_pasien'                     => $this->input->post('jk_pasien'),
                    'tanggal_lahir'                => $this->input->post('tahun_pasien')."-".$this->input->post('bulan_lahir')."-".$this->input->post('tanggal_lahir'),
                    'status_dalam_keluarga'       => $this->input->post('status_keluarga'),
                    'status_pelayanan'             => $this->input->post('status_pelayanan'),
                    'no_kartu_layanan'             => $this->input->post('no_kartu'),
                    'id_kk'                          => $id_kk,
                    'kode_pasien'                   => $no_index
            );

            $pasien_baru = $this->M_pasien->insert_data_pasien($data);
        }

        $this->load->view('registrasi_kk_sukses');
    }

    function registrasi_pasien_proses() {
        $this->load->view('registrasi_pasien_sukses');
    }
}
function registrasi_pasien_sukses($pasien_baru) {

    $pasien_baru = $this->M_pasien->lihat_profil_pasien($pasien_baru);
    $data['pasien'] = $pasien_baru;
    $this->load->view('registrasi_kk_sukses', $data);

}