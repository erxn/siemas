<?php
class Kk extends Controller {

    function __construct() {
        parent::Controller();
        $this->load->model('M_kk');
        $this->load->model('M_pasien');
    }

    function profil_kk($id_kk) {
        $data_kk = $this->M_kk->lihat_profil_kk($id_kk);
        $data['kk'] = $data_kk;
        $this->load->view('profil_kk_popup',$data);
    }

    function profil_pasien_kk($id_kk){
        $data_kk = $this->M_kk->lihat_profil_kk($id_kk);
        $data['kk'] = $data_kk;
        $this->load->view('registrasi_pasien_kk',$data);
    }
    
    function registrasi_kk() {
        if($this->input->post('submit')) {

            $data = array(
                    'tanggal_pendaftaran'  => ganti_format_tanggal($this->input->post('tanggal_pendaftaran')),
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

    function cari_kk(){
        $data = array();
        $nama_kk = $this->input->post('nama_kk');
        $alamat_kk = $this->input->post('alamat_kk');
        if($this->input->post('cari')) {

        $hasil_cari = $this->M_kk->cari_kk($nama_kk,$alamat_kk);

        $data['hasil_cari_kk'] = $hasil_cari;
        
        }
        $this->load->view('registrasi_kk', $data);

    }

    function tambah_anggota($id_kk){
        $profil_kk = $this->M_kk->lihat_profil_kk($id_kk);
        $data['kk'] = $profil_kk;
        $this->load->view('registrasi_pasien_kk', $data);
    }
}