<?php

class Absensi extends Controller {

    function Absensi() {
        parent::Controller();
        $this->load->model('Absensi_model', 'absensi');
        $this->load->model('Pegawai_model', 'pegawai');
    }

    function index() {
        $this->isi_absensi();
    }

    function pilih_tanggal_absensi($tahun = 0, $bulan = 0) {

        if ($bulan == 0 || $tahun == 0) {
            $data['bulan_ini'] = intval(date("n"));
            $data['tahun_ini'] = intval(date("Y"));
        } else {
            $data['bulan_ini'] = $bulan;
            $data['tahun_ini'] = $tahun;
        }

        $data['tanggal_libur_pkm_all'] = $this->absensi->get_libur_pkm_all($data['tahun_ini'], $data['bulan_ini']);
        $data['tanggal_libur_bp_all'] = $this->absensi->get_libur_bp_all($data['tahun_ini'], $data['bulan_ini']);

        $this->load->view('form/input_absensi_lama', $data);
    }

    function isi_absensi($tahun = 0, $bulan = 0, $tanggal = 0) {

        $data = array();

        if ($bulan == 0 || $tahun == 0) {
            $data['bulan'] = intval(date("n"));
            $data['tahun'] = intval(date("Y"));
            $data['tanggal'] = intval(date("d"));
        } else {
            $data['bulan'] = $bulan;
            $data['tahun'] = $tahun;
            $data['tanggal'] = $tanggal;
        }

        if ($this->input->post('submit')) {

            $id_pegawai = $this->input->post('id_pegawai');
            $id_absensi = $this->input->post('id_absensi');
            $hadir = $this->input->post('hadir');
            $jam_hadir = $this->input->post('jam_hadir');

            foreach ($id_pegawai as $id) {
                $this->absensi->insert_absensi(array(
                    'id_absensi' => $id_absensi[$id],
                    'tanggal' => format_tanggal_database("{$data['tanggal']}-{$data['bulan']}-{$data['tahun']}"),
                    'hadir' => isset($hadir[$id]) ? 1 : 0,
                    'jam_hadir' => ($jam_hadir[$id] == "") ? "07:30" : $jam_hadir[$id],
                    'id_pegawai' => $id_pegawai[$id]
                    )
                );
            }

            $data['saved'] = true;
        }

        $data['absensi_pkm'] = $this->absensi->get_absensi($data['tahun'], $data['bulan'], $data['tanggal'], 0);
        $data['absensi_bp'] = $this->absensi->get_absensi($data['tahun'], $data['bulan'], $data['tanggal'], 1);

        $this->load->view('form/input_absensi', $data);
    }

    function jam_kerja() {

        if ($this->input->post('submit')) {

            $hari = array('senin', 'selasa', 'rabu', 'kamis', 'jumat', 'sabtu', 'minggu');

            $this->db->truncate('jadwal_puskesmas');

            foreach ($hari as $h) {

                // pkm
                $this->absensi->set_jadwal(array(
                    'hari' => $h,
                    'jam_mulai' => $this->input->post($h . '_mulai'),
                    'jam_selesai' => $this->input->post($h . '_selesai'),
                    'bp_pemda' => 0,
                    'buka' => $this->input->post($h . '_buka')
                ));

                // bp
                $this->absensi->set_jadwal(array(
                    'hari' => $h,
                    'jam_mulai' => $this->input->post($h . '_mulai_bp'),
                    'jam_selesai' => $this->input->post($h . '_selesai_bp'),
                    'bp_pemda' => 1,
                    'buka' => $this->input->post($h . '_buka_bp')
                ));
            }
        }

        $data['jadwal_pkm'] = $this->absensi->get_jadwal_pkm();
        $data['jadwal_bp'] = $this->absensi->get_jadwal_bp();

        $this->load->view('form/input_jadwal_pkm', $data);
    }

    function input_libur($tahun = 0, $bulan = 0) {

        if ($this->input->post('submit')) {
            $data = array(
                'tanggal' => $this->input->post('tanggal'),
                'keterangan' => $this->input->post('keterangan'),
                'bp_pemda' => $this->input->post('bp_pemda')
            );

            $this->absensi->insert_libur($data);
        }

        $data = array();

        if ($bulan == 0 || $tahun == 0) {
            $data['bulan_ini'] = intval(date("n"));
            $data['tahun_ini'] = intval(date("Y"));
        } else {
            $data['bulan_ini'] = $bulan;
            $data['tahun_ini'] = $tahun;
        }

        $data['libur_pkm'] = $this->absensi->get_libur_pkm($data['tahun_ini'], $data['bulan_ini']);
        $data['libur_bp'] = $this->absensi->get_libur_bp($data['tahun_ini'], $data['bulan_ini']);

        $data['tanggal_libur_pkm_all'] = $this->absensi->get_libur_pkm_all($data['tahun_ini'], $data['bulan_ini']);
        $data['tanggal_libur_bp_all'] = $this->absensi->get_libur_bp_all($data['tahun_ini'], $data['bulan_ini']);

        $this->load->view('form/input_libur', $data);
    }

    function hapus_libur($id, $tahun, $bulan) {

        $this->absensi->hapus_libur($id);
        redirect("absensi/input_libur/$tahun/$bulan");
    }

    function rekap_absensi($bulan = 0, $tahun = 0) {
        $data = array();

        if($tahun == 0 || $bulan == 0) {
            $data['tahun'] = intval(date("Y"));
            $data['bulan'] = intval(date("n"));
        } else {
            $data['tahun'] = $tahun;
            $data['bulan'] = $bulan;
        }

        $jumlah_hari_satu_bulan = cal_days_in_month(CAL_GREGORIAN, $data['bulan'], $data['tahun']);
        
        $data_pegawai_pkm = $this->pegawai->get_semua_pegawai_pkm();
        $absensi_pkm = array();
        foreach ($data_pegawai_pkm as $p) {

            $row = array('id_pegawai' => $p['id_pegawai'], 'nama' => $p['nama']);
            
            $absensi = $this->absensi->get_absensi_bulanan_by_pegawai($p['id_pegawai'], $data['bulan'], $data['tahun']);
            for ($i = 1; $i <= $jumlah_hari_satu_bulan; $i++) {
                $row['hadir_' . $i] = $absensi[$i-1]['hadir'];
            }

            $absensi_pkm[] = $row;

            unset($row);
        }

        $data_pegawai_bp = $this->pegawai->get_semua_pegawai_bpp();
        $absensi_bp = array();
        foreach ($data_pegawai_bp as $p) {

            $row = array('id_pegawai' => $p['id_pegawai'], 'nama' => $p['nama']);

            $absensi = $this->absensi->get_absensi_bulanan_by_pegawai($p['id_pegawai'], $data['bulan'], $data['tahun']);
            for ($i = 1; $i <= $jumlah_hari_satu_bulan; $i++) {
                $row['hadir_' . $i] = $absensi[$i-1]['hadir'];
            }

            $absensi_bp[] = $row;

        }


        $data['absensi_pkm'] = $absensi_pkm;
        $data['absensi_bp']  = $absensi_bp;

        $data['jumlah_hari_bulan_ini'] = $jumlah_hari_satu_bulan;

        $data['tanggal_libur_pkm'] = $this->absensi->get_libur_pkm_all($data['tahun'], $data['bulan']);
        $data['tanggal_libur_bp'] = $this->absensi->get_libur_bp_all($data['tahun'], $data['bulan']);

        $data['list_tahun'] = $this->absensi->get_tahun_absensi();
        $this->load->view('laporan/rekap_absensi', $data);
    }

    function rekap_jam_efek($bulan = 0, $tahun = 0) {
        $data = array();

        if($tahun == 0 || $bulan == 0) {
            $data['tahun'] = intval(date("Y"));
            $data['bulan'] = intval(date("n"));
        } else {
            $data['tahun'] = $tahun;
            $data['bulan'] = $bulan;
        }

        $jumlah_hari_satu_bulan = cal_days_in_month(CAL_GREGORIAN, $data['bulan'], $data['tahun']);

        $data_pegawai_pkm = $this->pegawai->get_semua_pegawai_pkm();
        $jam_efek_pkm = array();
        foreach ($data_pegawai_pkm as $p) {

            $row = array('id_pegawai' => $p['id_pegawai'], 'nama' => $p['nama']);

            $absensi = $this->absensi->get_absensi_bulanan_by_pegawai($p['id_pegawai'], $data['bulan'], $data['tahun']);
            $jumlah  = 0;
            for ($i = 1; $i <= $jumlah_hari_satu_bulan; $i++) {
                if ($absensi[$i-1]['hadir'] == '1') {
                    $row['jam_efek_' . $i] = $this->absensi->get_jam_efek(date("D", strtotime("{$data['tahun']}-{$data['bulan']}-{$i}")), 0);
                } else {
                    $row['jam_efek_' . $i] = 0;
                }
                $jumlah += $row['jam_efek_' . $i];
            }

            $row['jumlah'] = $jumlah;
            $jam_efek_pkm[] = $row;

            unset($row);
        }

        $data_pegawai_bp = $this->pegawai->get_semua_pegawai_bpp();
        $jam_efek_bp = array();
        foreach ($data_pegawai_bp as $p) {

            $row = array('id_pegawai' => $p['id_pegawai'], 'nama' => $p['nama']);

            $absensi = $this->absensi->get_absensi_bulanan_by_pegawai($p['id_pegawai'], $data['bulan'], $data['tahun']);
            $jumlah  = 0;
            for ($i = 1; $i <= $jumlah_hari_satu_bulan; $i++) {
                if ($absensi[$i-1]['hadir'] == '1') {
                    $row['jam_efek_' . $i] = $this->absensi->get_jam_efek(date("D", strtotime("{$data['tahun']}-{$data['bulan']}-{$i}")), 1);
                } else {
                    $row['jam_efek_' . $i] = 0;
                }
                $jumlah += $row['jam_efek_' . $i];
            }

            $row['jumlah'] = $jumlah;
            $jam_efek_bp[] = $row;

        }

        $data['jam_efek_pkm'] = $jam_efek_pkm;
        $data['jam_efek_bp']  = $jam_efek_bp;

        $data['jumlah_hari_bulan_ini'] = $jumlah_hari_satu_bulan;

        $data['tanggal_libur_pkm'] = $this->absensi->get_libur_pkm_all($data['tahun'], $data['bulan']);
        $data['tanggal_libur_bp'] = $this->absensi->get_libur_bp_all($data['tahun'], $data['bulan']);

        $data['list_tahun'] = $this->absensi->get_tahun_absensi();
        
        $this->load->view('laporan/rekap_jam_efek', $data);
    }

}