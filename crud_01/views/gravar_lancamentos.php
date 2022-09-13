<?php

$datalancamento = $_POST['txt_data_lancamento'];
$status = $_POST['cmb_status'];
$texto    = $_POST['txt_texto_lancamento'];



$data = explode("/",$datalancamento);

$datagravar = $data[2]."-".$data[1]."-".$data[0];

echo $datagravar;

$conexao->query("INSERT INTO calendario(calendario_data,calendario_texto,calendario_status) VALUES('$datagravar','$texto','$status')");
header("location: index.php?pagina=adm_lancamentos");

