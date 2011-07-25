<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

Class Kunjungan extends Model{
    function Kunjungan()
    {
        parent::Model;
    }
    function get_semua_kunjungan($nomor='no_kunjungan'){
            $data =array();
            $kueri = $this->db->query("SELECT * FROM kunjungan ORDER BY $nomor ");
            
            if($kueri->num_rows()>0){
                foreach ($kueri->result_array() as $row){
                    $data[]=$row;
                }
            }
            
            $kueri->free_result();
            return $data;
            
    }
    function get_kunjungan_model(&val, $col='no_kunjungan'){
        $data="";
        $kueri=$this->db->query("SELECT * FROM kunjungan WHERE $col=$val");
        if($kueri->num_rows()>0){
            $data =$kueri->row();
            }
            $kueri->free_result();
            return $data;
    }
    function insert_kunjungan_model($data){
        return $this->db->insert('kunjungan', $data);
        
    }
    
    function delete_kunjungan_model($no_kunjungan){
        $this->db->delete('kunjungan',$no_kunjungan); 
    }
    
    function update_kunjungan_model($no_kunjungan,$data){
        $this->db->where('no kunjungan', $no_kunjungan);
        return $this->db->update('kunjungan',$data);
    }
    
    function jumlah_kunjungan_model($no_kunjungan){
        $query=$this->db->query("SELECT * FROM kunjungan where id=$no_kunjungan");
        echo $query->num_rows();
    } 
}
?> 
