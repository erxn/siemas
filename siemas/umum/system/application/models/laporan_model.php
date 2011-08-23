<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Laporan_model extends Models{
    function Laporan_model(){
        parent::Model();
    }

    function index(){

    }

    function harian_tbc(){
        $data=array();
        $tgl = date("Y-m-d", strtotime("$tahun-$bulan-$tanggal"));
        $kueri=$this->db->query("SELECT p.*, t.*
                                    FROM pasien as p
                                    JOIN remed_poli_umum as r USING(id_pasien)
                                    JOIN tbc as t USING(id_tbc)
                                    WHERE r.tanggal_kunjungan_umum=$tgl
                                    GROUP BY r.id_remed_umum
                                    " );

        if($kueri->num_rows()>0){
            foreach ($kueri->result_array()as $row){
                $data[]=$row;
            }
        }
        $kueri->free_result();
        return $data;

    }

    function harian_diare(){
        $data=array();
        $tgl = date("Y-m-d", strtotime("$tahun-$bulan-$tanggal"));
        $kueri=$this->db->query("SELECT p.*, t.*
                                    FROM pasien as p
                                    JOIN remed_poli_umum as r USING(id_pasien)
                                    JOIN diare as t USING(id_diare)
                                    WHERE r.tanggal_kunjungan_umum=$tgl
                                    GROUP BY r.id_remed_umum
                                    " );

        if($kueri->num_rows()>0){
            foreach ($kueri->result_array()as $row){
                $data[]=$row;
            }
        }
        $kueri->free_result();
        return $data;

    }

    function harian_ispa(){
        $data=array();
        $tgl = date("Y-m-d", strtotime("$tahun-$bulan-$tanggal"));
        $kueri=$this->db->query("SELECT p.*, t.*
                                    FROM pasien as p
                                    JOIN remed_poli_umum as r USING(id_pasien)
                                    JOIN ispa as t USING(id_ispa)
                                    WHERE r.tanggal_kunjungan_umum=$tgl
                                    GROUP BY r.id_remed_umum
                                    " );

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
