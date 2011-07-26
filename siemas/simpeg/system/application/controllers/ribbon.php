<?php

class Ribbon extends Controller {

    function Home()
    {
        parent::Controller();
    }


    function index()
    {
        $this->load->view("ribbon");
    }


}