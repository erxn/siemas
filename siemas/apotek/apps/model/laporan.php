<?php
class Model_laporan {

    public function __construct(){
        $this->db = new library_db();
    }

    public function harian($tanggal){
        $obat = $this->db->results("SELECT * FROM obat");
        $n=1;
        $data = NULL;
        $cek = $this->db->results("SELECT * FROM history_harian_obat WHERE tanggal='$tanggal'");
        if($cek){
        foreach ($obat as $list){
            $data[$n]['id_obat'] = $list->id_obat ;
            $data[$n]['nbk_obat'] = $list->nbk_obat ;
            $data[$n]['satuan_obat'] = $list->satuan_obat ;
            $data[$n]['stok_awal'] = $this->db->find_var("SELECT stok_awal FROM history_harian_obat
                    WHERE id_obat = '$list->id_obat' AND tanggal='$tanggal'");
            //Ambil nilai obat yang terpakai dari resep
            $resep1 = $this->db->results("SELECT isi_resep.jumlah_terpakai as jumlah FROM resep JOIN isi_resep USING(id_resep)
                    WHERE isi_resep.id_obat = '$list->id_obat' AND resep.waktu LIKE '$tanggal%'");
            if($resep1){
                $resep = 0;
                foreach($resep1 as $resep2){
                    $resep += $resep2->jumlah;
                }
            } else {$resep = 0;}
            //Ambil nilai obat yang terpakai dari pemakaian intern dan kegiatan lainnya
            $intern1 = $this->db->results("SELECT isi_obat_intern.jumlah_terpakai as jumlah FROM pemakaian_intern JOIN isi_obat_intern USING(id_pemakainan_intern)
                    WHERE isi_obat_intern.id_obat = '$list->id_obat' AND pemakaian_intern.waktu LIKE '$tanggal%'");
            if($intern1){
                $intern = 0;
                foreach($intern1 as $intern2){
                    $intern += $intern2->jumlah;
                }
            } else {$intern = 0;}
            /*(Ambil nilai obat yang terpakai dari kegiatan luar
            $luar1 = $this->db->results("SELECT isi_obat_intern.jumlah_terpakai as jumlah FROM pemakaian_intern JOIN isi_obat_intern USING(id_pemakainan_intern)
                    WHERE isi_obat_intern.id_obat = '$list->id_obat' AND pemakaian_intern.waktu LIKE '$tanggal%'");
            if($luar1){
                $luar = 0;
                foreach($luar1 as $luar2){
                    $luar += $luar2->jumlah;
                }
            } else {$luar = 0;}*/

            if($resep || $intern){
                $pemakaian = $resep + $intern;}
                else {
                    $pemakaian = 0;
                }
            $data[$n]['terpakai'] = $pemakaian;
            $data[$n]['stok_akhir'] = $data[$n]['stok_awal'] - $pemakaian;
            $n++;
        }
        }
        return $data;
    }

    public function bulanan($TB){
        $obat = $this->db->results("SELECT * FROM obat");
        $n=1;
        $st=2;
        $data = NULL;
        $tanggalF = $TB.'-'.'0'.$st;
        $cek = $this->db->results("SELECT * FROM history_harian_obat WHERE tanggal='$tanggalF'");
        if($cek){
        foreach ($obat as $list){
            $data[$n]['id_obat'] = $list->id_obat ;
            $data[$n]['nbk_obat'] = $list->nbk_obat ;
            $data[$n]['satuan_obat'] = $list->satuan_obat ;
            $data[$n]['stok_awal'] = $this->db->find_var("SELECT stok_awal FROM history_harian_obat
                    WHERE id_obat = '$list->id_obat' AND tanggal='$tanggalF'");
            $tambah1 = $this->db->results("SELECT penambahan_obat as tambah FROM history_obat
                    WHERE id_obat = '$list->id_obat' AND tanggal LIKE '$TB%'");
            if($tambah1){
                    $tambah = 0;
                    foreach($tambah1 as $tambah2){
                        $tambah += $tambah2->tambah;
                    }
                    $data[$n]['tambah'] = $tambah;
                }
            $st=1;
            for($i=1;$i<=31;$i++){
                $obatn='obat'.$i;
                if($st<10){
                    $tanggal = $TB.'-'.'0'.$st;}
                    else{$tanggal = $TB.'-'.$st;}
                //Ambil nilai obat yang terpakai dari resep
                $resep1 = $this->db->results("SELECT isi_resep.jumlah_terpakai as jumlah FROM resep JOIN isi_resep USING(id_resep)
                        WHERE isi_resep.id_obat = '$list->id_obat' AND resep.waktu LIKE '$tanggal%'");
                if($resep1){
                    $resep = 0;
                    foreach($resep1 as $resep2){
                        $resep += $resep2->jumlah;
                    }
                } else {$resep = 0;}
                //Ambil nilai obat yang terpakai dari pemakaian intern dan kegiatan lainnya
                $intern1 = $this->db->results("SELECT isi_obat_intern.jumlah_terpakai as jumlah FROM pemakaian_intern JOIN isi_obat_intern USING(id_pemakainan_intern)
                        WHERE isi_obat_intern.id_obat = '$list->id_obat' AND pemakaian_intern.waktu LIKE '$tanggal%'");
                if($intern1){
                    $intern = 0;
                    foreach($intern1 as $intern2){
                        $intern += $intern2->jumlah;
                    }
                } else {$intern = 0;}

                if($resep || $intern){
                    $pemakaian = $resep + $intern;
                    $data[$n][$obatn] = $pemakaian;
                }
                $st++;
            
            }
            $n++;
        }
        }
        return $data;
    }

}
?>
