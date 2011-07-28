<?php
class Kk extends Controller {

    function __construct() {
        parent::Controller();
        $this->load->model('M_kk');
    }

    function profil_kk($id_kk) {
        $this->load->view('profil_kk_popup');
    }

    function registrasi_kk() {
        if($this->input->post('submit')) {

            $data = array(
                    'tanggal_pendaftaran'      => ganti_format_tanggal($this->input->post('tanggal_pendaftaran')),
                    'nama_kk'                    => $this->input->post('nama_kk'),
                    'jk_kk'                      => $this->input->post('jk_kk'),
                    'alamat_kk'                 => $this->input->post('alamat_kk'),
                    'kecamatan_kk'              => $this->input->post('kecamatan_kk'),
                    'kelurahan_kk'              => $this->input->post('kelurahan_kk'),
                    'kota_kab_kk'               => $this->input->post('kab_kota_kk'),
                    'status_wil_luar'          => $this->input->post('status_wil_kk')
            );

            $id_kk_yang_baru = $this->M_kk->insert_data_kk($data);

            if($id_kk_yang_baru) {
                redirect('kk/registrasi_kk_sukses/'.$id_kk_yang_baru);
                
            }
        }

        $this->load->view('registrasi_kk');
    }

    function registrasi_kk_sukses($id_kk_yang_baru) {

        $kk_baru = $this->M_kk->lihat_profil_kk($id_kk_yang_baru);
        $data['kk'] = $kk_baru;
        $this->load->view('registrasi_kk_sukses', $data);

    }
    
}