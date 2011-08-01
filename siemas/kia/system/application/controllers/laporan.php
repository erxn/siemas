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


}
?>
