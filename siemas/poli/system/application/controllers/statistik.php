<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Statistik extends Controller{
    function Statistik(){
        parent::Controller();
    }

    function index(){
        $this->load->view('statistik_view');
    }

    function grafik_bulanan_penyakit(){
        $this->load->view('grafik_bulanan_penyakit_view');
    }

    function grafik_bulanan_wilayah(){
        $this->load->view('grafik_bulanan_wilayah_view');
    }

    function grafik_tahunan_penyakit(){
        $this->load->view('grafik_tahunan_penyakit_view');
    }

    function grafik_tahunan_wilayah(){
        $this->load->view('grafik_tahunan_wilayah_view');
    }
}

?>
