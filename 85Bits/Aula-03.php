<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');


##################################################################################################
echo "<h1>Aula 3 de PHP</h1>";
echo "<hr>";
echo "<h4>Funções</h4>";

##################################################################################################
echo "<hr>";
echo "<h4>1. Criando uma função Simples</h4>";

echo "<strong>Exemplo:</strong><p>";

echo "function minhafuncao(){<br>";
echo "echo \"Ola Mundo com Função\";<br>";
echo "}<p>";

echo "Chamando a função:<br>";
echo "minhafuncao();<br>";
echo "Resultado: Ola Mundo com Função<p>";


##################################################################################################
echo "<hr>";
echo "<h4>2. Criando uma função com Parametros</h4>";

echo "<strong>Exemplo:</strong><p>";

echo "function imprimeNome(\$nome){<br>";
echo "echo \"Meu nome é \$nome!\";<br>";
echo "}<p>";

echo "Chamando a função:<br>";
echo "imprimeNome(\"Lucas\");<br>";
echo "imprimeNome(\"João\");<br>";
echo "Resultado: Meu nome é Lucas!<br>";
echo "Resultado: Meu nome é João!<p>";


##################################################################################################
echo "<hr>";
echo "<h4>2. Criando uma função com mais de um Parametro</h4>";

echo "<strong>Exemplo:</strong><p>";

echo "function imprimeNomeInteiro(\$nome, \$sobrenome){<br>";
echo "echo \"Meu nome inteiro é \$nome \$sobrenome!\";<br>";
echo "}<p>";

echo "Chamando a função:<br>";
echo "imprimeNomeInteiro(\"Lucas\", \"Nobre Ferreira Martins\");<br>";
echo "imprimeNomeInteiro(\"João\", \"da Silva Sauro\");<br>";
echo "Resultado: Meu nome é Lucas Nobre Ferreira Martins!<br>";
echo "Resultado: Meu nome é João da Silva Sauro!<p>";


##################################################################################################
echo "<hr>";
echo "<h4>2. Criando uma função com Parametro DEFAULT</h4>";

echo "<strong>Exemplo:</strong><p>";

echo "function imprimeNomeInteiro(\$nome, \$sobrenome = \"Maciel\"){<br>";
echo "echo \"Meu nome inteiro é \$nome \$sobrenome!\";<br>";
echo "}<p>";

echo "Chamando a função:<br>";
echo "imprimeNomeInteiro(\"Lucas\");<br>";
echo "imprimeNomeInteiro(\"João\", \"da Silva Sauro\");<br>";
echo "Resultado: Meu nome é Lucas Maciel!<br>";
echo "Resultado: Meu nome é João da Silva Sauro!<p>";


##################################################################################################
echo "<hr>";
echo "<h4>2. Criando uma função com Parametro SPLAT OPERATOR \"...\"</h4>";

echo "<strong>Exemplo:</strong><p>";

echo "function valores(...\$numeros){<br>";
echo "echo array_sum(\$numeros);<br>";
echo "}<p>";

echo "Chamando a função:<br>";
echo "valores(1);<br>";
echo "valores(1,2);<br>";
echo "valores(1,2,3);<br>";
echo "Resultado: 1<br>";
echo "Resultado: 3<br>";
echo "Resultado: 6<p>";





