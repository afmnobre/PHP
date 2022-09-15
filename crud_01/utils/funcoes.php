<?php
function DataMostrar($data){
    $data_cortar = explode("-",$data);
    return $DataMostrar = $data_cortar[2]."/".$data_cortar[1]."/".$data_cortar[0];
}

function DataGravar($data){
    $data_cortar = explode("/",$data);
    return $DataGravar = $data_cortar[2]."-".$data_cortar[1]."-".$data_cortar[0];
}
