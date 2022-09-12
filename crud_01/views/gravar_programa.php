<?php

include('db.php');

$titulo = $_POST['txt_programa_nome'];
$inicio = $_POST['txt_programa_anoinicio'];
$fim    = $_POST['txt_programa_anofim'];
$link   = $_POST['txt_programa_link'];
$texto  = $_POST['txt_programa_descricao'];
$imagem = $_FILES['img_programa'];

if($imagem != NULL){
    $nomeFinal = time().'.jpg';
    if(move_uploaded_file($imagem['tmp_name'], $nomeFinal)){
        $tamanhoImg = filesize($nomeFinal);
        $mysqlImg = addslashes(fread(fopen($nomeFinal, "r"), $tamanhoImg));
        $conexao->query("INSERT INTO
                            programas(programa_ano_inicio,
                            programa_ano_fim,
                            programa_nome,
                            programa_imagem,
                            programa_url_artigo,
                            programa_texto)
                        VALUES('$inicio',
                            '$fim',
                            '$titulo',
                            '$mysqlImg',
                            '$link',
                            '$texto')");
        header("location: index.php?pagina=cadastro_programas");
    }
 }
else{
    echo"Você não realizou o upload de forma satisfatória.";
}
 echo "INSERT INTO programas(programa_ano_inicio,
                            programa_ano_fim,
                            programa_nome,
                            programa_imagem,
                            programa_url_artigo,
                            programa_texto)
                        VALUES('$inicio',
                            '$fim',
                            '$titulo',
                            '$mysqlImg',
                            '$link',
                            '$texto')";

