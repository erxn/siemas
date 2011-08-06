<?php
Class Rekam_medik_model extends Model{

    function Rekam_medik_model(){
        parent::Model();
    }

    function get_remed_pasien_gigi(){               //buat nampilin data remed pasien per id,,buat di input pelayanan,,,biar si dokter langsung input...yg tabel itu lho
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
                               ");
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


    function get_kunj_pasien(){
        $data=array();
        $q=$this->db->query  ("SELECT * FROM pasien
            JOIN remed_poli_gigi
            ON pasien.id_pasien = remed_poli_gigi.id_pasien
            JOIN kunjungan
             ON  remed_poli_gigi.id_kunjungan=kunjungan.id_kunjungan
             
            ");
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

    function get_remed_pasien_kia(){               //buat nampilin tabel remed pasien yg KIA
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
                               ");
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


    function get_remed_pasien_umum(){               //buat nampilin tabel remed pasien yg KIA
        $data=array();
        $q=$this->db->query  ("SELECT * FROM layanan
            JOIN remedi_umum_layanan
                ON  layanan.id_layanan = remedi_umum_layanan.id_layanan
            JOIN remed_poli_umum
                ON remedi_umum_layanan.id_remed_umum=remed_poli_umum.id_remed_umum
            JOIN penyakit_remed_umum
                ON remed_poli_umum.id_remed_umum=penyakit_remed_umum.id_remed_umum
            JOIN penyakit
                ON penyakit_remed_umum.id_penyakit=penyakit.id_penyakit

                               ");
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



    function get_ispa(){                               //buat nampilin data pasien di database di tampilan remed
         $data=array();
        $q=$this->db->query("SELECT * FROM ispa" );

        if($q->num_rows()>0){
            foreach ($q->result_array()as $row){
                $data[]=$row;
            }
        }
        $q->free_result();
        return $data;
    }

    function get_tbc(){                               //buat nampilin data pasien di database di tampilan remed
         $data=array();
        $q=$this->db->query("SELECT * FROM tbc" );

        if($q->num_rows()>0){
            foreach ($q->result_array()as $row){
                $data[]=$row;
            }
        }
        $q->free_result();
        return $data;
    }


    function get_diare(){                               //buat nampilin data pasien di database di tampilan remed
         $data=array();
        $q=$this->db->query("SELECT * FROM diare" );

        if($q->num_rows()>0){
            foreach ($q->result_array()as $row){
                $data[]=$row;
            }
        }
        $q->free_result();
        return $data;
    }
    function data_pasien_remed(){                               //buat nampilin data pasien di database di tampilan remed
         $data=array();
        $q=$this->db->query("SELECT * FROM pasien" );

        if($q->num_rows()>0){
            foreach ($q->result_array()as $row){
                $data[]=$row;
            }
        }
        $q->free_result();
        return $data;
    }

     function insert_diagnosis($umum){          //buat masukin data diagnosa dokterr
      $insert= $this->db->insert('remed_poli_umum',$umum);

      if($insert){
          return $this->db->insert_id();
      }else{
          return 0;
      }
    }

    function insert_tbc($tbc){
        $insert= $this->db->insert('tbc',$tbc);

      if($insert){
          return $this->db->insert_id();
      }else{
          return 0;
      }
    }

    function insert_ispa($ispa){
        $insert= $this->db->insert('ispa',$ispa);

      if($insert){
          return $this->db->insert_id();
      }else{
          return 0;
      }
    }
    function insert_diare($diare){
        $insert= $this->db->insert('diare',$diare);

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
    function data_diagnosis(){
        $this->load->db->view('data_diagnosis_dokter_view');
    }

    function get_id_pasien_by_kunjungan($id_kunju) {                                    //ngambil id_pasien berdasarkan kunjungan
        $data=array();
        $q=$this->db->query  ("SELECT id_pasien FROM kunjungan where id_kunjungan='$id_kunju'  ");
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
