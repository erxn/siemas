<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Laporan_model extends Model{
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
     function layanan(){
         $data=array();
        $kueri=$this->db->query("SELECT * FROM layanan WHERE keterangan='GIGI'" );
        if($kueri->num_rows()>0){
            foreach ($kueri->result_array()as $row){
                $data[]=$row;
            }
        }
        $kueri->free_result();
        return $data;
    }

    function penyakit_bulanan_umum($bulan,$tahun,$umur_min, $umur_max,$nama_penyakit){
 
        $kueri=$this->db->query("SELECT
                                    (SELECT count( * )
                                        FROM (

                                        SELECT p. * , extract( YEAR
                                        FROM from_days( datediff( curdate( ) , tanggal_lahir ) ) ) AS umur
                                        FROM pasien AS p
                                        JOIN remed_poli_umum AS r
                                        USING ( id_pasien )
                                        JOIN penyakit_remed_umum AS pe
                                        USING ( id_remed_umum )
                                        JOIN penyakit AS pt
                                        USING ( id_penyakit )
                                        WHERE MONTH(r.tanggal_kunjungan_umum)='$bulan' AND YEAR(r.tanggal_kunjungan_umum)='$tahun'
                                        AND pt.nama_penyakit = '$nama_penyakit'
                                        ) AS u
                                        WHERE u.umur
                                        BETWEEN $umur_min AND $umur_max
                                        AND u.jk_pasien = 'Perempuan') as p
                
                                        (SELECT count( * )
                                        FROM (

                                        SELECT p. * , extract( YEAR
                                        FROM from_days( datediff( curdate( ) , tanggal_lahir ) ) ) AS umur
                                        FROM pasien AS p
                                        JOIN remed_poli_umum AS r
                                        USING ( id_pasien )
                                        JOIN penyakit_remed_umum AS pe
                                        USING ( id_remed_umum )
                                        JOIN penyakit AS pt
                                        USING ( id_penyakit )
                                        WHEREMONTH(r.tanggal_kunjungan_umum)='$bulan' AND YEAR(r.tanggal_kunjungan_umum)='$tahun'
                                       AND pt.nama_penyakit = '$nama_penyakit'
                                        ) AS u
                                        WHERE u.umur
                                        BETWEEN $umur_min AND $umur_max
                                        AND u.jk_pasien = 'Laki-laki') as l)

                " );
        if($kueri->num_rows()>0){
            $data = $kueri->row_array();
        }
        $kueri->free_result();
        return $data;
            
    }

    function penyakit(){
        $data=array();
        $kueri=$this->db->query("SELECT *
                                FROM penyakit
                                WHERE poli_id_poli =2
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
