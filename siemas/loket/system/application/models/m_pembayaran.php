<?php

class M_pembayaran extends Model {

    function  __construct() {
        parent::Model();
    }

    function data_pembayaran($tanggal) {
        $data = array();
        $q = $this->db->query("SELECT antrian.id_antrian,antrian.status,antrian.id_kunjungan AS idkunjungan,antrian.id_poli,kunjungan.no_kunjungan,kunjungan.id_pasien,kunjungan.tanggal_kunjungan,kunjungan.total_harga,kunjungan.status_pembayaran,poli.*,pasien.*,kk.*,extract(YEAR FROM from_days(datediff(curdate(), tanggal_lahir))) AS umur
                                FROM poli
                                JOIN antrian USING (id_poli)
                                JOIN kunjungan USING (id_kunjungan)
                                JOIN pasien USING (id_pasien)
                                JOIN kk USING (id_kk)
                                WHERE kunjungan.tanggal_kunjungan = '$tanggal'
                                AND antrian.status = 'SELESAI'");
        if($q->num_rows() > 0) {
            foreach ($q->result_array() as $row) {
                $data[] = $row;
            }
        }

        $q->free_result();
        return $data;
    }

    function get_id_by_layanan($layanan) {
        $data = array();
        $q = $this->db->query("SELECT id_layanan FROM layanan
                            WHERE nama_layanan = '$layanan'");
        if($q->num_rows() > 0) {
            foreach ($q->result_array() as $row) {
                $data[] = $row;
            }
        }

        $q->free_result();
        return $data;

    }



    function get_layanan() {
        $data = array();
        $q = $this->db->query("SELECT * FROM layanan
                            ORDER BY nama_layanan ASC");
        if($q->num_rows() > 0) {
            foreach ($q->result_array() as $row) {
                $data[] = $row;
            }
        }

        $q->free_result();
        return $data;
    }


    function get_rincian($id_kunjungan) {
        $data = array();
        $q = $this->db->query("SELECT kunjungan_has_layanan.*,kunjungan.*,layanan.nama_layanan
                           FROM layanan
                           JOIN kunjungan_has_layanan USING(id_layanan)
                           JOIN kunjungan USING (id_kunjungan)
                           WHERE id_kunjungan = $id_kunjungan");

        if($q->num_rows() > 0) {
            foreach ($q->result_array() as $row) {
                $data[] = $row;
            }
        }

        $q->free_result();

        return $data;
    }

    function total_harga($id_kunjungan) {
        $data = array();
        $q = $this->db->query("SELECT SUM(harga_layanan) as total_harga FROM kunjungan_has_layanan WHERE id_kunjungan = $id_kunjungan");

        if($q->num_rows() > 0) {
            foreach ($q->result_array() as $row) {
                $data[] = $row;
            }
        }

        $q->free_result();
        return $data;
    }

    function tambah_layanan($data) {
        $insert = $this->db->insert('kunjungan_has_layanan',$data);
    }

    function insert_total($data,$id_kunjungan) {
        $this->db->where('id_kunjungan', $id_kunjungan);
        $this->db->update('kunjungan', $data);
    }

}