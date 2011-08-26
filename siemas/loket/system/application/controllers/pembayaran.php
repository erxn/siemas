<?php

class Pembayaran extends Controller {

    function __construct() {
        parent::Controller();
        $this->load->model('M_pembayaran');
        $this->load->model('M_kunjungan');
        $this->load->model('M_pasien');
        $this->load->model('M_kk');
    }

    function index() {
        $this->data_pembayaran();
    }

    function data_pembayaran($tanggal = 0) {

        if($tanggal == 0) {
            $tanggal = date("Y-m-d");
        }

        if($this->input->post('cari')) {
            $nama = $this->input->post('nama');
            $pembayaran = $this->M_pembayaran->data_pembayaran_pasien($tanggal, $nama);
        } else {
            $pembayaran = $this->M_pembayaran->data_pembayaran($tanggal);
        }

        $data['pembayaran'] = $pembayaran;
        
        //if($this->input->post(''))

        $this->load->view('loket_pembayaran',$data);
    }


    function input_pembayaran($id_kunjungan) {
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

    function rincian($id_kunjungan,$status) {
        $id = $this->M_kunjungan->get_pasien_by_kunjungan($id_kunjungan);
        $id_kk = $id[0]['id_kk'];
        $id_pasien = $id[0]['id_pasien'];

        $data_pasien = $this->M_pasien->lihat_profil_pasien($id_kk, $id_pasien);
        $data['pasien'] = $data_pasien;
        
        $rinci = $this->M_pembayaran->get_rincian($id_kunjungan);
        
        $data['rincian'] = $rinci;
        $tot = $this->M_pembayaran->total_harga($id_kunjungan);
        $data['total'] = $tot;
        //print_r($data);exit;
        if($status=="Lunas")
           $data['status'] = "Lunas";
        else $data['status'] = "rinci" ;
        $this->load->view('rincian',$data);
        
    }

    
    
}