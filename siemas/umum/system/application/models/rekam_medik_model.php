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

    

    function get_remed_pasien_umum($id_pasien){               //buat nampilin tabel remed pasien yg KIA
        $data=array();
        $q=$this->db->query  ("SELECT * FROM
             pasien
                JOIN remed_poli_umum USING (id_pasien)
                JOIN penyakit_remed_umum
                                USING ( id_remed_umum )
                                JOIN penyakit
                                USING ( id_penyakit )
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

    function data_pasien_remed($id_pasien){                               //buat nampilin data pasien di database di tampilan remed
         $data=array();
        $q=$this->db->query("SELECT pasien.*,kk.*,extract(YEAR FROM from_days(datediff(curdate(), pasien.tanggal_lahir))) AS umur FROM pasien JOIN kk USING (id_kk) WHERE pasien.id_pasien=$id_pasien" );

        if($q->num_rows()>0){
            foreach ($q->result_array()as $row){
                $data[]=$row;
            }
        }
        $q->free_result();
        return $data;
    }

    function lab($id_pasien){

        $data=array();
        $q=$this->db->query("SELECT *
                                FROM remed_umum_lab as a USING(id_pemeriksaan_lab)
                                JOIN remed_poli_umum as b USING(id_remed_umum)
                                WHERE b.id_pasien=$id_pasien" );

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
        $q=$this->db->query  ("SELECT * FROM layanan WHERE keterangan='GIGI'");
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
        $q=$this->db->query  ("SELECT * FROM penyakit WHERE id_poli=2");
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
 
//    function insert_layanan($data2){
//        $insert=$this->db->insert('remed_gigi_layanan',$data2);
//
//        if($insert){
//            return $this->db->insert_id();
//        }else{
//            return 0;
//        }
//        }



        function insert_penyakit($data3){
        $insert=$this->db->insert('penyakit_remed_umum',$data3);

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

   
    function remed_poli_umum_tbc($id_kunjungan){
            $data=array();
        $q=$this->db->query  ("SELECT *
FROM pasien
JOIN kunjungan ON pasien.id_pasien = kunjungan.id_pasien
JOIN remed_poli_umum ON pasien.id_pasien = remed_poli_umum.id_pasien
JOIN tbc ON remed_poli_umum.id_remed_umum = tbc.id_remed_umum
WHERE kunjungan.id_kunjungan =$id_kunjungan");
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

    function remed_poli_umum_ispa($id_kunjungan){
            $data=array();
        $q=$this->db->query  ("SELECT *
FROM pasien
JOIN kunjungan ON pasien.id_pasien = kunjungan.id_pasien
JOIN remed_poli_umum ON pasien.id_pasien = remed_poli_umum.id_pasien
JOIN ispa ON remed_poli_umum.id_remed_umum = ispa.id_remed_umum
WHERE kunjungan.id_kunjungan =$id_kunjungan");
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

    

    function remed_poli_umum_diare($id_kunjungan){
            $data=array();
        $q=$this->db->query  ("SELECT *
FROM pasien
JOIN kunjungan ON pasien.id_pasien = kunjungan.id_pasien
JOIN remed_poli_umum ON pasien.id_pasien = remed_poli_umum.id_pasien
JOIN diare ON remed_poli_umum.id_remed_umum = diare.id_remed_umum
WHERE kunjungan.id_kunjungan =$id_kunjungan");
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

    function insert_umum($umum){          //buat masukin data diagnosa dokterr
      $insert= $this->db->insert('remed_poli_umum',$umum);
      if($insert){
          return $this->db->insert_id();
      }else{
          return 0;
      }
    }

     function insert_tbc($tbc){          //buat masukin data diagnosa dokterr
      $insert= $this->db->insert('tbc',$tbc);
      if($insert){
          return $this->db->insert_id();
      }else{
          return 0;
      }
    }

     function insert_diare($diare){          //buat masukin data diagnosa dokterr
      $insert= $this->db->insert('diare',$diare);
      if($insert){
          return $this->db->insert_id();
      }else{
          return 0;
      }
    }

     function insert_ispa($ispa){          //buat masukin data diagnosa dokterr
      $insert= $this->db->insert('ispa',$ispa);
      if($insert){
          return $this->db->insert_id();
      }else{
          return 0;
      }
    }

function get_remed_pop_gigi($id_pasien,$tgl){               //buat nampilin data remed pasien per id,,buat di input pelayanan,,,biar si dokter langsung input...yg tabel itu lho
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
            WHERE remed_poli_gigi.id_pasien=$id_pasien AND remed_poli_gigi.tanggal_kunjungan_gigi='$tgl'");
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

     function get_remed_pop_umum($id_pasien,$tgl){               //buat nampilin tabel remed pasien yg KIA
        $data=array();
        $q=$this->db->query  ("SELECT * FROM
             pasien
                JOIN remed_poli_umum USING (id_pasien)
            WHERE remed_poli_umum.id_pasien=$id_pasien AND remed_poli_umum.tanggal_kunjungan_umum='$tgl'");
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
