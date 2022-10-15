<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');


##################################################################################################
echo "<h1>Aula 5 de PHP</h1>";
echo "<hr>";
echo "<h4>Classes, Objetos, Atributos, Herança, Visibilidade e Encapsulamento.</h4>";

##################################################################################################
echo "<hr>";
echo "<h4>1. PHP OO - PHP ORIENTADO A OBJETO.</h4>";

echo "<strong>CLASSE</strong><p>";

echo "NOME: ";
echo "<ol><ul>+ Pessoa</ul></ol>";
echo "ATRIBUTOS:";
echo "<ol><ul>+ Nome</ul><ul>+ Sobrenome</ul><ul>+ dataNascimento</ul><ul>+ cpf </ul></ol>";

echo "MÉTODOS:";
echo "<ol><ul>+ nomeCompleto()</ul><ul>+ idade()</ul></ol>";


echo "<strong>CLASSE EM PHP</strong><p>";

echo "class Pessoa{ <p>";

echo "public \$nome;<br>";
echo "public \$sobrenome;<br>";
echo "public \$dataNascimento;<br>";
echo "public \$cpf;<p>";

echo "public function nomeCompleto(){<p>";
echo "return \$this->nome.\" \".\$this->sobrenome;<p>";

echo "}<p>";
echo "}<p>";

echo "<strong>Estanciando a classe pessoa em uma variável.</strong><p>";

echo "\$pessoa1 = new Pessoa();<br>";
echo "\$pessoa1->nome = \"Lucas\";<br>";
echo "\$pessoa1->sobrenome = \"Nobre Ferreira Martins\";<br>";
echo "\$pessoa1->dataNascimento = \"15/09/1987\";<br>";
echo "\$pessoa1->cpf = \"358.525.145-45\";<p>";

echo "var_dump(\$pessoa1);<br>";
echo "RESULTADO: object(Pessoa)#1 (4) { [\"nome\"]=> string(5) \"Lucas\" [\"sobrenome\"]=> string(22) \"Nobre Ferreira Martins\" [\"dataNascimento\"]=> string(10) \"15/09/1987\" [\"cpf\"]=> string(14) \"358.525.145-45\" }<p>";



echo "\$pessoa2 = new Pessoa();<br>";
echo "\$pessoa2->nome = \"Matheus\";<br>";
echo "\$pessoa2->sobrenome = \"Nobre Martins Manuel\";<br>";
echo "\$pessoa2->dataNascimento = \"02/07/1989\";<br>";
echo "\$pessoa2->cpf = \"258.289.122-05\";<p>";


echo "var_dump(\$pessoa2);<br>";
echo "object(Pessoa)#2 (4) { [\"nome\"]=> string(7) \"Matheus\" [\"sobrenome\"]=> string(20) \"Nobre Martins Manuel\" [\"dataNascimento\"]=> string(10) \"02/07/1989\" [\"cpf\"]=> string(14) \"258.289.122-05\" }<p>";


##################################################################################################
echo "<hr>";
echo "<h4>2. OBJETOS (Instâncias).</h4>";

echo "<strong>CLASSE</strong><p>";


echo "class Pessoa{<br>";
echo "public \$cpf;<br>";
echo "public \$nome;<br>";
echo "}<p>";

echo "\$x = new Pessoa();<br>";
echo "\$y = new Pessoa();<p>";


echo "\$x->nome = \"maria\";<br>";
echo "\$x->cpf  = \"123\";<p>";

echo "\$y->nome = \"joão\";<br>";
echo "\$y->cpf  = \"345\";<p>";

echo "\$z = \$y;<br>";
echo "\$z->cpf = \"567\";<p>";


echo "var_dump(\$x);";
echo "<br>";
echo "var_dump(\$y);";
echo "<br>";
echo "var_dump(\$z);<p>";


echo "object(Pessoa)#1 (2) { [\"cpf\"]=> string(3) \"123\" [\"nome\"]=> string(5) \"maria\" }<br>";
echo "object(Pessoa)#2 (2) { [\"cpf\"]=> string(3) \"567\" [\"nome\"]=> string(5) \"joão\" }<br>";
echo "object(Pessoa)#2 (2) { [\"cpf\"]=> string(3) \"567\" [\"nome\"]=> string(5) \"joão\" }<p>";


##################################################################################################
echo "<hr>";
echo "<h4>3. MÉTODOS.</h4>";

echo "<strong>CLASSE</strong><p>";


echo "class Pessoa{<br>";
echo "public \$cpf;<br>";
echo "public \$nome;<br>";
echo "function falar(){<br>";
echo "echo \"Oi!\";<br>";
echo "}<br>";
echo "}<p>";


echo "\$pessoa1 = new Pessoa();<br>";
echo "\$pessoa1->nome = \"Lucas\";<p>";

echo "echo \$pessoa1->falar().\" \".\$pessoa1->nome;<p>";

echo "RESULTADO: Oi! Lucas<p>";


##################################################################################################
echo "<hr>";
echo "<h4>4. REFERÊNCIA AO OBJETO (\$this).</h4>";

echo "<strong>EXEMPLO</strong><p>";


echo "class Pessoa{<br>";
echo "public \$cpf;<br>";
echo "public \$nome;<br>";
echo "public \$sobreNome;<br>";
echo "function nomeCompleto(){<br>";
echo "return \$this->nome.\" \".\$this->sobreNome;<br>";
echo "}<br>";
echo "}<p>";

echo "\$pessoa = new Pessoa();<br>";
echo "\$pessoa->nome = \"João\";<br>";
echo "\$pessoa->sobreNome = \"da Silva\";<p>";

echo "echo \$pessoa->nomeCompleto();<p>";

echo "RESULTADO: João da Silva<p>";


##################################################################################################
echo "<hr>";
echo "<h4>5. MÉTODO CONSTRUTOR (__construct).</h4>";

echo "<strong>EXEMPLO</strong><p>";

class Pessoa{

    public $cpf;
    public $nome;

    function __construct(){
        echo "Nova Pessoa";
    }
}


$pessoa = new Pessoa();
$pessoa->nome = "maria";
$pessoa->cpf = "123";

print $pessoa->nome;















