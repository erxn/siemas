<?php
class Statistik extends Controller{
    function Statistik(){
        parent::Controller();
    }

    function index(){
        $this->load->view('statistik_view');
    }
}