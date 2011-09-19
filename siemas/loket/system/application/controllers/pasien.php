<?php

class Pasien extends Controller {

    function __construct() {
        parent::Controller();
        $this->load->library(array('table','validation'));
        $this->load->model('M_pasien');
        $this->load->model('M_kk');
        $this->load->model('M_antrian');
        $this->load->model('M_kunjungan');
    }

    function index() {
        $data['title'] = 'Data Pasien';
        $this->load->view('data_pasien',$data);
    }

    function profil_pasien($id_kk,$kode_pasien) {
        $data_pasien = $this->M_pasien->lihat_profil_pasien($id_kk,$kode_pasien);
        $data['pasien'] = $data_pasien;
        $this->load->view('profil_pasien',$data);

    }

    function registrasi_kunjungan($id_kk,$id_pasien) {
        $data_pasien = $this->M_pasien->lihat_profil_pasien($id_kk,$id_pasien);

        $now = date("Y-m-d");
        $jumlah_kunjungan = $this->M_kunjungan->tambah_no_kunjungan($now);
        $no_kunjungan = $jumlah_kunjungan+1;

        $data['pasien'] = $data_pasien;
        $data['no_kunjungan'] = $no_kunjungan;
        $this->load->view('registrasi_kunjungan',$data);
    }

    function registrasi_pasien_lama($id_pasien){
        if($this->input->post('poli')) {
            $status_kartu = $this->input->post('status_kartu');
            $now = date("Y-m-d");
            $jumlah_kunjungan = $this->M_kunjungan->tambah_no_kunjungan($now);
            $no_kunjungan = $jumlah_kunjungan+1;

            $status_diubah = false;

            if($this->input->post('status_pelayanan')!=""){
                 $status_baru = array(
                    'status_pelayanan'  => $this->input->post('status_pelayanan'),
                    'no_kartu_layanan'   => $this->input->post('nomer_kartu')
                );
                $this->db->where('id_pasien', $id_pasien);
                $this->db->update('pasien', $status_baru);

                $status_diubah = true;
            }
            $data_kunjungan = array(
                    'tanggal_kunjungan'  => $now,
                    'id_pasien'              => $id_pasien,
                    'no_kunjungan'          => $no_kunjungan,
                    'status_bawa_kartu' => ($status_diubah) ? 'Bawa' : $status_kartu
            );

            $id_kunjungan = $this->M_kunjungan->insert_id_kunjungan($data_kunjungan);
            
            $id_poli = $this->M_antrian->get_id_by_poli($this->input->post('poli'));
            
            $data_antrian = array(
                'status'    => "ANTRI",
                'id_kunjungan' => $id_kunjungan,
                'id_poli' => $id_poli[0]
            );
            
            $antrian = $this->M_antrian->tambah_antrian($data_antrian);
            redirect('registrasi/index');
        }
    }

    function registrasi_pasien_baru($id_kk, $status, $id_pasien = 0) {

        $kk_baru = $this->M_kk->lihat_profil_kk($id_kk);
        $data_view['kk'] = $kk_baru;
            
        if($this->input->post('poli')) {
            $nama_pasien = $this->input->post('nama_pasien');
            $id_kk = $this->input->post('id_kk');
            $jumlah = $this->M_pasien->tambah_id_pasien($id_kk);
            $no_pasien = $jumlah+1 ;
            $no_index = strtoupper(substr($nama_pasien,0,1))."-".str_pad($id_kk, 4, "0", STR_PAD_LEFT)."-".$no_pasien; //biar ada 0002 gitu
            $tanggal = ganti_format_tanggal($this->input->post('tanggal_pendaftaran'));
            $poli = $this->input->post('poli');

            
            $data = array(

                    'tanggal_pendaftaran'      => $tanggal,
                    'nama_pasien'                   => $this->input->post('nama_pasien'),
                    'jk_pasien'                      => $this->input->post('jk_pasien'),
                    'tanggal_lahir'                => $this->input->post('tahun_pasien')."-".$this->input->post('bulan_pasien')."-".$this->input->post('tanggal_lahir'),
                    'status_dalam_keluarga'   => $this->input->post('status_keluarga'),
                    'status_pelayanan'             => $this->input->post('status_pelayanan'),
                    'no_kartu_layanan'             => $this->input->post('no_kartu'),
                    'id_kk'                          => $id_kk,
                    'kode_pasien'                   => $no_index
            );

            $id_pasien_baru = $this->M_pasien->insert_data_pasien($data);

            $jumlah_kunjungan = $this->M_kunjungan->tambah_no_kunjungan($tanggal);
            $no_kunjungan = $jumlah_kunjungan+1;
            
            $data_kunjungan = array(
                    'tanggal_kunjungan'  => ganti_format_tanggal($this->input->post('tanggal_pendaftaran')),
                    'id_pasien'              => $id_pasien_baru,
                    'no_kunjungan'          => $no_kunjungan
            );
            
            $id_kunjungan = $this->M_kunjungan->insert_id_kunjungan($data_kunjungan);
            
            $id_poli = $this->M_antrian->get_id_by_poli($poli);
            $data_antrian = array(
                'status'    => "ANTRI",
                'id_kunjungan' => $id_kunjungan,
                'id_poli' => $id_poli[0]
            );

            $antrian = $this->M_antrian->tambah_antrian($data_antrian);
            
            if($id_pasien_baru) {
                redirect('pasien/registrasi_pasien_sukses/'.$id_kk."/".$id_pasien_baru."/".$poli."/".$no_kunjungan."/".$status);
                
            }
        }
//        $data_view['title'] = 'Data Pasien';
        $this->load->view('registrasi_pasien_sukses', $data_view);
    }

    function registrasi_pasien_proses() {
        
        $this->load->view('registrasi_pasien_sukses');
    }

    function registrasi_pasien_sukses($id_kk, $id_pasien_baru,$poli, $no_kunjungan, $status) {

        $kk_baru = $this->M_kk->lihat_profil_kk($id_kk);
        $data['kk'] = $kk_baru;

        $pasien_baru = $this->M_pasien->lihat_profil_pasien($id_kk, $id_pasien_baru);
        $data['pasien'] = $pasien_baru;
        $data['kunjungan'] = $no_kunjungan;
        $data['poli'] = $poli;
        $data['title'] = "Registrasi Pasien";
        if($status == "kk_baru")
            
        $this->load->view('registrasi_pasien_sukses', $data);
        else if($status == "kk_lama")
        
            $this->load->view('registrasi_pasien_kk_sukses', $data);
    }


    function cari_pasien(){
        $data = array();
        $kode_pasien = $this->input->post('kode_pasien');
        $nama_pasien = $this->input->post('nama_pasien');
        $umur_pasien = $this->input->post('umur_pasien');
        $alamat = $this->input->post('alamat_pasien');

        if($this->input->post('submit')) {
        
        $hasil_cari = $this->M_pasien->cari_pasien($kode_pasien,$nama_pasien,$umur_pasien,$alamat);
        $data['hasil_cari_pasien'] = $hasil_cari;
        }
        
        $this->load->view('data_pasien', $data);
        }

    
}