<?php

$nome            = $_POST['txt_astronauta_nome'];
$pais            = $_POST['txt_astronauta_pais'];
$nave            = $_POST['txt_astronauta_nave'];
$data_lancamento = $_POST['txt_astronauta_data_lancamento'];
$link            = $_POST['txt_astronauta_link'];
$morte           = DataGravar($_POST['txt_astronauta_data_morte']);
$fato            = $_POST['txt_fato_especial'];
@$status         = $_POST['status'];
$imagem          = $_FILES['img_foto_astronauta'];

if($status == ""){ $status = "D"; }


if(empty($_FILES['img_foto_astronauta']['size'] == false)){
    $nomeFinal = time().'.jpg';
    if(move_uploaded_file($imagem['tmp_name'], $nomeFinal)){
        $tamanhoImg = filesize($nomeFinal);
        $mysqlImg = addslashes(fread(fopen($nomeFinal, "r"), $tamanhoImg));

        $conexao->query("INSERT INTO
                astronautas(
                astronauta_nome,
                astronauta_ano_lancamento,
                astronauta_pais,
                astronauta_nave,
                astronauta_foto,
                astronauta_link,
                astronauta_fato_especial,
                astronauta_data_morte,
                astronauta_status)
            VALUES(
                 '$nome',
                '$data_lancamento',
                '$pais',
                '$nave',
                '$mysqlImg',
                '$link',
                '$fato',
                '$morte',
                '$status')");
        header("location: index.php?pagina=astronautas/adm_astronautas");
    }
}else{
    $query = "INSERT INTO
                astronautas(
                astronauta_nome,
                astronauta_ano_lancamento,
                astronauta_pais,
                astronauta_nave,
                astronauta_link,
                astronauta_fato_especial,
                astronauta_data_morte,
                astronauta_status)
            VALUES(
                 '$nome',
                '$data_lancamento',
                '$pais',
                '$nave',
                '$link',
                '$fato',
                '$morte',
                '$status')";
        $conexao->query($query);
        header("location: index.php?pagina=astronautas/adm_astronautas");
}

