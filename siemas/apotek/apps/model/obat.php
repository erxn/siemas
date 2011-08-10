<?php
class Model_obat {

    public function __construct(){

        $this->db = new library_db();
    }

    public function ambil(){

        $result = $this->db->results("SELECT * FROM obat");

        return $result;
    }

    public function ambil_nama_obat(){

        $result = $this->db->results("SELECT nbk_obat, id_obat FROM obat");

        return $result;
    }

    public function jumlah(){

        $result = $this->db->get_var("SELECT COUNT(*) FROM obat");

        return $result;
    }

    public function history_bt($BT){

        $result = $this->db->results("SELECT DISTINCT(no_sbkk),tanggal FROM history_obat WHERE tanggal LIKE '$BT%' ORDER BY tanggal",'array');

        return $result;
    }

    public function history_resep($tanggal){

        $result = $this->db->results("SELECT DISTINCT(id_pasien),id_antrian FROM resep WHERE waktu LIKE '$tanggal%'");
        $data = $this->history_resep_nama($result, $tanggal);
        return $data;
    }

     public function history_resep_nama($antrian, $tanggal){
        $n='1';
        foreach ($antrian as $antrian){
            $data[$n]['id_pasien'] = $antrian->id_pasien ;
            $data[$n]['id_antrian'] = $antrian->id_antrian ;
            $data[$n]['tanggal'] = $tanggal;
            $data[$n]['nama_pasien'] = $this->db->find_var("SELECT nama_pasien FROM pasien WHERE id_pasien = '$antrian->id_pasien'");
        
            $n++;
        }
        return $data;
    }


    public function ambil_narkotik(){

        $result = $this->db->results("SELECT * FROM obat WHERE narkotik='1'");

        return $result;
    }

    public function tambah_isi_resep($id_pasien, $tanggal, $id_obat, $jumlah){
        $id_resep = $this->db->find_var("SELECT id_resep FROM resep WHERE id_pasien='$id_pasien' AND waktu LIKE '$tanggal%'");
        $n='1';
        foreach ($id_obat as $result) {
                if($id_obat[$n]){
                $data2['id_obat'] = $id_obat[$n];
                $data2['id_resep'] = $id_resep;
                $data2['jumlah_terpakai'] = $jumlah[$n];
                $stok = $this->db->find_var("SELECT stok_obat FROM obat WHERE id_obat='$id_obat[$n]'");
                $total = $stok - $jumlah[$n];
                $data['stok_obat'] = $total;
                $data3['id_obat'] = $id_obat[$n];
                $query = $this->db->insert('isi_resep',$data2);}
                $query = $this->db->update('obat', $data, $data3);

			$n++;
		}
    }

    public function tambah_isi_pemakaian($intern, $tanggal, $id_obat, $jumlah, $keterangan){
        $id_resep = $this->db->find_var("SELECT id_resep FROM resep WHERE id_pasien='$id_pasien' AND waktu LIKE '$tanggal%'");
        $n='1';
        foreach ($id_obat as $result) {
                if($id_obat[$n]){
                $data2['id_obat'] = $id_obat[$n];
                $data2['id_resep'] = $id_resep;
                $data2['jumlah_terpakai'] = $jumlah[$n];
                $stok = $this->db->find_var("SELECT stok_obat FROM obat WHERE id_obat='$id_obat[$n]'");
                $total = $stok - $jumlah[$n];
                $data['stok_obat'] = $total;
                $data3['id_obat'] = $id_obat[$n];
                $query = $this->db->insert('isi_resep',$data2);}
                $query = $this->db->update('obat', $data, $data3);

			$n++;
		}
    }
    
    public function resep_pasien($tanggal,$id_antrian){

        $id_kunjungan = $this->db->find_var("SELECT id_kunjungan FROM antrian WHERE id_antrian='$id_antrian' AND tanggal_kunjungan='$tanggal'");
        $id_pasien = $this->db->find_var("SELECT id_pasien FROM kunjungan WHERE id_kunjungan='$id_kunjungan'");
        $waktu = $tanggal.' '.date('H:i:s');
        $data['waktu']=$waktu;
        $data['id_pasien']=$id_pasien;
        $query = $this->db->insert('resep',$data);
        return $id_pasien;
        
    }

    public function tambah($sbkk,$isi,$kadaluarsa,$batch){

        $date=date('Y-m-d');
        $result = $this->db->results("SELECT * FROM obat");
        $n='1';
       foreach ($result as $result) {
			if( isset($isi[$n])){
                            $total=$result->stok_obat+$isi[$n];
                        }
                            else{
                                $total = $result->stok_obat;
                            }
                        $data['id_history_obat'] = NULL;
                        $data['no_sbkk'] = $sbkk;
                        $data['tanggal'] =$date;
                        $data['stok_awal_obat'] = $result->stok_obat;
                        $data['total_obat'] = $total;
                        $data['penambahan_obat'] = $total - $result->stok_obat;
                        $data2['stok_obat'] = $total;
                        $data3['id_obat'] = $result->id_obat;
                        if( isset($kadaluarsa[$n])){
                        $data['tanggal_kadaluarsa'] = $kadaluarsa[$n];}
                        if( isset($batch[$n])){
                        $data['no_batch'] = $batch[$n];}
                        $data['id_obat'] = $result->id_obat;
                        if($data['penambahan_obat']){
                        $query = $this->db->insert('history_obat',$data);
                        $query = $this->db->update('obat', $data2, $data3);
                        }
			$n++;
		}
    }
}
