<?php

class M_kk extends Model {

    function  __construct() {
        parent::Model();
    }

    function insert_data_kk($data) {
        $insert = $this->db->insert('kk',$data);

        if($insert) {
            return $this->db->insert_id(); //fungsi dari CInya
        }
        else {
            return 0;
        }
    }

    function lihat_profil_kk($id_kk) {
        $data = array();
        $q = $this->db->query("SELECT kk.*,pasien.* FROM kk LEFT JOIN pasien USING (id_kk) WHERE kk.id_kk= $id_kk");

        if($q->num_rows() > 0) {
            foreach ($q->result_array() as $row) {
                $data[] = $row;
            }
        }

        $q->free_result();
        return $data;
    }

    function cari_kk($nama_kk,$alamat_kk) {

        $data = array();
        if($nama_kk && $alamat_kk) {
            $q = $this->db->query("SELECT *
                                 FROM kk
                                 WHERE kk.nama_kk = '$nama_kk' AND (kk.alamat_kk LIKE '%$alamat_kk%'
                                                                  OR kk.kecamatan_kk LIKE '%$alamat_kk%'
                                                                  OR kk.kelurahan_kk LIKE '%$alamat_kk%'
                                                                  OR kk.kota_kab_kk LIKE '%$alamat_kk%')
                    "
            );

            if($q->num_rows() > 0) {
                foreach ($q->result_array() as $row) {
                    $data[] = $row;
                }
            }
            $q->free_result();
            return $data;
        }

    }

        function cari_pasien_by_kk($id_kk) {
            $data = array();
            $q = $this->db->query("SELECT nama_pasien FROM pasien WHERE id_kk= $id_kk");

            if($q->num_rows() > 0) {
                foreach ($q->result_array() as $row) {
                    $data[] = $row;
                }
            }

            $q->free_result();
            return $data;
        }



}