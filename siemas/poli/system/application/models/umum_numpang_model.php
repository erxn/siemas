<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Umum_numpang_model extends Model{
    function Umum_numpang_model(){
        parent::Model();
    }

    function index(){

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
}
?>
