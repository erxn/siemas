<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

function excell($query,$title, $filename='exceloutput'){
    $file_type="vnd.ms-excel";
    $file_ending="csv";

    header("Content-Type:application/$file_type");
    header("Content-Disposition:attachment; filename=$filename.$file_ending");
    header("Pragma:no-cache");

    header("Expires:0");

    echo("$title\n");

    $fields=$query->list_fields();
    $headers='';

    foreach($fields as $field){
        $headers .=$field.",";
    }

    echo $headers."\n";

    foreach($query->result() as $row){

        $data="";
        foreach($row as $value){
            if((!isset($value))OR($value=="")){
                $value=",";
            }
            else{
                $value=str_replace('"','"',$value);
                $value="'".trim($value).",";
            }
            $data.=trim($value);
        }
        $data=str_replace(","."$","",$data);
        $data=preg_replace("/\r\n|\n\r|\n\r/", " ", $data);
        $data=trim($data);
        print "$data\n";
    }
}
?>
