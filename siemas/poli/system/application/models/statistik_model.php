<?php


Class Statistik_model extends Model {

    function Statistik_model() {
        parent::Model();
    }

    function bulanan_penyakit($bulan, $tahun, $id_penyakit) {
        $data=array();
        $q=$this->db->query("SELECT COUNT(g.id_pasien) as jumlah
                             FROM penyakit AS p
                             JOIN penyakit_remed_gigi AS r USING(id_penyakit)
                             JOIN remed_poli_gigi AS g USING(id_remed_gigi)
                             WHERE p.kode_penyakit=$id_penyakit AND MONTH(g.tanggal_kunjungan_gigi)='$bulan' AND YEAR(g.tanggal_kunjungan_gigi)='$tahun'");

        $data = $q->row_array();
        
        $q->free_result();
        return $data['jumlah'];
    }

    function tahunan_penyakit($bulan, $tahun, $id_penyakit) {
        $data=array();
        $q=$this->db->query("SELECT COUNT(g.id_pasien) as jumlah
                             FROM penyakit AS p
                             JOIN penyakit_remed_gigi AS r USING(id_penyakit)
                             JOIN remed_poli_gigi AS g USING(id_remed_gigi)
                             WHERE p.kode_penyakit=$id_penyakit AND  MONTH(g.tanggal_kunjungan_gigi) = '$bulan' AND YEAR(g.tanggal_kunjungan_gigi)='$tahun'");

        $data = $q->row_array();

        $q->free_result();
        return $data;
    }

    function get_id_by_penyakit($penyakit){
         $data="";
          $data_pasien=$this->db->query("
                                SELECT id_penyakit
                                FROM penyakit
                                WHERE nama_penyakit LIKE '%$penyakit%'");

          if($data_pasien->num_rows()>0){
              $data=$data_pasien->row();
          }
           $data_pasien->free_result();
           return $data;
    }

}
?>