<?php
    Class Pasien extends Model{
        function __constructor(){
            parent::Model();
        }

        function ambil_data_pasien(){
            $pasien = $this->db->query("SELECT * FROM ");
            return $pasien;
        }
    }
?>