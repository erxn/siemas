<?php

class Pegawai extends Controller {

    function Pegawai() {
        parent::Controller();
        $this->load->model("Pegawai_model", 'pegawai');
    }

    function index() {
        $this->input_pegawai();
    }

    function input_pegawai() {

        if ($this->input->post('submit')) {

            $config['upload_path'] = './foto/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '500';

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload()) {
                echo $this->upload->display_errors();
                exit;
            } else {
                $foto = $this->upload->data();
            }

            // proses data pokok
            $data = array(
                'nip' => $this->input->post('nip'),
                'nama' => $this->input->post('nama'),
                'tempat_lahir' => $this->input->post('tempat_lahir'),
                'tanggal_lahir' => format_tanggal_database($this->input->post('tanggal_lahir')),
                'alamat' => $this->input->post('alamat'),
                'jk' => $this->input->post('jk'),
                'agama' => $this->input->post('agama'),
                'gol_darah' => $this->input->post('gol_darah'),
                'telepon' => $this->input->post('telepon'),
                'status' => $this->input->post('status'),
                'tanggal_masuk' => format_tanggal_database($this->input->post('tanggal_masuk')),
                'pasfoto' => $foto['file_name'],
                'kenaikan_YAD' => format_tanggal_database($this->input->post('kenaikan_yad')),
                'status_kepegawaian' => $this->input->post('status_kepegawaian'),
                'sumber_gaji' => $this->input->post('sumber_gaji'),
                'bp_pemda' => $this->input->post('bp_pemda'),
                'aktif' => 1
            );

            if ($this->input->post('id_atasan') != 0)
                $data['id_atasan'] = $this->input->post('id_atasan');
            $id_pegawai_baru = $this->pegawai->insert_data_pokok($data);

            // proses data pendidikan
            $data_pendidikan = $this->input->post('pendidikan');
            $tahun_pendidikan = $this->input->post('tahun_pendidikan');

            if (implode("", $data_pendidikan) != "") {
                for ($i = 0; $i < count($data_pendidikan); $i++) {
                    $this->pegawai->insert_data_pendidikan(array(
                        'tahun_ijazah' => $tahun_pendidikan[$i],
                        'pendidikan' => $data_pendidikan[$i],
                        'id_pegawai' => $id_pegawai_baru
                    ));
                }
            }

            // proses data pelatihan
            $data_pelatihan = $this->input->post('pelatihan');
            $tahun_pelatihan = $this->input->post('tahun_pelatihan');

            if (implode("", $data_pelatihan) != "") {
                for ($i = 0; $i < count($data_pelatihan); $i++) {
                    $this->pegawai->insert_data_pelatihan(array(
                        'tahun' => $tahun_pendidikan[$i],
                        'pelatihan' => $data_pendidikan[$i],
                        'id_pegawai' => $id_pegawai_baru
                    ));
                }
            }

            // proses data tanggungan
            $nama_tanggungan = $this->input->post('tanggungan_nama');
            $lahir_tanggungan = $this->input->post('tanggungan_tanggal_lahir');
            $nikah_tanggungan = $this->input->post('tanggungan_tanggal_nikah');
            $pekerjaan_tanggungan = $this->input->post('tanggungan_pekerjaan');
            $dapat_tunjangan_tanggungan = $this->input->post('tanggungan_dapat_tunjangan');
            $keterangan_tanggungan = $this->input->post('tanggungan_keterangan');

            if (implode("", $nama_tanggungan) != "") {
                for ($i = 0; $i < count($nama_tanggungan); $i++) {
                    $this->pegawai->insert_data_tanggungan(array(
                        'nama' => $nama_tanggungan[$i],
                        'tanggal_lahir' => format_tanggal_database($lahir_tanggungan[$i]),
                        'tanggal_nikah' => format_tanggal_database($nikah_tanggungan[$i]),
                        'pekerjaan' => $pekerjaan_tanggungan[$i],
                        'dapat_tunjangan' => $dapat_tunjangan_tanggungan[$i],
                        'keterangan' => $keterangan_tanggungan[$i],
                        'id_pegawai' => $id_pegawai_baru
                    ));
                }
            }

            // proses pangkat_golongan
            $this->pegawai->insert_pangkat_golongan(array(
                'TMT' => format_tanggal_database($this->input->post('tmt_gol_ruang')),
                'pangkat' => $this->input->post('pangkat'),
                'golongan' => $this->input->post('gol_ruang'),
                'id_pegawai' => $id_pegawai_baru
            ));

            // proses jabatan
            $this->pegawai->insert_jabatan(array(
                'TMT' => format_tanggal_database($this->input->post('tmt_jabatan')),
                'jabatan' => $this->input->post('jabatan'),
                'id_pegawai' => $id_pegawai_baru
            ));

            // proses gaji
            $this->pegawai->insert_gaji(array(
                'TMT' => format_tanggal_database($this->input->post('tmt_gaji')),
                'gaji' => $this->input->post('gaji'),
                'id_pegawai' => $id_pegawai_baru
            ));
        }

        $this->load->view('form/input_pegawai');
    }

    function edit_pegawai_pilih() {
        $this->load->view('form/edit_pegawai_pilih');
    }

    function edit_pegawai($id = 0) {
        $this->load->view('form/edit_pegawai');
    }

    function input_perubahan_gaji() {
        $this->load->view('form/input_perubahan_gaji');
    }

    function input_perubahan_jabatan() {
        $this->load->view('form/input_perubahan_jabatan');
    }

    function input_perubahan_pangkat() {
        $this->load->view('form/input_perubahan_pangkat');
    }

    function input_kenaikan_yad() {
        $this->load->view('form/input_kenaikan_yad');
    }

    function input_struktur_organisasi() {
        $this->load->view('form/input_struktur_organisasi');
    }

    function laporan_duk() {
        $this->load->view('laporan/duk');
    }

    function laporan_biodata_fungsional($id_pegawai = 0) {
        $this->load->view('laporan/biodata_fungsional');
    }

    function laporan_skumptk($id_pegawai = 0) {
        $this->load->view('laporan/skumptk');
    }

}
