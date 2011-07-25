<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
Class Rekam_medik_model extends Model{
    
    function Rekam_medik_model(){
        parent::Model();
    }
    
    function get_remed_pasien_gigi_model($id){               //buat nampilin data pasien per id,,buat di input pelayanan,,,biar si dokter langsung input
        $data="";
        $kueri=$this->db->query("FROM remed_poli_gigi
JOIN remed_poli_gigi_has_layanan
  ON remed_poli_gigi.id_remed_gigi
   = remed_poli_gigi_has_layanan.remed_poli_gigi_id_remed_gigi
JOIN layanan
  ON remed_poli_gigi_has_layanan.layanan_id_layanan
   = layanan.id_layanan
WHERE layanan.id_layanan=$id ");
        
        if($kueri->num_rows()>0){
            $data=$kueri->row();
        }
        $kueeri->free_result();
        return $data;
    }
    
     function get_remed_pasien_kia_model($id){               //buat nampilin data pasien per id,,buat di input pelayanan,,,biar si dokter langsung input
        $data="";
        $kueri=$this->db->query("FROM remed_poli_kia
JOIN remed_poli_kia_has_layanan
  ON remed_poli_kia.id_remed_gigi
   = remed_poli_kia_has_layanan.remed_poli_kia_id_remed_kia
JOIN layanan
  ON remed_poli_kia_has_layanan.layanan_id_layanan
   = layanan.id_layanan
WHERE layanan.id_layanan=$id ");
        
        if($kueri->num_rows()>0){
            $data=$kueri->row();
        }
        $kueeri->free_result();
        return $data;
    }
    
    function get_remed_pasien_umum_model($id){               //buat nampilin data pasien per id,,buat di input pelayanan,,,biar si dokter langsung input
        $data="";
        $kueri=$this->db->query("FROM remed_poli_umum
JOIN remed_poli_umum_has_layanan
  ON remed_poli_umum.id_remed_gigi
   = remed_poli_umum_has_layanan.remed_poli_gigi_id_remed_umum
JOIN layanan
  ON remed_poli_umum_has_layanan.layanan_id_layanan
   = layanan.id_layanan
WHERE layanan.id_layanan=$id ");
        
        if($kueri->num_rows()>0){
            $data=$kueri->row();
        }
        $kueeri->free_result();
        return $data;
    }
    
    function masuk_remed_pasien_model($data){                           //dokter inputin data pelayanan yg dibutuhkan
        
        $kueri=$this->db->insert('remed_poli_gigi',$data);
    }
    
    function update_remed_pasien_model($id_pasien, $data){
        $this->db->where('id_pasien', $id_pasien);
        return $this->db->update('pasien', $data);
    }
    
    function delete_remed_pasien_model($no_kunjungan){
        return $this->db->delete('remed_poli_gigi', $no_kunjungan);
    }
    
}

?>
