<?php

$id        = $_POST['id'];
$nome      = $_POST['txt_programa_nome'];
$anoinicio = $_POST['txt_programa_anoinicio'];
$anofim    = $_POST['txt_programa_anofim'];
$url       = $_POST['txt_programa_link'];
$texto     = $_POST['txt_programa_descricao'];
$alterarimg= $_POST['alterar_imagem'];
$imagem    = $_FILES['img_programa'];



$query = "SELECT * FROM programas WHERE programa_id =".$id;
$programa = $conexao->query($query);

foreach($programa as $linha){
    if($nome <> $linha['programa_nome']){
        $alterar = "UPDATE programas SET programa_nome = '".$nome."' WHERE programa_id=".$id;
        $conexao->query($alterar);
    }

    if($anoinicio <> $linha['programa_ano_inicio']){
        $alterar = "UPDATE programas SET programa_ano_inicio = ".$anoinicio. " WHERE programa_id=".$id;
        $conexao->query($alterar);
    }

    if($anofim <> $linha['programa_ano_fim']){
        $alterar = "UPDATE programas SET programa_ano_fim = ".$anofim. " WHERE programa_id=".$id;
        $conexao->query($alterar);
    }

    if($url <> $linha['programa_url_artigo']){
        $alterar = "UPDATE programas SET programa_url_artigo = '".$url. "' WHERE programa_id=".$id;
        $conexao->query($alterar);
    }

    if($texto <> $linha['programa_texto']){
        $alterar = "UPDATE programas SET programa_texto = '".$texto."' WHERE programa_id=".$id;
        $conexao->query($alterar);
    }
    if($alterarimg == 'alterar'){
            $nomeFinal = time().'.jpg';
            if(move_uploaded_file($imagem['tmp_name'], $nomeFinal)){
                $tamanhoImg = filesize($nomeFinal);
                $mysqlImg = addslashes(fread(fopen($nomeFinal, "r"), $tamanhoImg));
                $conexao->query("UPDATE programas SET programa_imagem ='".$mysqlImg."' WHERE programa_id=".$id);
        }
    }
    header("location: index.php?pagina=programasespaciais/adm_programasespaciais");
}
