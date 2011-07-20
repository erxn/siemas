<?php
class Model_obat {

    public function __construct(){

        $this->db = new library_db();
    }

    public function ambil(){

        $result = $this->db->results("SELECT * FROM obat");
    }
}
