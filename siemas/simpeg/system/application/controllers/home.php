<?php

class Home extends Controller {

    function Home()
    {
        parent::Controller();
    }


    function index()
    {
        $this->load->view("home/home");
    }

    function hari_ini()
    {
        $this->load->view("home/hari_ini");
    }

    function kalender($bulan = 0, $tahun = 0)
    {
        $this->load->view("home/home_kalender");
    }

}

