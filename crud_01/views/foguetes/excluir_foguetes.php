<?php


$id = $_GET['id'];

$query = "DELETE FROM foguetes WHERE foguete_id=".$id;
$conexao->query($query);

header("location: index.php?pagina=foguetes/adm_foguetes");
