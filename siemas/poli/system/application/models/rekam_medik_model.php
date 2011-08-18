<?php
Class Rekam_medik_model extends Model{
    
    function Rekam_medik_model(){
        parent::Model();
    }
    
    function get_remed_pasien_gigi($id_pasien){               //buat nampilin data remed pasien per id,,buat di input pelayanan,,,biar si dokter langsung input...yg tabel itu lho
        $data=array();
        $q=$this->db->query  ("SELECT * FROM layanan
            JOIN remed_gigi_layanan
                ON  layanan.id_layanan = remed_gigi_layanan.id_layanan
            JOIN remed_poli_gigi
                ON remed_gigi_layanan.id_remed_gigi=remed_poli_gigi.id_remed_gigi
            JOIN penyakit_remed_gigi
                ON remed_poli_gigi.id_remed_gigi=penyakit_remed_gigi.id_remed_gigi
            JOIN penyakit
                ON penyakit_remed_gigi.id_penyakit=penyakit.id_penyakit
            WHERE remed_poli_gigi.id_pasien=$id_pasien ");
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


    function get_kunj_pasien($id_pasien){
        $data=array();
        $q=$this->db->query  ("SELECT * FROM pasien
            JOIN remed_poli_gigi
            ON pasien.id_pasien = remed_poli_gigi.id_pasien
            JOIN kunjungan
                ON  remed_poli_gigi.id_kunjungan=kunjungan.id_kunjungan
            WHERE remed_poli_gigi.id_pasien=$id_pasien");
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

    function get_remed_pasien_kia($id_pasien){               //buat nampilin tabel remed pasien yg KIA
        $data=array();
        $q=$this->db->query  ("SELECT * FROM layanan
            JOIN layanan_remed_kia
                ON  layanan.id_layanan = layanan_remed_kia.id_layanan
            JOIN remed_poli_kia
                ON layanan_remed_kia.id_remed_kia=remed_poli_kia.id_remed_kia
            JOIN penyakit_remed_kia
                ON remed_poli_kia.id_remed_kia=penyakit_remed_kia.id_remed_kia
            JOIN penyakit
                ON penyakit_remed_kia.id_penyakit=penyakit.id_penyakit
             WHERE remed_poli_kia.id_pasien=$id_pasien");
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


    function get_remed_pasien_umum($id_pasien){               //buat nampilin tabel remed pasien yg KIA
        $data=array();
        $q=$this->db->query  ("SELECT * FROM 
             remed_poli_umum
            JOIN penyakit_remed_umum
                ON remed_poli_umum.id_remed_umum=penyakit_remed_umum.id_remed_umum
            JOIN penyakit
                ON penyakit_remed_umum.id_penyakit=penyakit.id_penyakit
            WHERE remed_poli_umum.id_pasien=$id_pasien");
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

    
     function get_layanan(){
      $data=array();
        $q=$this->db->query  ("SELECT * FROM layanan");
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
     
     function get_penyakit(){
      $data=array();
        $q=$this->db->query  ("SELECT * FROM penyakit");
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
 function insert_diagnosis($data1){          //buat masukin data diagnosa dokterr
      $insert= $this->db->insert('remed_poli_gigi',$data1);
      if($insert){
          return $this->db->insert_id();
      }else{
          return 0;
      }
    }
    
    function insert_layanan($data2){
        $insert=$this->db->insert('remed_gigi_layanan',$data2);

        if($insert){
            return $this->db->insert_id();
        }else{
            return 0;
        }
        }



        function insert_penyakit($data3){
        $insert=$this->db->insert('penyakit_remed_gigi',$data3);

        if($insert){
            return $this->db->insert_id();
        }else{
            return 0;
        }
        }
    
    function data_diagnosis(){
        $this->load->db->view('data_diagnosis_dokter_view');
    }

    function get_id_pasien_by_kunjungan($id_kunjungan) {                                    //ngambil id_pasien berdasarkan kunjungan
        $data=array();
        $q=$this->db->query  ("SELECT id_pasien FROM kunjungan where id_kunjungan=$id_kunjungan");
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

    function get_tgl_kunj($tgl_kunjungan){               //buat nampilin data remed pasien per id,,buat di input pelayanan,,,biar si dokter langsung input...yg tabel itu lho
        $data=array();
        $q=$this->db->query  ("SELECT * FROM layanan
            JOIN remed_gigi_layanan
                ON  layanan.id_layanan = remed_gigi_layanan.id_layanan
            JOIN remed_poli_gigi
                ON remed_gigi_layanan.id_remed_gigi=remed_poli_gigi.id_remed_gigi
            JOIN penyakit_remed_gigi
                ON remed_poli_gigi.id_remed_gigi=penyakit_remed_gigi.id_remed_gigi
            JOIN penyakit
                ON penyakit_remed_gigi.id_penyakit=penyakit.id_penyakit
            WHERE remed_poli_gigi.tanggal_kunjungan_gigi=$tgl_kunjungan");
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

    function remed_poli_lain_pasien($id_pasien){
            $data=array();
        $q=$this->db->query  ("SELECT * FROM pasien JOIN kk WHERE id_pasien=$id_pasien");
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

    function nyari_tanggal($tanggal_kunjungan_gigi){

         $data=array();
        $q=$this->db->query  ("SELECT * FROM remed_poli_gigi WHERE tanggal_kunjungan_gigi='$tanggal_kunjungan_gigi'");
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

    
function nyari_tanggal_u($tanggal_kunjungan_umum){

         $data=array();
        $q=$this->db->query  ("SELECT * FROM remed_poli_umum WHERE tanggal_kunjungan_umum='$tanggal_kunjungan_umum'");
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

    function nyari_tanggal_k($tanggal_kunjungan_kia){

         $data=array();
        $q=$this->db->query  ("SELECT * FROM remed_poli_kia WHERE tanggal_kunjungan_kia='$tanggal_kunjungan_kia'");
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


    function remed_poli_umum_tbc($id_pasien){
            $data=array();
        $q=$this->db->query  ("SELECT * FROM remed_poli_umum JOIN tbc WHERE id_pasien=$id_pasien");
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

    function remed_poli_umum_ispa($id_pasien){
            $data=array();
        $q=$this->db->query  ("SELECT * FROM remed_poli_umum JOIN ispa WHERE id_pasien=$id_pasien");
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

    function remed_poli_umum_campak($id_pasien){
            $data=array();
        $q=$this->db->query  ("SELECT * FROM remed_poli_umum JOIN campak WHERE id_pasien=$id_pasien");
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

    function remed_poli_umum_diare($id_pasien){
            $data=array();
        $q=$this->db->query  ("SELECT * FROM remed_poli_umum JOIN diare WHERE id_pasien=$id_pasien");
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
