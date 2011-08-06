<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

Class Laporan_model extends Model{

    function Laporan_model(){
        parent::Model();
    }
     function lap_hp(){                       
        $data=array();
        $kueri=$this->db->query("SELECT * FROM  kk
                        JOIN pasien
                        ON kk.id_KK=pasien.id_KK
                        JOIN remed_poli_gigi
                        ON pasien.id_pasien=remed_poli_gigi.id_pasien
                        JOIN penyakit_remed_gigi
                        ON remed_poli_gigi.id_remed_gigi=penyakit_remed_gigi.id_remed_gigi
                        JOIN penyakit
                        ON penyakit_remed_gigi.id_penyakit=penyakit.id_penyakit
                                " );

        if($kueri->num_rows()>0){
            foreach ($kueri->result_array()as $row){
                $data[]=$row;
            }
        }
        $kueri->free_result();
        return $data;
    }

function lap_hp_excell(){                      

        $data=array();
        $kueri=$this->db->query("SELECT * FROM  kk
                        JOIN pasien
                        ON kk.id_KK=pasien.id_KK
                        JOIN remed_poli_gigi
                        ON pasien.id_pasien=remed_poli_gigi.id_pasien
                        JOIN penyakit_remed_gigi
                        ON remed_poli_gigi.id_remed_gigi=penyakit_remed_gigi.id_remed_gigi
                        JOIN penyakit
                        ON penyakit_remed_gigi.id_penyakit=penyakit.id_penyakit" );

        if($kueri->num_rows()>0){
            foreach ($kueri->result_array()as $row){
                $data[]=$row;
            }
        }
        $kueri->free_result();
        return $data;
    }




     function lap_ht(){
        $data=array();
        $kueri=$this->db->query("SELECT * FROM  kk
                        JOIN pasien
                        ON kk.id_KK=pasien.id_KK
                        JOIN remed_poli_gigi
                        ON pasien.id_pasien=remed_poli_gigi.id_pasien
                        JOIN remed_gigi_layanan
                        ON remed_poli_gigi.id_remed_gigi=remed_gigi_layanan.id_remed_gigi
                        JOIN layanan
                        ON remed_gigi_layanan.id_layanan=layanan.id_layanan
                                " );

        if($kueri->num_rows()>0){
            foreach ($kueri->result_array()as $row){
                $data[]=$row;
            }
        }
        $kueri->free_result();
        return $data;
    }

function lap_ht_excell(){

        $data=array();
        $kueri=$this->db->query("SELECT * FROM  kk
                        JOIN pasien
                        ON kk.id_KK=pasien.id_KK
                        JOIN remed_poli_gigi
                        ON pasien.id_pasien=remed_poli_gigi.id_pasien
                        JOIN remed_gigi_layanan
                        ON remed_poli_gigi.id_remed_gigi=remed_gigi_layanan.id_remed_gigi
                        JOIN layanan
                        ON remed_gigi_layanan.id_layanan=layanan.id_layanan" );

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
