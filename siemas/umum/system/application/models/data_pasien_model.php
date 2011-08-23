<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

Class Data_pasien_model extends Model{
    
    function Data_pasien_model (){
        parent::Model();
    }

    function cari_pasien($kode_pasien,$nama_pasien,$umur_pasien,$alamat="") {

        $where = "WHERE 1 ";

        if($nama_pasien != "") $where .= " AND nama_pasien LIKE '%$nama_pasien%'";
        if($umur_pasien != "") $where .= " AND extract(YEAR FROM from_days(datediff(curdate(), tanggal_lahir))) BETWEEN $umur_pasien-1 and $umur_pasien+1";
        if($alamat != "") $where .= "AND alamat_kk LIKE '%$alamat_pasien%'";

        $data = array();
        if($kode_pasien != '') {
            $q = $this->db->query("SELECT pasien.*, kk.*, extract(YEAR FROM from_days(datediff(curdate(), tanggal_lahir))) AS umur
                                 FROM pasien JOIN kk USING(id_kk)
                                 WHERE kode_pasien = '$kode_pasien'");
            if($q->num_rows() > 0) {
                foreach ($q->result_array() as $row) {
                    $data[] = $row;
                }
            }
            $q->free_result();
            return $data;

        }
        else {

            $q = $this->db->query("SELECT pasien.*, kk.*, extract(YEAR FROM from_days(datediff(curdate(), tanggal_lahir))) AS umur
                                 FROM pasien JOIN kk USING(id_kk) $where");


            if($q->num_rows() > 0) {
                foreach ($q->result_array() as $row) {
                    $data[] = $row;
                }
            }

            $q->free_result();
            return $data;
        }

    }
    function get_semua_data_pasien(){                        //buat ngeluarin semua data pasiennnn        
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
    
    
    
    function get_data_pasien_model($val, $col='id_pasien'){                           //buat ngambil  data pasien per id          //ngambil data pasien berdasarkan id yang dicari0
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
   
   function ambil_pasien_KK_model(){
       $this->db->groupby('alamat');
       $this->db->get('biodata');
   }
}


?>
