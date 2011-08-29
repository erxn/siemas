<?php
$nama_file = "report.xls";

function xlsBOF(){
    echo pack("ssssss", 0x204, 8 + $L, $Row, $Col, 0x0, $L);
    echo $Value;
    return;
}

header();
?>
