<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');


##################################################################################################
echo "<h1>Aula 6 de PHP</h1>";
echo "<hr>";
echo "<h4>Classes, Objetos, Atributos, Herança, Visibilidade e Encapsulamento.</h4>";

##################################################################################################
echo "<hr>";
echo "<h4>1. Atributos Estáticos.</h4>";

echo "class Teste {<br>";
echo "public \$nome;<br>";
echo "public static \$status = \"online\";<br>";
echo "}<p>";

echo "\$t1 = new Teste();<br>";
echo "\$t1->nome = \"Teste 1\";<p>";

echo "\$t2 = new Teste();<br>";
echo "\$t2->nome = \"Teste 2\";<p>";

echo "\$t1->status = \"Offline\";<br>";
echo "RESULTADO: Notice: Accessing static property Teste::\$status as non static in /srv/http/programacao/PHP/85Bits/Aula-06.php on line 26<p>";

echo "Valor do atributo estático<br>";
echo "echo \$t1::\$status;<br>";
echo "RESULTADO: online<p>";

echo "Alterando o valor do atributo estático<br>";
echo "\$t1::\$status = \"offline\";<p>";

echo "Mostrando o valor do atributo estático alterado.<br>";
echo "echo \$t2::\$status;<br>";
echo "echo Teste::\$status;<br>";
echo "RESULTADO: offline<p>";

##################################################################################################
echo "<hr>";
echo "<h4>2. Métodos Estáticos.</h4>";

echo "Dentro de FUNÇÕES com METODO STATIC não podemos chamar variaves com \$this->variavel.<p>";

echo "<strong>EXEMPLO:</strong><p>";


echo "class Util{<br>";
echo "public static function hoje(){<br>";
echo "return date(\"d/m/y\");<br>";
echo "}<br>";
echo "}<p>";

echo "echo Util::hoje();<br>";
echo "\$util = new Util();<br>";
echo "echo \$util->hoje();<p>";


##################################################################################################
echo "<hr>";
echo "<h4>3. Class Constants (const).</h4>";

echo "REGRAS:<br>";
echo "1. No codigo usamos o SELF para chamar o nome da função que estamos dentro sem precisar repetir o nome da função.<br>";
echo "2. Se eu definir como uma PRIVATE CONST então ela só vai poder ser acessada e exibida dentro da função ou método.<br>";
echo "3. Valor não pode ser alterado e pra ser acessado precisa usar o :: sem o \$.<p>";

echo "<strong>EXEMPLO:</strong><p>";

echo "class Matematica{<br>";
echo "const PI = 3.14;<p>";

echo "function valorDePi(){<br>";
echo "echo self::PI;<br>";
echo "}<br>";
echo "}<p>";

echo "echo Matematica::PI;<p>";


echo "\$mat = new Matematica();<br>";
echo "\$mat->valorDePi();<p>";


##################################################################################################
echo "<hr>";
echo "<h4>4. FINAL.</h4>";

echo "REGRAS:<br>";
echo "1.Uma classe que não pode ser feita OVERRIDE<p>";

echo "<strong>EXEMPLO:</strong><p>";

echo "class Pai {<br>";
echo "final public function fazAlgo {<br>";
echo "echo \"oi\";<br>";
echo "}<br>";
echo "}<p>";


echo "class Filho extends Pai {<br>";
echo "public function fazAlgo(){<br>";
echo "echo \"Olá\";<br>";
echo "}<br>";
echo "}<p>";


Echo "RESULTADO: Cannot override final method Pai::fazAlgo()<p>";


##################################################################################################
echo "<hr>";
echo "<h4>5. CLASSE ABSTRATA.</h4>";

echo "REGRAS:<br>";
echo ".<p>";

echo "<strong>EXEMPLO:</strong><p>";

echo "abstract class Pessoa {<br>";
echo "public \$nome;<br>";
echo "}<p>";

echo "class PessoaFisica extends Pessoa {<br>";
echo "public \$cpf;<br>";
echo "}<p>";

echo "class PessoaJuridica extends Pessoa {<br>";
echo "public \$cnpj;<br>";
echo "}<p>";

echo "\$pf = new PessoaFisica();<br>";
echo "\$pj = new PessoaJuridica();<br>";
echo "\$p = new Pessoa();<p>";

echo "QUANDO SE TENTA ESTANCIAR A CLASSE ABSTRATA:<br>";
echo "Fatal error: Uncaught Error: Cannot instantiate abstract class Pessoa in /srv/http/programacao/PHP/85Bits/Aula-06.php:136 Stack trace: #0 {main} thrown in /srv/http/programacao/PHP/85Bits/Aula-06.php on line 136";

