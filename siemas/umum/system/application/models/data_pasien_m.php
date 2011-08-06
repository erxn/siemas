<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Data_pasien_m extends Model{
    function Data_pasien_m(){
        parent::Model();
    }

    function get_data_pasien(){
        $data=array();
        $kueri=$this->db->query("SELECT * FROM pasien JOIN kk" );

        if($kueri->num_rows()>0){
            foreach ($kueri->result_array()as $row){
                $data[]=$row;
            }
        }
        $kueri->free_result();
        return $data;

    }
}

?>
