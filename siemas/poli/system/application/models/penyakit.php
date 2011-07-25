<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


Class Penyakit extends Model{
    function Penyakit(){
        pareng::Model();
    }
    
    function get_semua_penyakit_model($id='id_penyakit'){
        $data=array();
        $kueri=$this->db->query("SELECT * FROM penyakit ORDER BY $id");
        if($kueri->num_rows()>0){
            foreach ($kueri->result_array() as $row){
                $data[]=$row;
            }
        }
        $kueri->free_result();
        return $data;
    }
        
    function get_penyakit_model($val, $col='kode_penyakit'){                //buat ngambil penyakit berdasarkan kode penyakit yg dipilih
    $data="";
   $kueri=$this->db->query("SELECT * FROM penyakit WHERE $col=$val");
   if($kueri->num_rows()>0){
       $data=$kueri->row();
   }
    $kueri->free_result();
    return $data;
    }
    
    
    }
?>
