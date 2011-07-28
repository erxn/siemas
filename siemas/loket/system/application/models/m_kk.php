<?php

class M_kk extends Model {

    function  __construct() {
        parent::Model();
    }

    function insert_data_kk($data){
        $insert = $this->db->insert('kk',$data);

        if($insert){
            return $this->db->insert_id(); //fungsi dari CInya
        }
        else {
            return 0;
        }
    }

    function lihat_profil_kk($id_kk){
        $data = array();
        $q = $this->db->query("SELECT * FROM kk WHERE id_kk= $id_kk");

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