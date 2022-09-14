<?php

$id             = $_POST['id'];
$datalancamento = $_POST['txt_data_lancamento'];
$status         = $_POST['cmb_status'];
$texto          = $_POST['txt_texto_lancamento'];

$data = explode("/",$datalancamento);
$datagravar = $data[2]."-".$data[1]."-".$data[0];



$query = "UPDATE
            calendario
        SET
            calendario_data='".$datagravar."',
            calendario_status='".$status."',
            calendario_texto='".$texto."'
        WHERE
            calendario_id=".$id;

$conexao->query($query);

header("location: index.php?pagina=adm_lancamentos");
