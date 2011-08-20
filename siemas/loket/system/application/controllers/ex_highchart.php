<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


Class Ex_highchart extends Controller{
    function Ex_highchart(){
        parent::Controller();
    }


    function index(){
        $this->load->view('ex_highchart');
    }
}
?>
