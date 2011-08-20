<?php
class M_antrian extends Model {

    function  __construct() {
        parent::Model();
         $this->load->model('M_pasien');
          $this->load->model('M_kk');
    }

    function get_antrian($id_poli){
         $data = array();
         $now = date("Y-m-d");
         $q = $this->db->query("SELECT pasien.nama_pasien as nama,pasien.id_pasien, extract(YEAR FROM from_days(datediff(curdate(), tanggal_lahir))) AS umur,
                            kk.alamat_kk,kk.id_kk, kk.kecamatan_kk,kelurahan_kk,kota_kab_kk, antrian.*
                            FROM antrian
                            JOIN kunjungan using (id_kunjungan)
                            JOIN pasien using (id_pasien)
                            JOIN kk using (id_kk)
                            WHERE id_poli=$id_poli
                            AND tanggal_kunjungan = '$now'
                            AND status != 'SELESAI'
                            ORDER BY id_kunjungan DESC");

        if($q->num_rows() > 0) {
            foreach ($q->result_array() as $row) {
                $data[] = $row;
            }
        }

        $q->free_result();
        return $data;
    }

    function tambah_antrian($data){
        $insert = $this->db->insert('antrian',$data);

        if($insert){
            return $this->db->insert_id(); //fungsi dari CInya
        }
        else {
            return 0;
        }
    }

    function get_id_by_poli($poli){
        
        $q = $this->db->query("SELECT id_poli FROM poli WHERE nama_poli LIKE '%$poli%'");
        $idpoli = $q->result_array();
        return $idpoli[0]['id_poli'];
    }
}

