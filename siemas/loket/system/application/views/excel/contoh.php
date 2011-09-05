<?php
$nama_file = "report.xls";

function xlsBOF(){
    echo pack("ssssss", 0x204, 8 + $L, $Row, $Col, 0x0, $L);
    echo $Value;
    return;
}

function xlsEOF() {
    echo pack("ss",0x0A, 0x00);
    return;
}

function xlswriteNumber($Row,$Col,$Value){
    echo pack("sssss", 0x203, 14, $Row, $Col,0x0);
    echo pack("d",$Value);
    
}
header();
?>
