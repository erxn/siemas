<?php
class M_antrian extends Model {

    function  __construct() {
        parent::Model();
         $this->load->model('M_pasien');
          $this->load->model('M_kk');
    }

    function get_antrian_umum($poli){
         $data = array();
         $q = $this->db->query("SELECT * FROM antrian");

        if($q->num_rows() > 0) {
            foreach ($q->result_array() as $row) {
                $data[] = $row;
            }
        }

        $q->free_result();
        return $data;
    }
    }
?>
