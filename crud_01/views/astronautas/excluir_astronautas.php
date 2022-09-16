<?php

$id = $_GET['id'];

$query = "DELETE FROM astronautas WHERE astronauta_id=".$id;
$conexao->query($query);
header("location: index.php?pagina=astronautas/adm_astronautas");
