<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Kunjungan extends Controller{
    function Kunjungan(){
        parent::Controller();
        $this->load->model('m_kunjungan','kunj');
    }

function index(){
    
}


function kunjungan_hari_ini(){
       $data = array();

        if($this->input->post('submit')) {
            $tgl = $this->input->post('tgl_kunjungan');
        } else {
            $tgl = date("d-m-Y");
        }

        $data['tgl'] = $tgl;

        // harian

        $tgl = date("Y-m-d", strtotime($tgl));

        $kunjungan=$this->kunj->get_harian($tgl);
        $data['kunjungan']=$kunjungan;
        $this->load->view('kunjungan_view',$data);
    }

    function kunjungan_askes(){
       $data = array();

        if($this->input->post('submit')) {
            $tgl = $this->input->post('tgl_kunjungan');
        } else {
            $tgl = date("d-m-Y");
        }

        $data['tgl'] = $tgl;

        // harian

        $tgl = date("Y-m-d", strtotime($tgl));

        $kunj_askes=$this->kunj->get_status_harian($tgl,'Askes');
        $data['kunj_askes']=$kunj_askes;
        $this->load->view('kunjungan_askes',$data);
    }

    function kunjungan_jamkesmas(){
       $data = array();

        if($this->input->post('submit')) {
            $tgl = $this->input->post('tgl_kunjungan');
        } else {
            $tgl = date("d-m-Y");
        }

        $data['tgl'] = $tgl;

        // harian

        $tgl = date("Y-m-d", strtotime($tgl));

        $kunj_jamkesmas=$this->kunj->get_status_harian($tgl,'Jamkesmas');
        $data['kunj_jamkesmas']=$kunj_jamkesmas;
        $this->load->view('kunjungan_jamkesmas',$data);
    }

    function kunjungan_umum(){
       $data = array();

        if($this->input->post('submit')) {
            $tgl = $this->input->post('tgl_kunjungan');
        } else {
            $tgl = date("d-m-Y");
        }

        $data['tgl'] = $tgl;

        // harian

        $tgl = date("Y-m-d", strtotime($tgl));

        $kunj_umum=$this->kunj->get_status_harian($tgl,'Umum');
        $data['kunj_umum']=$kunj_umum;
        $this->load->view('kunjungan_umum',$data);
    }
}

?>
