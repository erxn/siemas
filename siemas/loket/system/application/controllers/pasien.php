<?php

class Pasien extends Controller {

    function __construct() {
        parent::Controller();
        $this->load->model('M_pasien');
        $this->load->model('M_kk');
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

    function registrasi_pasien_baru($id_kk, $id_pasien = 0) {
        
        $kk_baru = $this->M_kk->lihat_profil_kk($id_kk);
        $data_view['kk'] = $kk_baru;

        if($this->input->post('poli')) {
            $nama_pasien = $this->input->post('nama_pasien');
            $id_kk = $this->input->post('id_kk');
//            $jumlah = $this->M_pasien->tambah_id_pasien($id_kk);
//            $no_pasien = $jumlah+1 ;
            $no_index = strtoupper(substr($nama_pasien,0,1))."-".str_pad($id_kk, 4, "0", STR_PAD_LEFT)/*."-".$no_pasien*/; //biar ada 0002 gitu
            
            $poli = $this->input->post('poli');
            $data = array(

                    'tanggal_pendaftaran'          => ganti_format_tanggal($this->input->post('tanggal_pendaftaran')),
                    'nama_pasien'                   => $this->input->post('nama_pasien'),
                    'jk_pasien'                     => $this->input->post('jk_pasien'),
                    'tanggal_lahir'                => $this->input->post('tahun_pasien')."-".$this->input->post('bulan_pasien')."-".$this->input->post('tanggal_lahir'),
                    'status_dalam_keluarga'       => $this->input->post('status_keluarga'),
                    'status_pelayanan'             => $this->input->post('status_pelayanan'),
                    'no_kartu_layanan'             => $this->input->post('no_kartu'),
                    'id_kk'                          => $id_kk,
                    'kode_pasien'                   => $no_index
            );



            $id_pasien_baru = $this->M_pasien->insert_data_pasien($data);
            if($id_pasien_baru) {

                redirect('pasien/registrasi_pasien_sukses/'.$id_kk."/".$id_pasien_baru);
            }
        }

        $this->load->view('registrasi_pasien_sukses', $data_view);
    }

    function registrasi_pasien_proses() {
        $this->load->view('registrasi_pasien_sukses');
    }

function registrasi_pasien_sukses($id_kk, $id_pasien_baru) {

        $kk_baru = $this->M_kk->lihat_profil_kk($id_kk);
        $data['kk'] = $kk_baru;

    $pasien_baru = $this->M_pasien->lihat_profil_pasien($id_kk, $id_pasien_baru);
    $data['pasien'] = $pasien_baru;
    $this->load->view('registrasi_pasien_sukses', $data);

}

}