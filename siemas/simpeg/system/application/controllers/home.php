<?php

class Home extends Controller {

    function Home()
    {
        parent::Controller();
        $this->load->model("Absensi_model", "absensi");
        $this->load->model("Cuti_model", "cuti");
        $this->load->model("Kegiatan_model", "kegiatan");
        $this->load->model("Pegawai_model", "pegawai");
        $this->load->model("Event_model", "event");
    }

    function login()
    {
        $data = array();

        if($this->input->post('username')) {

            $username = $this->input->post('username');
            $password = md5($this->input->post('password'));

            // rentan SQL injection, haha
            $login = $this->db->query("SELECT * FROM admin WHERE username = '$username' AND password = '$password'")->result();

            if($login) {
                // berhasil login
                $login = $login[0]; // first row
                $id_admin = $login->id_admin;
                $last_login = $login->last_login;
                $username = $login->username;

                // update last login
                $this->db->query("UPDATE admin SET last_login = NOW() WHERE id_admin = $id_admin");

                // set session
                $this->session->set_userdata('admin_logged_in', true);
                $this->session->set_userdata('admin_last_login', $last_login);
                $this->session->set_userdata('admin_username', $username);
                $this->session->set_userdata('admin_id', $id_admin);

                redirect('');
            } else {
                $data['login_error'] = true;
                
            }

        }

        $this->load->view('ribbon_login', $data);
    }

    function logout()
    {
        $this->session->unset_userdata('admin_logged_in');
        $this->session->unset_userdata('admin_last_login');
        $this->session->unset_userdata('admin_username');
        $this->session->unset_userdata('admin_id');

        redirect('home/login');
    }

    function ganti_password()
    {
        $data = array();

        if ($this->input->post('submit')) {

            // test password lama
            $password = md5($this->input->post('password'));

            $login = $this->db->query("SELECT * FROM admin WHERE id_admin = {$this->session->userdata('admin_id')} AND password = '$password'")->result();
            if($login) {

                // update
                $new_password = md5($this->input->post('new_password'));
                $new_username = $this->input->post('new_username');

                $this->db->query("UPDATE admin SET username = '$new_username', password = '$new_password' WHERE id_admin = {$this->session->userdata('admin_id')}");

                $data['saved'] = true;

            } else {
                $data['login_error'] = true;
            }

        }

        $u = $this->db->query("SELECT username FROM admin WHERE id_admin = {$this->session->userdata('admin_id')}")->result();
        $data['username'] = $u[0]->username;

        $this->load->view('home/ganti_password', $data);
    }


    function index()
    {
        $this->load->view("home/home");
    }

    function hari_ini($tahun = 0, $bulan = 0, $tanggal = 0)
    {
        $data = array();

        if ($bulan == 0 || $tahun == 0 || $tanggal == 0) {
            $data['bulan'] = intval(date("n"));
            $data['tahun'] = intval(date("Y"));
            $data['tanggal'] = intval(date("d"));
        } else {
            $data['bulan'] = $bulan;
            $data['tahun'] = $tahun;
            $data['tanggal'] = $tanggal;
        }

        $data['pegawai_absen'] = $this->absensi->get_pegawai_tidak_hadir($data['tahun'], $data['bulan'], $data['tanggal']);
        $data['pegawai_cuti']  = $this->cuti->get_cuti_by_tanggal($data['tahun'], $data['bulan'], $data['tanggal']);
        $data['pegawai_kegiatan']  = $this->kegiatan->get_kegiatan_by_tanggal($data['tahun'], $data['bulan'], $data['tanggal']);

        $this->load->view("home/hari_ini", $data);
    }

    function kalender($tahun = 0, $bulan = 0)
    {
        if ($bulan == 0 || $tahun == 0) {
            $data['bulan'] = intval(date("n"));
            $data['tahun'] = intval(date("Y"));
        } else {
            $data['bulan'] = $bulan;
            $data['tahun'] = $tahun;
        }

        $data['libur_pkm'] = $this->absensi->get_libur_pkm($data['tahun'], $data['bulan']);
        $data['libur_bp']  = $this->absensi->get_libur_bp($data['tahun'], $data['bulan']);

        $data['kegiatan']  = $this->kegiatan->get_kegiatan_by_bulan($data['tahun'], $data['bulan']);
        $data['cuti']      = $this->cuti->get_cuti_by_bulan($data['tahun'], $data['bulan']);
        $data['kenaikan']  = $this->pegawai->get_kenaikan_gaji($data['tahun'], $data['bulan']);

        $data['tanggal_libur_pkm_all'] = $this->absensi->get_libur_pkm_all($data['tahun'], $data['bulan']);
        $data['tanggal_libur_bp_all']  = $this->absensi->get_libur_bp_all($data['tahun'], $data['bulan']);

        $this->load->view("home/home_kalender", $data);
    }

}

