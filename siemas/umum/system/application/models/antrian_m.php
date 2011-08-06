<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Antrian_m extends Model{
    function Antrian_m(){
        parent::Model();
    }

    function tabel_antrian($id_poli){
          $data=array();
        $kueri=$this->db->query("SELECT antrian.*, kunjungan.*, pasien.nama_pasien, pasien.jk_pasien
                                FROM antrian
                                JOIN kunjungan USING (id_kunjungan)
                                JOIN pasien USING (id_pasien)
                                WHERE antrian.id_poli = $id_poli" );

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
