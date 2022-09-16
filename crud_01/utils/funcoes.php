<?php
function DataMostrar($data){
    if($data <> ""){
        $data_cortar = explode("-",$data);
        return $DataMostrar = $data_cortar[2]."/".$data_cortar[1]."/".$data_cortar[0];
    }else{
        return false;
    }
}

function DataGravar($data){
    if($data <> ""){
        $data_cortar = explode("/",$data);
        return $DataGravar = $data_cortar[2]."-".$data_cortar[1]."-".$data_cortar[0];
    }else{
        return false;
    }
}
