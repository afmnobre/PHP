<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');


##################################################################################################
<h1>Aula 1 de PHP</h1>
<hr>
<h4>COMENTARIOS</h4>
<pre>
COMENTARIO ESTILO C++ = // de uma única linha<p>";
COMENTARIO ESTILO SHELL = # de uma linha<p>";
COMENTARIO COM VARIAS LINHAS /* */<p>
</pre>
##################################################################################################
<hr>
<h4>INCLUSÃO DE ARQUIVOS</h4>

<pre>
	include 'arquivo.php';
	require 'arquivo.php';
	require_once ('arquivo.php');
</pre>
<p> 
* O require_once() verifica se o arquivo ja foi incluido e caso afirmativo ele não inclui novamente.
* O include_once() verifica se o arquivo ja foi incluido e caso afirmativo ele não inclui novamente.
* O include gera erro mas o script continua o require da erro FATAL e o script para</p>

##################################################################################################
<hr>
<h4>TIPOS DE VARIÀVEIS BASICOS</h4>
<p>TIPAGEM DINAMICA = O tipo da variavel no PHP é definido de acordo com seu conteudo</p>

<pre>
	$minha_var = 'OLA MUNDO'; // definido como  string 
	$minha_var = 5; // definido como  integer;
	$minha_var = 10.5; // definido como  float ou double
	$minha_var = true; // definido como bollean
	$minha_var = null; //definido como  null
</pre>
<hr>
<h4>SAIDAS</h4>
<p>SAIDAS DE TEXTO são echo e print</p>

<pre>
	 echo ('Olá mundo');
	 echo 'Olá mundo';
	 echo 'Olá ', 'mundo';

	print ('Olá Mundo');
	print 'Olá Mundo';
	$ret = print 'Olá Mundo';
	print ('Olá Mundo'.$ret);
</pre>
	
##################################################################################################
<hr>
<h4>DIFERENÇAS ENTRE ASPAS DUPLAS E SIMPLES</h4>
<p>Aspas duplas permitem a execução de variaves sem a necessidade de concatenação.</p>

Exemplo:
<pre>
	$nome = "Lucas";
	$sobrenome = "Nobre Ferreira Martins";


	$nomecompleto = '$nome $sobrenome';
	Resultado = ".$nomecompleto.";

	$nomecompleto = "$nome $sobrenome";
	Resultado = ".$nomecompleto";
</pre> 

##################################################################################################
<hr>
<h4>CONCATENAÇÃO DE STRINGS COM \".\" e \".=\"</h4>";
<p>Concatenação de Strings pode ser feita de duas maneiras.</p>
	
<pre>
    <code>
	$a = "Olá ";
	$b = $a . "Mundo!";
	echo $b;
	Resultado = Olá Mundo!

	$a  = "Hello ";
	$a .= "World!";
	echo $a;
	Resuldado = Hello World!
   </code>
</pre>

##################################################################################################
<hr>
<h4>OPERADORES ARITMÉTICOS</h4>
<p>Operadoes para funções matemáticas no php são:</p>

<table border=1>
	<tr><th>Operador</th><th>Nome</th><th>Exemplo</th><th>Resutado</th></tr>
	<tr><td>+</td><td>Adição</td><td>\$x = 2 + 2;</td><td>4</td></tr>
	<tr><td>-</td><td>Subtração</td><td>\$x = 4 - 2;</td><td>2</td></tr>
	<tr><td>*</td><td>Multiplicação</td><td>\$x = 2 * 10;</td><td>20</td></tr>
	<tr><td>/</td><td>divisão</td><td>\$x = 15 / 5;</td><td>20</td></tr>
	<tr><td>%</td><td>Módulo/Sobra da Divisão</td><td>\$x = 5 % 2;</td><td>1</td></tr>
	<tr><td>**</td><td>Exponencial</td><td>\$x = 4 ** $;</td><td>256</td></tr>
</table>

<p>A ordem de execução das funções matematicas são:</p>;
<font size=5><strond>B</strong></font>rackets () [] {}.<br>;
<font size=5><strond>O</strong></font>rder power of √ ( )²<br>;
<font size=5><strond>D</strong></font>ivide ÷ / <br>;
<font size=5><strond>M</strong></font>ultiply * X <br>;
<font size=5><strond>A</strong></font>ddition +<br>;
<font size=5><strond>S</strong></font>ubtraction -;

<strong>Exemplo:</strong>

$x = 1 + 2 * 4;
$x;
Resultado = 7

$x = (1 + 2) * 4;
$x;
Resultado = 9

##################################################################################################
<hr>
<h4>DESTRUINDO VARIÀVEIS</h4>
<p>O unset() destrói variaves previamente especificadas</p>

<strong>Exemplo:</strong>

$a = 1;
$b = \$a;
unset(\$a);
echo \$a;
Resultado:
echo $a;
echo $b;


##################################################################################################
<hr>
<h4>NOWDOC e HEREDOC</h4>

<p>Para escrever textos grandes não interpretados.</p>

$nowdoc = <<<'NOW';
PHP versão $versao!
NOW;

$herec = <<<HERE
PHP versão $versão!
HERE;
