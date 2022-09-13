<?php

$id = $_GET['id'];

$query = "DELETE FROM programas WHERE programa_id =".$id;
$programa = $conexao->query($query);

header("location: index.php?pagina=adm_programasespaciais");
