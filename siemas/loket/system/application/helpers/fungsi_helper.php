<?php

function ganti_format_tanggal($tanggal) {
    return date("Y-m-d", strtotime($tanggal));
}

function date2Ind($str) {
    setlocale (LC_TIME, 'id_ID');
    $date = strftime( "%A, %d %B %Y", strtotime($str));
}

function tgl_indo($tgl) {
        $tanggal = substr($tgl,8,2);
        $bulan    = getBulan(substr($tgl,5,2));
        $tahun    = substr($tgl,0,4);
        return $tanggal." ".$bulan." ".$tahun;
    }

function getBulan($bln) {
        switch ($bln) {
            case 1:
                return "Januari";
                break;
            case 2:
                return "Februari";
                break;
            case 3:
                return "Maret";
                break;
            case 4:
                return "April";
                break;
            case 5:
                return "Mei";
                break;
            case 6:
                return "Juni";
                break;
            case 7:
                return "Juli";
                break;
            case 8:
                return "Agustus";
                break;
            case 9:
                return "September";
                break;
            case 10:
                return "Oktober";
                break;
            case 11:
                return "November";
                break;
            case 12:
                return "Desember";
                break;
        }
}

function hitUmur($tgllahir) {
        $tgl = explode("-", $tgllahir);
       // memecah $tgllahir yang tadinya YYYY-MM-DD menjadi array
      // $tgl[0] = tahun (YYYY)
     //  $tgl[a] = bulan (MM)
    // $tgl[2] = hari (DD)

        $umur = date("Y") - $tgl[0];  //ini untuk ngitung umurnya

        if(($tgl[1] > date("m")) || ($tgl[1] == date("m") && date("d") < $tgl[2])) //ngecek apakah tgl lahir dan bulannya belum lewat?
        {

                $umur -= 1;
        }
        return $umur;
}

