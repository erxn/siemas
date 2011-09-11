<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Antrian_m extends Model{
    function Antrian_m(){
        parent::Model();
        
    }

    function tabel_antrian_a($id_poli){
          $data=array();
          $now=date("Y-m-d");
        $kueri=$this->db->query("SELECT antrian.*, kunjungan.*, pasien.nama_pasien, pasien.jk_pasien,extract(YEAR FROM from_days(datediff(curdate(), pasien.tanggal_lahir))) AS umur
                                FROM antrian
                                JOIN kunjungan USING (id_kunjungan)
                                JOIN pasien USING (id_pasien)
                                WHERE 
                                    antrian.id_poli = $id_poli
                                    AND antrian.status='ANTRI'
                                    AND kunjungan.tanggal_kunjungan='$now'
                                    ORDER BY  kunjungan.no_kunjungan" );

        if($kueri->num_rows()>0){
            foreach ($kueri->result_array()as $row){
                $data[]=$row;
            }
        }
        $kueri->free_result();
         return $data;
    }

    function tabel_antrian_sp($id_poli) {
        $data=array();
        $now = date("Y-m-d");
        $kueri=$this->db->query("SELECT antrian.*, kunjungan.*, pasien.nama_pasien, pasien.jk_pasien, extract(YEAR FROM from_days(datediff(curdate(), pasien.tanggal_lahir))) AS umur
                                FROM antrian
                                JOIN kunjungan USING (id_kunjungan)
                                JOIN pasien USING (id_pasien)
                                WHERE
                                    antrian.id_poli = $id_poli
                                    AND antrian.status= 'SEDANG DIPROSES'
                                    AND kunjungan.tanggal_kunjungan = '$now'
                                ORDER BY kunjungan.no_kunjungan" );

        if($kueri->num_rows()>0) {
            foreach ($kueri->result_array()as $row) {
                $data[]=$row;
            }
        }
        $kueri->free_result();
        return $data;
    }
    
    function tabel_antrian_selesai($id_poli) {
        $data=array();
        $now = date("Y-m-d");
        $kueri=$this->db->query("SELECT antrian.*, kunjungan.*, kunjungan.tanggal_kunjungan=$now, pasien.nama_pasien, pasien.jk_pasien, extract(YEAR FROM from_days(datediff(curdate(), pasien.tanggal_lahir))) AS umur
                                FROM antrian
                                JOIN kunjungan USING (id_kunjungan)
                                JOIN pasien USING (id_pasien)
                                WHERE
                                    antrian.id_poli = $id_poli
                                    AND antrian.status= 'SELESAI'
                                    AND kunjungan.tanggal_kunjungan = '$now'
                                ORDER BY kunjungan.no_kunjungan" );

        if($kueri->num_rows()>0) {
            foreach ($kueri->result_array()as $row) {
                $data[]=$row;
            }
        }
        $kueri->free_result();
        return $data;
    }

    function tabel_antrian_tunda($id_poli) {
        $data=array();
        $now = date("Y-m-d");
        $kueri=$this->db->query("SELECT antrian.*, kunjungan.*, pasien.nama_pasien, pasien.jk_pasien, extract(YEAR FROM from_days(datediff(curdate(), pasien.tanggal_lahir))) AS umur
                                FROM antrian
                                JOIN kunjungan USING (id_kunjungan)
                                JOIN pasien USING (id_pasien)
                                WHERE
                                    antrian.id_poli = $id_poli
                                    AND antrian.status= 'TUNDA'
                                    AND kunjungan.tanggal_kunjungan = '$now'
                                ORDER BY kunjungan.no_kunjungan" );

        if($kueri->num_rows()>0) {
            foreach ($kueri->result_array()as $row) {
                $data[]=$row;
            }
        }
        $kueri->free_result();
        return $data;
    }

    function tabel_antrian_terisi($id_poli) {
        $data=array();
        $now = date("Y-m-d");
        $kueri=$this->db->query("SELECT antrian.*, kunjungan.*, pasien.nama_pasien, pasien.jk_pasien, extract(YEAR FROM from_days(datediff(curdate(), pasien.tanggal_lahir))) AS umur
                                FROM antrian
                                JOIN kunjungan USING (id_kunjungan)
                                JOIN pasien USING (id_pasien)
                                WHERE
                                    antrian.id_poli = $id_poli
                                    AND antrian.status= 'TERISI'
                                    AND kunjungan.tanggal_kunjungan = '$now'
                                ORDER BY kunjungan.no_kunjungan" );

        if($kueri->num_rows()>0) {
            foreach ($kueri->result_array()as $row) {
                $data[]=$row;
            }
        }
        $kueri->free_result();
        return $data;
    }

     function ubah_status($id_antrian, $status) {
        $this->db->query("UPDATE antrian SET status = '$status' WHERE id_antrian = $id_antrian");

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


    function data_pasien_remed($id_pasien){                               //buat nampilin data pasien di database di tampilan remed
         $data=array();
        $q=$this->db->query("SELECT * FROM pasien WHERE id_pasien=$id_pasien" );

        if($q->num_rows()>0){
            foreach ($q->result_array()as $row){
                $data[]=$row;
            }
        }
        $q->free_result();
        return $data;
    }
     function penyakit($id_pasien){               //buat nampilin tabel remed pasien yg KIA
        $data=array();
        $q=$this->db->query  ("SELECT *
                                FROM remed_poli_umum
                                JOIN penyakit_remed_umum
                                USING ( id_remed_umum )
                                JOIN penyakit
                                USING ( id_penyakit )
                                WHERE remed_poli_umum.id_pasien =$id_pasien");
         if($q->num_rows() > 0)
        {
            foreach ($q->result_array() as $row)
            {
                $data[] = $row;
            }
        }

        $q->free_result();
        return $data;
    }

}


?>
