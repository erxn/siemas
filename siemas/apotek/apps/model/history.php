<?php
class Model_history {

    public function __construct(){

        $this->db = new library_db();
    }

    public function gabung($dd,$mm,$yy){

        $result = $yy.'-'.$mm.'-'.$dd;

        return $result;
    }

    public function gabung2($mm,$yy){

        $result = $yy.'-'.$mm;

        return $result;
    }

    public function reverse($date){

        $reverse = explode("-", $date);
            $result = $reverse[2].'-'.$reverse[1].'-'.$reverse[0];

        return $result;
    }

}

