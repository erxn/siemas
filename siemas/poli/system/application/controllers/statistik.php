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
}

?>
