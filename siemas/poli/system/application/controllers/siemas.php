<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

Class Siemas extends Controller {
    function Siemas(){
        parent::Controller();
    }
    
    function index(){
        $this->load->model('m_data_pasien','',TRUE);
        $data['data_pasien']=$this->m_data_pasien->ambil_data_pasien();
        $this->load->view('v_data_pasien',$data);
        
    }
    
}

?>
