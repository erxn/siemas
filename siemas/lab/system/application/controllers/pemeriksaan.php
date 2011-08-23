<?php

class Pemeriksaan extends Controller {

    function  __construct() {
        parent::Controller();
        $this->load->model('M_pembayaran');
        $this->load->model('M_kunjungan');
        $this->load->model('M_pasien');
        $this->load->model('M_kk');
    }

    function index() {
    $this->load->view('permohonan_analisa');
        
    }

    function input_pemeriksaan($id_kunjungan) {
        $id = $this->M_kunjungan->get_pasien_by_kunjungan($id_kunjungan);
        $id_kk = $id[0]['id_kk'];
        $id_pasien = $id[0]['id_pasien'];

        $data_pasien = $this->M_pasien->lihat_profil_pasien($id_kk, $id_pasien);
        $data['pasien'] = $data_pasien;
        $data['kunjungan'] = $id;

        $data['daftar_layanan'] = $this->M_pembayaran->get_layanan();

        $this->load->view('input_pembayaran',$data);

        if($this->input->post('submit')) {

            $layanans = $this->input->post('pelayanan');
            $polis = $this->input->post('poli');
            $hargas = $this->input->post('harga');

            for($i=0; $i < count($layanans); $i++) {

                if ($layanans[$i] != "") {

                    $p = $this->M_pembayaran->get_id_by_layanan($layanans[$i]);

                    $id_layanan = $p[0]['id_layanan'];
                    $pelayanan = array(
                            'id_kunjungan' => $id_kunjungan,
                            'id_layanan'     => $id_layanan,
                            'harga_layanan'  => $hargas[$i],
                            'poli'              => $polis[$i]
                    );

                    $this->M_pembayaran->tambah_layanan($pelayanan);

                    $tot = $this->M_pembayaran->total_harga($id_kunjungan);

                    $lunas_bayar = array(
                            'total_harga' => $tot[0]['total_harga'],
                            'status_pembayaran' => "Lunas"
                    );
                    $this->M_pembayaran->insert_total($lunas_bayar,$id_kunjungan);
                }
            }

            redirect('pembayaran/rincian/'.$id_kunjungan."/Lunas");
        }
    }


    
}


