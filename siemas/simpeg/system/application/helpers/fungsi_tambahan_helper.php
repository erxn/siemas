<?php

function format_tanggal_database($tanggal) {

    return date("Y-m-d", strtotime($tanggal));

}