<?php
class Model_obat {

    public function __construct(){

        $this->db = new library_db();
    }

    public function ambil(){

        $result = $this->db->results("SELECT * FROM obat");

        return $result;
    }

    public function jumlah(){

        $result = $this->db->get_var("SELECT COUNT(*) FROM obat");

        return $result;
    }

    public function ambil_narkotik(){

        $result = $this->db->results("SELECT * FROM obat WHERE narkotik='1'");

        return $result;
    }

    public function tambah($sbkk,$isi,$kadaluarsa,$batch){

        $date=date('Y-m-d');
        $result = $this->db->results("SELECT * FROM obat");
        $n=1;
       foreach ($result as $result) {
			if( isset($isi[$n])){
                            $total=$result->stok_obat+$isi[$n];
                        }
                            else{
                                $total = $result->stok_obat;
                            }
                        $data->no_sbkk = $sbkk;
                        $data->tanggal =$date;
                        $data->stok_awal_obat = $result->stok_obat;
                        $data->total_obat = $total;
                        $data->penambahan_obat = $total - $result->stok_obat;
                        $data->tanggal_kadaluarsa = $kadaluarsa;
                        $data->no_batch = $batch;
                        $data->id_obat = $result->id_obat;
                        $query = $this->db->insert('history_obat',$data);
			$n++;
		}
    }
}
