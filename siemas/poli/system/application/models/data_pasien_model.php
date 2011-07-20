<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

Class Data_pasien_model extends Model{
    
    function Data_pasien_model (){
        Parent::Model;
    }
    
    function ambil_data_pasien(){
        
          $data_pasien=$this->db->query("SELECT id_pasien, tanggal_pendaftaran, KK_id_KK, nama_pasien, jk, tanggal_lahir, status_pelayanan, no_kartu_layana FROM siemas");
          return $data_pasien;
          }
          
   function delete_data_pasien($id_pasien){
       $delete_pasien=$this->db->query(" * FROM siemas");
       
   }
   
   function update_data_pasien($id_pasien){
        
   }
}


?>
