<?php

function isIsogram($string) {
    $word = str_split(strtolower($string));
    $compare = array_count_values($word);
    foreach($compare as $letter){
        $uniq = array_unique($compare);
    }
    $final=1;
    foreach($uniq as $result){
        $num = $result;
        $final =+ $final * $num;
    }
    if($final == 1){
        return true;
    }
    else{
        return false;
    }
}

if(isIsogram("Dermatoglyphics")){ echo "true<br>"; }else{ echo "false<br>"; };
if(isIsogram("isogram")){ echo "true<br>"; }else{ echo "false<br>"; };
if(isIsogram("aba")){ echo "true<br>"; }else{ echo "false<br>"; };
if(isIsogram("moOse")){ echo "true<br>"; }else{ echo "false<br>"; };
if(isIsogram("isIsogram")){ echo "true<br>"; }else{ echo "false<br>"; };
if(isIsogram("")){ echo "true<br>"; }else{ echo "false<br>"; };