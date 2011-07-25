<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

Class Data_pasien_model extends Model{
    
    function Data_pasien_model (){
        Parent::Model;
    }
    
    function get_semua_data_pasien($id='id_pasien'){                        //buat ngeluarin semua data pasiennnn        
        $data=array();
        $kueri=$this->db->query("SELECT tanggal_pendaftaran, KK_id_KK, nama_pasien, jk, tanggal_lahir, status_pelayanan, no_kartu_layana FROM siemas ORDER BY $id" );
        
        if($kueri->num_rows()>0){
            foreach ($kueri->result_array()as $row){
                $data[]=row;
            }
        }
        $kueri->free_result();
        return $data;
    }
    
    
    
    function get_data_pasien_model($val, $col='id_pasien'){                                     //ngambil data pasien berdasarkan id yang dicari0
        $data="";
          $data_pasien=$this->db->query("SELECT tanggal_pendaftaran, KK_id_KK, nama_pasien, jk, tanggal_lahir, status_pelayanan, no_kartu_layana FROM siemas WHERE $col=$val");
          
          if($data_pasien->num_rows()>0){
              $data=$data_pasien->row();
          }
           $data_pasien->free_result();
           return $data;
          }
          
   function delete_data_pasien_model($id_pasien){
       $delete_pasien=$this->db->query(" SELECT * FROM siemas");
       
   }
   
   function update_data_pasien_model($id_pasien){
        
   }
}


?>
