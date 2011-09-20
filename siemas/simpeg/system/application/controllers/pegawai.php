<?php

class Pegawai extends Controller {

    function Pegawai() {
        parent::Controller();
        $this->load->model("Pegawai_model", 'pegawai');
        $this->load->model("Gaji_model", 'gaji');
        $this->load->model("Jabatan_model", 'jabatan');
        $this->load->model("Pangkat_model", 'pangkat');

        // if not login
        if ($this->session->userdata('admin_logged_in') != true) {
            die("<h3>Anda harus login terlebih dahulu</h3>");
        }
    }

    function index() {
        $this->input_pegawai();
    }

    function input_pegawai() {

        if ($this->input->post('submit')) {

            if ($_FILES AND $_FILES['userfile']['name']) {

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
            } else
                $foto['file_name'] = "";

            // proses data pokok
            $data = array(
                'nip' => str_replace(" ", "", $this->input->post('nip')),
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

            $this->pegawai->set_atasan($id_pegawai_baru, $data['id_atasan']);

            // proses data pendidikan
            $data_pendidikan = $this->input->post('pendidikan');
            $tahun_pendidikan = $this->input->post('tahun_pendidikan');

            if (implode("", $data_pendidikan) != "") {
                for ($i = 0; $i < count($data_pendidikan); $i++) {
                    if ($data_pendidikan[$i] != "") {
                        $this->pegawai->insert_data_pendidikan(array(
                            'tahun_ijazah' => $tahun_pendidikan[$i],
                            'pendidikan' => $data_pendidikan[$i],
                            'id_pegawai' => $id_pegawai_baru
                        ));
                    }
                }
            }

            // proses data pelatihan
            $data_pelatihan = $this->input->post('pelatihan');
            $tahun_pelatihan = $this->input->post('tahun_pelatihan');

            if (implode("", $data_pelatihan) != "") {
                for ($i = 0; $i < count($data_pelatihan); $i++) {
                    if ($data_pelatihan[$i] != "") {
                        $this->pegawai->insert_data_pelatihan(array(
                            'tahun' => $tahun_pelatihan[$i],
                            'pelatihan' => $data_pelatihan[$i],
                            'id_pegawai' => $id_pegawai_baru
                        ));
                    }
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
                    if ($nama_tanggungan[$i] != "") {
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

            redirect('pegawai/input_sukses/' . $id_pegawai_baru);
        }

        $data['daftar_pegawai'] = $this->pegawai->get_semua_pegawai();

        $this->load->view('form/input_pegawai', $data);
    }

    function input_sukses($id) {

        $data['data_pegawai'] = $this->pegawai->get_pegawai_by_id($id);
        $data['data_pelatihan'] = $this->pegawai->get_pelatihan_pegawai($id);
        $data['data_pendidikan'] = $this->pegawai->get_pendidikan_pegawai($id);
        $data['data_tanggungan'] = $this->pegawai->get_tanggungan_pegawai($id);
        $data['daftar_pegawai'] = $this->pegawai->get_semua_pegawai();

        $data['jabatan'] = $this->pegawai->get_jabatan_terakhir($id);
        $data['pangkat'] = $this->pegawai->get_pangkat_terakhir($id);
        $data['gaji'] = $this->pegawai->get_gaji_terakhir($id);

        $this->load->view('form/input_pegawai_sukses', $data);
    }

    function profil($id) {

        $data['data_pegawai'] = $this->pegawai->get_pegawai_by_id($id);
        $data['data_pelatihan'] = $this->pegawai->get_pelatihan_pegawai($id);
        $data['data_pendidikan'] = $this->pegawai->get_pendidikan_pegawai($id);
        $data['data_tanggungan'] = $this->pegawai->get_tanggungan_pegawai($id);
        $data['daftar_pegawai'] = $this->pegawai->get_semua_pegawai();

        $data['jabatan'] = $this->pegawai->get_jabatan_terakhir($id);
        $data['pangkat'] = $this->pegawai->get_pangkat_terakhir($id);
        $data['gaji'] = $this->pegawai->get_gaji_terakhir($id);

        $this->load->view('form/profil_pegawai', $data);
    }

    function edit_pegawai_pilih() {
        $data['daftar_pegawai'] = $this->pegawai->get_semua_pegawai();

        $this->load->view('form/edit_pegawai_pilih', $data);
    }

    function edit_pegawai($id = 0) {

        if ($this->input->post('submit')) {

            if ($_FILES AND $_FILES['userfile']['name']) {

                $config['upload_path'] = './foto/';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '500';

                $this->load->library('upload', $config);

                if (!$this->upload->do_upload()) {
                    echo $this->upload->display_errors();
                    exit;
                } else {
                    $foto = $this->upload->data();
                    if(file_exists("foto/" . $this->input->post('foto_sekarang')))
                        unlink("foto/" . $this->input->post('foto_sekarang'));
                }
            } else
                $foto['file_name'] = $this->input->post('foto_sekarang');

            // proses data pokok
            $data = array(
                'nip' => str_replace(" ", "", $this->input->post('nip')),
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
                'bp_pemda' => $this->input->post('bp_pemda')
            );

            if ($this->input->post('id_atasan') != 0)
                $data['id_atasan'] = $this->input->post('id_atasan');
            $this->pegawai->update_data_pokok($id, $data);

            // hapus-hapus

            $pendidikan_del = explode(",", $this->input->post('pendidikan_del'));
            array_shift($pendidikan_del);
            foreach($pendidikan_del as $del) {
                $this->pegawai->hapus_data('pendidikan', $del);
            }

            $pelatihan_del = explode(",", $this->input->post('pelatihan_del'));
            array_shift($pelatihan_del);
            foreach($pelatihan_del as $del) {
                $this->pegawai->hapus_data('pelatihan', $del);
            }

            $tanggungan_del = explode(",", $this->input->post('tanggungan_del'));
            array_shift($tanggungan_del);
            foreach($tanggungan_del as $del) {
                $this->pegawai->hapus_data('tanggungan', $del);
            }

            // proses data pendidikan

            $id_pendidikan = $this->input->post('id_pendidikan');
            $data_pendidikan = $this->input->post('pendidikan');
            $tahun_pendidikan = $this->input->post('tahun_pendidikan');

            for ($i = 0; $i < count($data_pendidikan); $i++) {
                if ($data_pendidikan[$i] != "") {
                    if ($id_pendidikan[$i] == "") { // new, insert it
                        $this->pegawai->insert_data_pendidikan(array(
                            'tahun_ijazah' => $tahun_pendidikan[$i],
                            'pendidikan' => $data_pendidikan[$i],
                            'id_pegawai' => $id
                        ));
                    } else { // existing, update it
                        $this->pegawai->update_data_pendidikan($id_pendidikan[$i], array(
                            'tahun_ijazah' => $tahun_pendidikan[$i],
                            'pendidikan' => $data_pendidikan[$i]
                        ));
                    }
                }
            }

            // proses data pelatihan

            $id_pelatihan = $this->input->post('id_pelatihan');
            $data_pelatihan = $this->input->post('pelatihan');
            $tahun_pelatihan = $this->input->post('tahun_pelatihan');

            for ($i = 0; $i < count($data_pelatihan); $i++) {
                if ($data_pelatihan[$i] != "") {
                    if ($id_pelatihan[$i] == "") { // new, insert it
                        $this->pegawai->insert_data_pelatihan(array(
                            'tahun' => $tahun_pelatihan[$i],
                            'pelatihan' => $data_pelatihan[$i],
                            'id_pegawai' => $id
                        ));
                    } else { // existing, update it
                        $this->pegawai->update_data_pelatihan($id_pelatihan[$i], array(
                            'tahun' => $tahun_pelatihan[$i],
                            'pelatihan' => $data_pelatihan[$i]
                        ));
                    }
                }
            }

            // proses data tanggungan

            $id_tanggungan = $this->input->post('tanggungan_id');
            $nama_tanggungan = $this->input->post('tanggungan_nama');
            $lahir_tanggungan = $this->input->post('tanggungan_tanggal_lahir');
            $nikah_tanggungan = $this->input->post('tanggungan_tanggal_nikah');
            $pekerjaan_tanggungan = $this->input->post('tanggungan_pekerjaan');
            $dapat_tunjangan_tanggungan = $this->input->post('tanggungan_dapat_tunjangan');
            $keterangan_tanggungan = $this->input->post('tanggungan_keterangan');

            for ($i = 0; $i < count($nama_tanggungan); $i++) {
                if ($nama_tanggungan[$i] != "") {
                    if ($id_tanggungan[$i] == "") {
                        $this->pegawai->insert_data_tanggungan(array(
                            'nama' => $nama_tanggungan[$i],
                            'tanggal_lahir' => format_tanggal_database($lahir_tanggungan[$i]),
                            'tanggal_nikah' => format_tanggal_database($nikah_tanggungan[$i]),
                            'pekerjaan' => $pekerjaan_tanggungan[$i],
                            'dapat_tunjangan' => $dapat_tunjangan_tanggungan[$i],
                            'keterangan' => $keterangan_tanggungan[$i],
                            'id_pegawai' => $id
                        ));
                    } else {
                        $this->pegawai->update_data_tanggungan($id_tanggungan[$i], array(
                            'nama' => $nama_tanggungan[$i],
                            'tanggal_lahir' => format_tanggal_database($lahir_tanggungan[$i]),
                            'tanggal_nikah' => format_tanggal_database($nikah_tanggungan[$i]),
                            'pekerjaan' => $pekerjaan_tanggungan[$i],
                            'dapat_tunjangan' => $dapat_tunjangan_tanggungan[$i],
                            'keterangan' => $keterangan_tanggungan[$i]
                        ));
                    }
                }
            }

            $data['updated'] = true;
        }

        $data['data_pegawai'] = $this->pegawai->get_pegawai_by_id($id);
        $data['data_pelatihan'] = $this->pegawai->get_pelatihan_pegawai($id);
        $data['data_pendidikan'] = $this->pegawai->get_pendidikan_pegawai($id);
        $data['data_tanggungan'] = $this->pegawai->get_tanggungan_pegawai($id);
        $data['daftar_pegawai'] = $this->pegawai->get_semua_pegawai();

        $this->load->view('form/edit_pegawai', $data);
    }

    function input_perubahan_gaji() {

        $data = array();

        if ($this->input->post('submit')) {
            $insert = array(
                'TMT' => format_tanggal_database($this->input->post('tmt')),
                'gaji' => $this->input->post('gaji'),
                'id_pegawai' => $this->input->post('sel_pegawai')
            );

            $this->gaji->insert($insert);
            $data['saved'] = true;
        }

        $data['daftar_pegawai'] = $this->pegawai->get_semua_pegawai();

        $this->load->view('form/input_perubahan_gaji', $data);
    }

    function input_perubahan_jabatan() {

        $data = array();

        if ($this->input->post('submit')) {
            $insert = array(
                'TMT' => format_tanggal_database($this->input->post('tmt')),
                'jabatan' => $this->input->post('jabatan'),
                'id_pegawai' => $this->input->post('sel_pegawai')
            );

            $this->jabatan->insert($insert);
            $data['saved'] = true;
        }

        $data['daftar_pegawai'] = $this->pegawai->get_semua_pegawai();

        $this->load->view('form/input_perubahan_jabatan', $data);
    }

    function input_perubahan_pangkat() {

        $data = array();

        if ($this->input->post('submit')) {
            $insert = array(
                'TMT' => format_tanggal_database($this->input->post('tmt')),
                'pangkat' => $this->input->post('pangkat'),
                'golongan' => $this->input->post('gol_ruang'),
                'id_pegawai' => $this->input->post('sel_pegawai')
            );

            $this->pangkat->insert($insert);
            $data['saved'] = true;
        }
        
        $data['daftar_pegawai'] = $this->pegawai->get_semua_pegawai();

        $this->load->view('form/input_perubahan_pangkat', $data);
    }

    function list_gaji($id_pegawai) {
        $data = array();
        
        $data['daftar_gaji'] = $this->gaji->get_by_id_pegawai($id_pegawai);
        $this->load->view('form/list_gaji', $data);
    }

    function list_jabatan($id_pegawai) {
        $data = array();
        
        $data['daftar_jabatan'] = $this->jabatan->get_by_id_pegawai($id_pegawai);
        $this->load->view('form/list_jabatan', $data);
    }

    function list_pangkat($id_pegawai) {
        $data = array();

        $data['daftar_pangkat'] = $this->pangkat->get_by_id_pegawai($id_pegawai);
        $this->load->view('form/list_pangkat', $data);
    }

    function hapus_gaji($id) {
        // via AJAX
        if($this->gaji->hapus($id)) echo "1";
        else echo "0";
    }

    function hapus_jabatan($id) {
        // via AJAX
        if($this->jabatan->hapus($id)) echo "1";
        else echo "0";
    }
    
    function hapus_pangkat($id) {
        // via AJAX
        if($this->pangkat->hapus($id)) echo "1";
        else echo "0";
    }

    function input_kenaikan_yad($id_pegawai = 0) {

        $data = array();

        if($this->input->post('submit')) {

            $tanggal_yad = format_tanggal_database($this->input->post('tanggal_yad'));
            $this->gaji->set_kenaikan_gaji_yad($id_pegawai, $tanggal_yad);

            $data['updated'] = true;

        }

        $data['daftar_pegawai'] = $this->pegawai->get_semua_pegawai();
        $data['id_pegawai'] = $id_pegawai;

        if($id_pegawai != 0) {
            $data['kenaikan_yad'] = $this->gaji->get_kenaikan_gaji_yad($id_pegawai);
        }

        $this->load->view('form/input_kenaikan_yad', $data);
    }

    function input_struktur_organisasi() {

        $data = array();

        if($this->input->post('update_kepala')) {

            $id_kepala_baru = $this->input->post('kepala');
            $this->pegawai->set_kepala_puskesmas($id_kepala_baru);

        }

        if($this->input->post('submit')) {

            $id_pegawai = $this->input->post('id_pegawai');
            $atasan     = $this->input->post('atasan');

            for ($i = 0; $i < count($id_pegawai); $i++) {
                $this->pegawai->set_atasan($id_pegawai[$i], $atasan[$i]);
            }

            $data['saved'] = true;

        }

        $data['kepala_puskes'] = $this->pegawai->get_kepala_puskesmas();
        $data['daftar_pegawai_all'] = $this->pegawai->get_semua_pegawai();
        $data['daftar_pegawai_kecuali_kepala'] = $this->pegawai->get_semua_pegawai('id_pegawai', true);

        $this->load->view('form/input_struktur_organisasi', $data);
    }

    // LAPORAN-LAPORAN

    function laporan_duk() {

        $data = array();
        
        $data['list'] = $this->pegawai->get_duk();

        if($this->input->post('filter')) {
            $cols = array(
                "",
                $this->input->post('pangkat'),
                $this->input->post('masa_kerja'),
                $this->input->post('pendidikan'),
                $this->input->post('ttl'),
                $this->input->post('jabatan'),
                $this->input->post('kenaikan_gaji'),
                $this->input->post('unit_kerja')
            );

            $urut = $this->input->post('urut');

            if($urut == 1) {
                unset($data['list']);
                $data['list'] = $this->pegawai->get_duk('rank_pangkat DESC');
            }
            
        } else {
            $cols = array("", 1, 1, 1, 1, 1, 1, 0);
            $urut = 0;
        }

        $data['kolom'] = $cols;
        $data['urut']  = $urut;

        $this->load->view('laporan/duk', $data);
    }

    function laporan_biodata_fungsional($id_pegawai = 0) {
        $data = array();

        $data['daftar_pegawai'] = $this->pegawai->get_semua_pegawai();

        if($id_pegawai != 0) {

            $data['biodata'] = $this->pegawai->get_pegawai_by_id($id_pegawai);
            $data['pendidikan'] = $this->pegawai->get_pendidikan_pegawai($id_pegawai);
            $data['pelatihan'] = $this->pegawai->get_pelatihan_pegawai($id_pegawai);
            $data['jabatan'] = $this->jabatan->get_by_id_pegawai($id_pegawai);

        }

        $data['id_pegawai'] = $id_pegawai;

        $this->load->view('laporan/biodata_fungsional', $data);
    }

    function laporan_skumptk($id_pegawai = 0) {
        $data = array();

        $data['daftar_pegawai'] = $this->pegawai->get_semua_pegawai();

        if($id_pegawai != 0) {

            $data['biodata'] = $this->pegawai->get_pegawai_by_id($id_pegawai);
            $data['data_tanggungan'] = $this->pegawai->get_tanggungan_pegawai($id_pegawai);

        }

        $data['id_pegawai'] = $id_pegawai;

        $this->load->view('laporan/skumptk', $data);
    }

    // LAPORAN : XLS

    function laporan_duk_xls($urut) {

        $data = array();

        if($urut == 1) {
            $data['list'] = $this->pegawai->get_duk('rank_pangkat');
        } else {
            $data['list'] = $this->pegawai->get_duk();
        }

        $data['urut']  = $urut;

        $this->load->plugin('phpexcel');

        $this->load->view('laporan/xls_duk', $data);
    }

    function laporan_biodata_fungsional_xls() {
        $data = array();
        $data['daftar_pegawai'] = $this->pegawai->get_semua_pegawai();

        $this->load->plugin('phpexcel');
        $this->load->view('laporan/xls_biodata_fungsional', $data);
    }

    function laporan_skumptk_xls() {
        $data = array();
        $data['daftar_pegawai'] = $this->pegawai->get_semua_pegawai();

        $this->load->plugin('phpexcel');
        $this->load->view('laporan/xls_skumptk', $data);
    }

}
