<?php

$nome         = $_POST['txt_foguete_nome'];
$pais         = $_POST['txt_foguete_pais'];
$link         = $_POST['txt_foguete_link'];
$status       = $_POST['txt_foguete_status'];
$imagem       = $_FILES['img_foguete'];

if(empty($_FILES['img_foguete']['size'] == false)){
    $nomeFinal = time().'.jpg';
    if(move_uploaded_file($imagem['tmp_name'], $nomeFinal)){
        $tamanhoImg = filesize($nomeFinal);
        $mysqlImg = addslashes(fread(fopen($nomeFinal, "r"), $tamanhoImg));
        $conexao->query("INSERT INTO foguetes(foguete_nome,foguete_pais,foguete_link,foguete_status, foguete_imagem) VALUES ('$nome','$pais','$link','$status','$mysqlImg')");
        header("location: index.php?pagina=foguetes/adm_foguetes");
    }
}else{
    $query = "INSERT INTO foguetes(foguete_nome,foguete_pais,foguete_link,foguete_status) VALUES ('$nome','$pais','$link','$status')";
    $conexao->query($query);
    header("location: index.php?pagina=foguetes/adm_foguetes");
}
