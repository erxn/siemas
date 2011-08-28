<?php

class C_antrian extends Controller {

    function C_antrian()
    {
        parent::Controller();
        $this->load->model("M_antrian");
    }
    function index(){

    }

    function antrian_umum(){
        $antrian_umum = $this->M_antrian->get_antrian(2);
        $data['antri_umum'] = $antrian_umum;
        $this->load->view('poli_umum',$data);
    }

     function antrian_gigi(){
        $antrian_gigi = $this->M_antrian->get_antrian(1);
        $data['antri_gigi'] = $antrian_gigi;
        $this->load->view('poli_gigi',$data);
    }

     function antrian_kia(){
        $antrian_kia = $this->M_antrian->get_antrian(3);
        $data['antri_kia'] = $antrian_kia;
        $this->load->view('poli_kia',$data);
    }

    function antrian_anak(){
        $antrian_anak = $this->M_antrian->get_antrian(7);
        $data['antri_anak'] = $antrian_anak;
        $this->load->view('poli_anak',$data);
    }

    function antrian_dalam(){
        $antrian_dalam = $this->M_antrian->get_antrian(8);
        $data['antri_dalam'] = $antrian_dalam;
        $this->load->view('poli_dalam',$data);
    }

    function antrian_lab(){
        $antrian_lab = $this->M_antrian->get_antrian(4);
        $data['antri_lab'] = $antrian_lab;
        $this->load->view('poli_lab',$data);
    }

    function antrian_radiologi(){
        $antrian_radio = $this->M_antrian->get_antrian(5);
        $data['antri_radio'] = $antrian_radio;
        $this->load->view('poli_radiologi',$data);
    }


}
