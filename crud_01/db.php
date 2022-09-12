<?php
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);


$server = 'localhost';
$user   = "root";
$pass   = "SALVADOR2013@";
$dbase  = "nasa";

$conexao = new mysqli($server, $user, $pass, $dbase);

