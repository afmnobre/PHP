<h4>Complete the solution so that it splits the string into pairs of two characters. If the string contains an odd number of characters then it should replace the missing second character of the final pair with an underscore ('_').</h4>

Examples:
<pre>
* 'abc' =>  ['ab', 'c_']
* 'abcdef' => ['ab', 'cd', 'ef']
</pre>

<?php


function solution($str){
    $word = str_split($str,2);
    $final = array();
    $i=0;
    foreach($word as $celula){
        if(strlen($celula)==2){
            $final[$i] = $celula;
        }
        if(strlen($celula)==1){
            $final[$i] = $celula."_";
        }
        $i++;
    }
    return $final;
}



echo "<pre>";
print_r(solution("abcdef"));
echo "</pre>";

echo "<br>";

echo "<pre>";
print_r(solution("abcdefg"));
echo "</pre>";

echo "<br>";

echo "<pre>";
print_r(solution(""));
echo "</pre>";
