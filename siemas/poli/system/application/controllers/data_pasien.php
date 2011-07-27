<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


Class Data_pasien extends Controller{
    function Data_pasien(){
        parent::Controller();
//        $this->load->model('data_pasien_model');        //buat klo mau ngmbil fungsi di data_pasien_model
    }
    
    function index(){
//        $data['data_pasien_model']=$this->data_pasien_model->get_semua_data_pasien($id);
        $this->load->view('data_pasien_view');
    }
    
}

?>