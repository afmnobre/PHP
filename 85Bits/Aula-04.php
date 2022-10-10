<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');


##################################################################################################
echo "<h1>Aula 4 de PHP</h1>";
echo "<hr>";
echo "<h4>Arrays</h4>";

##################################################################################################
echo "<hr>";
echo "<h4>1. Array Simples</h4>";

echo "<strong>Exemplo:</strong><p>";

echo "PHP 5.3<br>";
echo "\$array = array(\"maria\", \"joão\", 2, 3.5);<p>";

echo "PHP 5.4<br>";
echo "\$array = [\"maria\", \"joão\", 2, 3.5];<p>";

echo "Se não informado todo indice do Array começa com 0(zero).<br>";

echo "<table border=1>";
echo "<tr><th>0</th><th>1</th><th>2</th><th>3</th></tr>";
echo "<tr><td>\"maria\"</td><td>\"joão\"</td><td>2</td><td>3.5</td></tr>";
echo "</table><p>";

echo "Mas podemos definir o indice do array manualmente.<p>";

echo "\$array = [ 1 => \"maria\", 2 => \"joão\", 3 => 2, 4 => 3.5 ];<p>";

echo "<table border=1>";
echo "<tr><th>1</th><th>2</th><th>3</th><th>4</th></tr>";
echo "<tr><td>\"maria\"</td><td>\"joão\"</td><td>2</td><td>3.5</td></tr>";
echo "</table><p>";

echo "A chave de ARRAYS não precisa ser numerica como nos exemplos abaixo.<p>";

echo "\$array = [ 1 => \"maria\", 2 => \"joão\", 'valor' => 2, null => 3.5 ];<p>";

echo "<table border=1>";
echo "<tr><th>1</th><th>2</th><th>'valor'</th><th>null</th></tr>";
echo "<tr><td>\"maria\"</td><td>\"joão\"</td><td>2</td><td>3.5</td></tr>";
echo "</table><p>";

echo "echo \$array[0];<br>";
echo "echo \$array[1];<br>";
echo "echo \$array['valor'];<br>";
echo "echo \$array[null];<br>";


##################################################################################################
echo "<hr>";
echo "<h4>1. Array Bi Dimensionais</h4>";

echo "<strong>Exemplo:</strong><p>";


echo "\$shop = [<br>";
echo "[\"camisa\", 9.25, 15],<br>";
echo "[\"short\", 19.75, 25],<br>";
echo "[\"tênis\", 89.15, 7]<br>";
echo "];<p>";

echo "<table border=1>";
echo "<tr><th>0</th><th>1</th><th>2</th></tr>";
echo "<tr>";
echo "<td>";
        echo "<table border=1>";
        echo "<tr>";
        echo "<th>";
        echo "0";
        echo "</th>";
        echo "<th>";
        echo "1";
        echo "</td>";
        echo "<th>";
        echo "2";
        echo "</th>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>";
        echo "\"camisa\"";
        echo "</td>";
        echo "<td>";
        echo "9.25";
        echo "</td>";
        echo "<td>";
        echo "15";
        echo "</td>";
        echo "</tr>";
        echo "</table>";
echo "</td>";
echo "<td>";
        echo "<table border=1>";
        echo "<tr>";
        echo "<th>";
        echo "0";
        echo "</th>";
        echo "<th>";
        echo "1";
        echo "</th>";
        echo "<th>";
        echo "2";
        echo "</th>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>";
        echo "\"short\"";
        echo "</td>";
        echo "<td>";
        echo "19.75";
        echo "</td>";
        echo "<td>";
        echo "25";
        echo "</td>";
        echo "</tr>";
        echo "</table>";
echo "</td>";
echo "<td>";
        echo "<table border=1>";
        echo "<tr>";
        echo "<th>";
        echo "0";
        echo "</th>";
        echo "<th>";
        echo "1";
        echo "</th>";
        echo "<th>";
        echo "2";
        echo "</th>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>";
        echo "\"tênis\"";
        echo "</td>";
        echo "<td>";
        echo "89.15";
        echo "</td>";
        echo "<td>";
        echo "7";
        echo "</td>";
        echo "</tr>";
        echo "</table>";
echo "</td>";
echo "</tr>";
echo "</table><p>";










