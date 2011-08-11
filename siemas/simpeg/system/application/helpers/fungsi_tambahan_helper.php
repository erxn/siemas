<?php

function format_tanggal_database($tanggal) {

    if (strtotime($tanggal) == false)
        return "";
    else
        return date("Y-m-d", strtotime($tanggal));
}

function format_tanggal_tampilan($tanggal) {

    if (strtotime($tanggal) == false)
        return "";
    else
        return date("d-m-Y", strtotime($tanggal));
}

function tampilan_tanggal_indonesia($tanggal, $pake_hari = true, $pake_tahun = true) {

    // input: yy-mm-dd

    $namaHari = array("Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu", "Minggu");
    $namaBulan = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");

    $d = strtotime($tanggal);

    $date_string = date('j', $d) . " " . $namaBulan[(date('n', $d)-1)];

    if($pake_hari)
        $date_string = $namaHari[date('N', $d)] . ", " . $date_string;

    if($pake_tahun)
        $date_string = $date_string . " " . date("Y", $d);

    return $date_string;
    
}

function format_rupiah($uang) {

    return number_format($uang);

}