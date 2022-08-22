<?php
function accum($s) {
    $word = str_split($s);
    $cont1 = 0;
    $cont2 = 0;
    $show = 0;
    $num = 0;
    $trace = "";
    $result = "";
    $final = "";
    foreach($word as $letter){
                $cont1 ++;
                $num = $cont1;
                while($num > 0){
                    $cont2++;
                    if($cont2 == 1){
                        if($cont1 > 1){ $trace = "-";}
                        $result .= $trace.strtoupper($letter);
                    }else{
                        $result .= strtolower($letter);
                    }
                $num --;
                }
        $cont2 = 0;
    }
    $final .= $result;
    return $final; 
}

echo accum("ZpglnRxqenU")."<p>";
echo accum("NyffsGeyylB")."<p>";
echo accum("MjtkuBovqrU")."<p>";
echo accum("EvidjUnokmM")."<pr>";
