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
echo "<h4>2. Array Bi Dimensionais</h4>";

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

echo "\$shop[0][0].\" custa \".\$shop[0][1].\" e existem \".\$shop[0][2].\" em estoque\";<br>";
echo "\$shop[1][0].\" custa \".\$shop[1][1].\" e existem \".\$shop[1][2].\" em estoque\";<br>";
echo "\$shop[2][0].\" custa \".\$shop[2][1].\" e existem \".\$shop[2][2].\" em estoque\";<p>";

echo "camisa custa 9.25 e existem 15 em estoque<br>";
echo "short custa 19.75 e existem 25 em estoque<br>";
echo "tênis custa 89.15 e existem 7 em estoque<p>";


##################################################################################################
echo "<hr>";
echo "<h4>3. Array Bi Dimensional Associativo</h4>";

echo "<strong>Exemplo:</strong><p>";


echo "\$shop = [<br>";
echo "[ \"Produto\" => \"camisa\", \"Preco\" => 9.25,   \"Quantidade\" => 15],<br>";
echo "[ \"Produto\" => \"short\",  \"Preco\" => 19.75,  \"Quantidade\" => 25],<br>";
echo "[ \"Produto\" => \"tênis\",  \"Preco\" => 89.15,  \"Quantidade\" => 7]<br>";
echo "];<p>";

echo "<table border=1>";
echo "<tr><th>0</th><th>1</th><th>2</th></tr>";
echo "<tr>";
echo "<td>";
        echo "<table border=1>";
        echo "<tr>";
        echo "<th>";
        echo "Produto";
        echo "</th>";
        echo "<th>";
        echo "Preco";
        echo "</td>";
        echo "<th>";
        echo "Quantidade";
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
        echo "Produto";
        echo "</th>";
        echo "<th>";
        echo "Preco";
        echo "</th>";
        echo "<th>";
        echo "Quantidade";
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
        echo "Produto";
        echo "</th>";
        echo "<th>";
        echo "Preco";
        echo "</th>";
        echo "<th>";
        echo "Quantidade";
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

echo "echo \$shop[0][\"Produto\"].\" custa \".\$shop[0][\"Preco\"].\" e existem \".\$shop[0][\"Quantidade\"].\" em estoque\";<br>";
echo "echo \$shop[1][\"Produto\"].\" custa \".\$shop[1][\"Preco\"].\" e existem \".\$shop[1][\"Quantidade\"].\" em estoque\";<br>";
echo "echo \$shop[2][\"Produto\"].\" custa \".\$shop[2][\"Preco\"].\" e existem \".\$shop[2][\"Quantidade\"].\" em estoque\";<p>";

echo "camisa custa 9.25 e existem 15 em estoque<br>";
echo "short custa 19.75 e existem 25 em estoque<br>";
echo "tênis custa 89.15 e existem 7 em estoque<p>";


##################################################################################################
echo "<hr>";
echo "<h4>4. Array com Loop - FOR</h4>";

echo "<strong>Exemplo:</strong><p>";

echo "\$array =[ \"Brasil\", \"Argentina\", \"Bolívia\", \"Venezuela\" ];<p>";

echo "for(\$i = 0; \$i < count(\$array); \$i++){<br>";
echo "echo \$array[\$i];<br>";
echo "}<br>";


##################################################################################################
echo "<hr>";
echo "<h4>5. Array com FOREACH</h4>";

echo "<strong>Exemplo:</strong><p>";

echo "\$array =[ \"Brasil\", \"Argentina\", \"Bolívia\", \"Venezuela\" ];<p>";

echo "foreach(\$array as \$row){<br>";
echo "echo \$a;<br>";
echo "}<p>";


##################################################################################################
echo "<hr>";
echo "<h4>6. Array com FOREACH - CHAVE E VALOR</h4>";

echo "<strong>Exemplo:</strong><p>";

echo "\$array = [10 => \"Brasil\", 20 => \"Argentina\", 30 => \"Bolívia\", 99 => \"Venezuela\"];<p>";

echo "foreach(\$array as \$key => \$pais){<br>";
echo "echo \"\$key - \$pais\";<br>";
echo "}<p>";

echo "Resultado<br>";
echo "10 - Brasil<br>";
echo "20 - Argentina<br>";
echo "30 - Bolívia<br>";
echo "99 - Venezuela<p>";


##################################################################################################
echo "<hr>";
echo "<h4>7. Array Multidimensional</h4>";

echo "<strong>Exemplo:</strong><p>";

echo "\$pessoas = [<br>";
echo "[\"nome\" => \"João\", \"cpf\" => 123],<br>";
echo "[\"nome\" => \"Maria\", \"cpf\" => 452],<br>";
echo "];<p>";

echo "foreach(\$pessoas as \$pessoa){<br>";
echo "echo \"nome: \" . \$pessoa[\"nome\"];<br>";
echo "}<p>";








