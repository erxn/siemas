<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


Class Data_pasien extends Controller{
    function Data_pasien(){
        parent::Controller();
    }
    
    function index(){
        $this->load->model('data_pasien_model','',TRUE);
        $data['data_pasien']=$this->data_pasien->get_semua_data_pasien($id);
        $this->load->view('data_pasien_model',$data);
    }
}

?>
