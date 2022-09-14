<?php

$id = $_GET['id'];
$query = "DELETE FROM calendario WHERE calendario_id=".$id;
$conexao->query($query);
header("location: index.php?pagina=adm_lancamentos");
