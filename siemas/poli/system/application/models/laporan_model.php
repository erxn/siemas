<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

Class Laporan_model extends Model{

    function Laporan_model(){
        parent::Model();
    }

    function layanan_bulanan($tanggal, $bulan, $tahun){
         $data=array();

         $tgl = date("Y-m-d", strtotime("$tahun-$bulan-$tanggal"));

        $kueri=$this->db->query("SELECT COUNT(l.id_layanan) as jumlah, l.id_layanan
                                 FROM remed_poli_gigi r
                                 JOIN remed_gigi_layanan l USING (id_remed_gigi)
                                 WHERE r.tanggal_kunjungan_gigi = '$tgl'
                                 GROUP BY l.id_layanan" );
        if($kueri->num_rows()>0){
            foreach ($kueri->result_array()as $row){
                $data[]=$row;
            }
        }
        $kueri->free_result();

        // isi yg kosong

        $min = 2;
        $max = 20;

        $column1 = array();
        foreach ($data as $row) $column1[] = $row['id_layanan'];

        $column2 = array();
        for ($i = $min; $i <= $max; $i++) $column2[] = $i;

  	$emptys = array_merge(array_diff($column1, $column2), array_diff($column2, $column1));
	$empty_arr = array();

	foreach ($emptys as $e) {
            $empty_arr[] = array('id_layanan' => $e, 'jumlah' => 0);
	}

	$res = array_merge($data, $empty_arr);
	sort($res);

	return $res;
        
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

    function penyakit_harian($tanggal, $bulan, $tahun){
         $data=array();

         $tgl = date("Y-m-d", strtotime("$tahun-$bulan-$tanggal"));

        $kueri=$this->db->query("SELECT COUNT(l.id_penyakit) as jumlah, l.id_penyakit, 
                extract(YEAR FROM from_days(datediff(curdate(), tanggal_lahir))) BETWEEN 1 and 4, p.jk_pasien,
                                 FROM pasien p
                                 JOIN   remed_poli_gigi r USING (id_pasien)
                                 JOIN penyakit_remed_gigi l USING (id_remed_gigi)
                                 WHERE r.tanggal_kunjungan_gigi = '$tgl'
                                 GROUP BY l.id_penyakit" );
        if($kueri->num_rows()>0){
            foreach ($kueri->result_array()as $row){
                $data[]=$row;
            }
        }
        $kueri->free_result();

        // isi yg kosong

        $min = 2;
        $max = 20;

        $column1 = array();
        foreach ($data as $row) $column1[] = $row['id_penyakit'];

        $column2 = array();
        for ($i = $min; $i <= $max; $i++) $column2[] = $i;

  	$emptys = array_merge(array_diff($column1, $column2), array_diff($column2, $column1));
	$empty_arr = array();

	foreach ($emptys as $e) {
            $empty_arr[] = array('id_penyakit' => $e, 'jumlah' => 0);
	}

	$res = array_merge($data, $empty_arr);
	sort($res);

	return $res;

    }

    function get_data_laporan_bulanan_penyakit($tanggal, $bulan, $tahun,  $umur_min, $umur_max,$id_penyakit) {

        $tgl = date("Y-m-d", strtotime("$tahun-$bulan-$tanggal"));
        $kueri = $this->db->query("SELECT
                   (SELECT COUNT(*)
                    FROM
                      (
                       SELECT pasien.*, extract(YEAR FROM from_days(datediff(curdate(), tanggal_lahir))) AS umur,
                              IF(tanggal_pendaftaran <= '$tgl', 1, 0) AS baru
                       FROM remed_poli_gigi r
                       JOIN penyakit_remed_gigi p USING (id_remed_gigi)
                       JOIN pasien USING (id_pasien)
                       WHERE r.tanggal_kunjungan_gigi= '$tgl' AND p.id_penyakit = $id_penyakit
                      ) AS p
                    WHERE p.umur BETWEEN $umur_min AND $umur_max
                      AND p.jk_pasien = 'Perempuan'
                      AND p.baru = 1
                    ) AS a,
                   (SELECT COUNT(*)
                    FROM
                      (
                       SELECT pasien.*, extract(YEAR FROM from_days(datediff(curdate(), tanggal_lahir))) AS umur,
                              IF(tanggal_pendaftaran <= '$tgl', 1, 0) AS baru
                       FROM remed_poli_gigi r
                       JOIN penyakit_remed_gigi p USING (id_remed_gigi)
                       JOIN pasien USING (id_pasien)
                       WHERE r.tanggal_kunjungan_gigi= '$tgl' AND p.id_penyakit = $id_penyakit
                      ) AS p
                    WHERE p.umur BETWEEN $umur_min AND $umur_max
                      AND p.jk_pasien = 'Perempuan'
                      AND p.baru = 0
                    ) AS b,
                   (SELECT COUNT(*)
                    FROM
                      (
                       SELECT pasien.*, extract(YEAR FROM from_days(datediff(curdate(), tanggal_lahir))) AS umur,
                              IF(tanggal_pendaftaran <= '$tgl', 1, 0) AS baru
                       FROM remed_poli_gigi r
                       JOIN penyakit_remed_gigi p USING (id_remed_gigi)
                       JOIN pasien USING (id_pasien)
                       WHERE r.tanggal_kunjungan_gigi= '$tgl' AND p.id_penyakit =$id_penyakit
                      ) AS p
                    WHERE p.umur BETWEEN $umur_min AND $umur_max
                      AND p.jk_pasien = 'Laki-laki'
                      AND p.baru = 1
                    ) AS c,
                   (SELECT COUNT(*)
                    FROM
                      (
                       SELECT pasien.*, extract(YEAR FROM from_days(datediff(curdate(), tanggal_lahir))) AS umur,
                              IF(tanggal_pendaftaran <= '$tgl', 1, 0) AS baru
                       FROM remed_poli_gigi r
                       JOIN penyakit_remed_gigi p USING (id_remed_gigi)
                       JOIN pasien USING (id_pasien)
                       WHERE r.tanggal_kunjungan_gigi= '$tgl' AND p.id_penyakit = $id_penyakit
                      ) AS p
                    WHERE p.umur BETWEEN $umur_min AND $umur_max
                      AND p.jk_pasien = 'Laki-laki'
                      AND p.baru = 0
                    ) AS d");

         if($kueri->num_rows()>0){
            $data = $kueri->row_array();
        }
        $kueri->free_result();
        return $data;

    }


}
