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

function ganti_format_tanggal($tanggal) {
    return date("Y-m-d", strtotime($tanggal));
}

function ganti_format_tanggal_lagi($tanggal) {
    DATE_FORMAT($tanggal, '%d-%m-%Y');
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

  function isi_array_kosong($arr, $min, $max, $isi = 0) {

    $column1 = array();
    foreach ($arr as $row) $column1[] = $row[0];

    $column2 = array();
    for ($i = $min; $i <= $max; $i++) $column2[] = $i;

  	$emptys = array_merge(array_diff($column1, $column2), array_diff($column2, $column1));
	$empty_arr = array();

	foreach ($emptys as $e) {
	$empty_arr[] = array($e, $isi);
	}

	$res = array_merge($arr, $empty_arr);
	sort($res);

	return $res;


}
