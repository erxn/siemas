<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Laporan extends Controller{
function Laporan(){
    parent::Controller();
}

function index(){
    $this->load->view('laporan_view');
}

function lap_h_diare(){
    $this->load->view('lap_h_diare_v');
}

function lap_h_ispa(){
    $this->load->view('lap_h_ispa_v');
}
function lap_h_tbc(){
    $this->load->view('lap_h_tbc_v');
}
function lap_b_diare(){
    $this->load->view('lap_b_diare_v');
}
function lap_b_ispa(){
    $this->load->view('lap_h_ispa_v');
}
}
?>
