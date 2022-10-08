<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');


##################################################################################################
echo "<h1>Aula 1 de PHP</h1>";
echo "<hr>";
echo "<h4>COMENTARIOS</h4>";
echo "COMENTARIO ESTIO C++ = // de uma única linha<p>";
echo "COMENTARIO ESTIOLO SHELL = # de uma linha<p>";
echo "COMENTARIO COM VARIAS LINHAS /* */<p>";

##################################################################################################
echo "<hr>";
echo "<h4>INCLUSÃO DE ARQUIVOS</h4>";
echo "include 'arquivo.php';<br>";
echo "require 'arquivo.php';<br>";
echo "require_once ('arquivo.php');<br>";
echo "* O require_once() verifica se o arquivo ja foi incluido e caso afirmativo ele não inclui novamente.<br>";
echo "* O include_once() verifica se o arquivo ja foi incluido e caso afirmativo ele não inclui novamente.<br>";
echo "* O include gera erro mas o script continua o require da erro FATAL e o script para<p>";

##################################################################################################
echo "<hr>";
echo "<h4>TIPOS DE VARIÀVEIS BASICOS</h4>";
echo "TIPAGEM DINAMICA = O tipo da variavel no PHP é definido de acordo com seu conteudo<p>";

echo "\$minha_var = 'OLA MUNDO'; // definido como  string<br>";
echo "\$minha_var = 5; // definido como  integer<br>";
echo "\$minha_var = 10.5; // definido como  float ou double<br>";
echo "\$minha_var = true; // definido como bollean<br>";
echo "\$minha_var = null; //definido como  null<br>";

echo "<hr>";
echo "<h4>SAIDAS</h4>";
echo "SAIDAS DE TEXTO são echo e print<p>";

echo " echo ('Olá mundo');<br>";
echo " echo 'Olá mundo';<br>";
echo " echo 'Olá ', 'mundo';<p>";

echo "print ('Olá Mundo');<br>";
echo "print 'Olá Mundo';<br>";
echo "\$ret = print 'Olá Mundo';<br>";
echo "print ('Olá Mundo'.\$ret);<p>";
##################################################################################################
echo "<hr>";
echo "<h4>DIFERENÇAS ENTRE ASPAS DUPLAS E SIMPLES</h4>";
echo "Aspas duplas permitem a execução de variaves sem a necessidade de concatenação.<p>";

echo "Exemplo:<br>";
$nome = "Lucas";
$sobrenome = "Nobre Ferreira Martins";

echo '$nome = "Lucas"<br>';
echo '$sobrenome = "Nobre Ferreira Martins"<p>';

echo '$nomecompleto = \'$nome $sobrenome\'<br>';
$nomecompleto = '$nome $sobrenome<br>';
echo 'echo $nomecompleto;<br>';
echo "Resultado = ".$nomecompleto."<p>";

echo '$nomecompleto = "$nome $sobrenome"<br>';
$nomecompleto = "$nome $sobrenome";
echo 'echo $nomecompleto;<br>';
echo "Resultado = ".$nomecompleto;
##################################################################################################
echo "<hr>";
echo "<h4>CONCATENAÇÃO DE STRINGS COM \".\" e \".=\"</h4>";
echo "Concatenação de Strings pode ser feita de duas maneiras.<p>";

echo "\$a = \"Olá \"<br>";
echo "\$b = \$a . \"Mundo!\"<br>";
echo "echo \$b;<br>";
echo "Resultado = Olá Mundo!<p>";

echo "\$a  = \"Hello \";<br>";
echo "\$a .= \"World!\";<br>";
echo "echo \$a;<br>";
echo "Resuldado = Hello World!";

##################################################################################################
echo "<hr>";
echo "<h4>OPERADORES ARITMÉTICOS</h4>";
echo "Operadoes para funções matemáticas no php são:<p>";

echo "<table border=1>";
echo "<tr><th>Operador</th><th>Nome</th><th>Exemplo</th><th>Resutado</th></tr>";
echo "<tr><td>+</td><td>Adição</td><td>\$x = 2 + 2;</td><td>4</td></tr>";
echo "<tr><td>-</td><td>Subtração</td><td>\$x = 4 - 2;</td><td>2</td></tr>";
echo "<tr><td>*</td><td>Multiplicação</td><td>\$x = 2 * 10;</td><td>20</td></tr>";
echo "<tr><td>/</td><td>divisão</td><td>\$x = 15 / 5;</td><td>20</td></tr>";
echo "<tr><td>%</td><td>Módulo/Sobra da Divisão</td><td>\$x = 5 % 2;</td><td>1</td></tr>";
echo "<tr><td>**</td><td>Exponencial</td><td>\$x = 4 ** $;</td><td>256</td></tr>";
echo "</table><p>";

echo "A ordem de execução das funções matematicas são:<br>";
echo "<font size=5><strond>B</strong></font>rackets () [] {}.<br>";
echo "<font size=5><strond>O</strong></font>rder power of √ ( )²<br>";
echo "<font size=5><strond>D</strong></font>ivide ÷ / <br>";
echo "<font size=5><strond>M</strong></font>ultiply * X <br>";
echo "<font size=5><strond>A</strong></font>ddition +<br>";
echo "<font size=5><strond>S</strong></font>ubtraction -<p>";

echo "<strong>Exemplo:</strong><p>";

echo "\$x = 1 + 2 * 4;<br>";
echo "\$x;<br>";
echo "Resultado = 7<p>";

echo "\$x = (1 + 2) * 4;<br>";
echo "\$x;<br>";
echo "Resultado = 9<p>";

##################################################################################################
echo "<hr>";
echo "<h4>DESTRUINDO VARIÀVEIS</h4>";
echo "o unset() destrói variaves previamente especificadas<p>";

echo "<strong>Exemplo:</strong><p>";

echo "\$a = 1;<br>";
echo "\$b = \$a;<br>";
echo "unset(\$a);<br>";
echo "echo \$a;<br>";
echo "Resultado:";
echo $a;
echo $b;

echo "<hr>";
