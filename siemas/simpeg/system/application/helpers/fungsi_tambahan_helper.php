<?php

function format_tanggal_database($tanggal) {

    if(strtotime($tanggal) == false)
        return "";
    else
       return date("Y-m-d", strtotime($tanggal));

}

function format_tanggal_tampilan($tanggal) {

    if(strtotime($tanggal) == false)
        return "";
    else
        return date("d-m-Y", strtotime($tanggal));

}
