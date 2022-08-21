<?php
function printerError($s) {
$refuse = array("","n","o","p","q","r","s","t","u","v","w","x","y","z");
$in = str_split($s);
$size = count($in);
$err = 0;

foreach($in as $letter){
    if(array_search($letter, $refuse)){
        $err = $err + 1;
    }
}
return $err."/".intval($size);
}


echo printerError("aaabbbbhaijjjm")."<p>";
echo printerError("aaaxbbbbyyhwawiwjjjwwm")."<p>";
echo printerError("aaaaaaaaaaaaaaaabbbbbbbbbbbbbbbbbbmmmmmmmmmmmmmmmmmmmxyz")."<p>";
echo printerError("kkkwwwaaaaaaaaaaaaaabbbbbbbbbbbbbbbbbbmmmmmmmmmmmmmmmmmmmxyz")."<p>";
echo printerError("kkkwwwaaaaaaaaaaaaaabbbbbbbbbbbbbbbbbbmmmmmmmmmmmmmmmmmmmxyzuuuuu")."<p>";
