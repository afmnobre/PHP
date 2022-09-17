<?php

$id = $_POST['id'];
$nome = $_POST['txt_foguete_nome'];
$pais = $_POST['txt_foguete_pais'];
$link = $_POST['txt_foguete_link'];
$status = $_POST['txt_foguete_status'];
$imagem = $_FILES['img_foguete'];


$query = "SELECT * FROM foguetes WHERE foguete_id=".$id;

;
$foguete = $conexao->query($query);

foreach($foguete as $linha){
    if($nome <> $linha['foguete_nome']){
        $query = "UPDATE foguetes SET foguete_nome='$nome' WHERE foguete_id=$id";
        $conexao->query($query);
    }
    if($pais <> $linha['foguete_pais']){
        $query = "UPDATE foguetes SET foguete_pais='$pais' WHERE foguete_id=$id";
        $conexao->query($query);
    }
    if($link <> $linha['foguete_link']){
        $query = "UPDATE foguetes SET foguete_link='$link' WHERE foguete_id=$id";
        $conexao->query($query);
    }
    if($status <> $linha['foguete_status']){
        $query = "UPDATE foguetes SET foguete_status='$status' WHERE foguete_id=$id";
        $conexao->query($query);
    }
    if(empty($_FILES['img_foguete']['size'] == false)){
        $nomeFinal = time().'.jpg';
        if(move_uploaded_file($imagem['tmp_name'], $nomeFinal)){
            $tamanhoImg = filesize($nomeFinal);
            $mysqlImg = addslashes(fread(fopen($nomeFinal, "r"), $tamanhoImg));
            $conexao->query("UPDATE foguetes SET foguete_imagem = '$mysqlImg' WHERE foguete_id=$id");
        }
    }

    header("location: index.php?pagina=foguetes/adm_foguetes");

}









