<?php

$id             = $_POST['id'];
$nome           = $_POST['txt_astronauta_nome'];
$pais           = $_POST['txt_astronauta_pais'];
$datamorte      = DataGravar($_POST['txt_astronauta_data_morte']);
$nave           = $_POST['txt_astronauta_nave'];
$status         = $_POST['status'];
$anolancamento  = $_POST['txt_astronauta_data_lancamento'];
$link           = $_POST['txt_astronauta_link'];
$fatoespecial   = $_POST['txt_fato_especial'];
$alterarfoto    = $_POST['alterarfoto'];
$imagem         = $_FILES['img_foto_astronauta'];

//echo $link;

$query = "SELECT * FROM astronautas WHERE astronauta_id =".$id;
$astronauta = $conexao->query($query);

foreach($astronauta as $linha){
    if($nome <> $linha['astronauta_nome']){
        $alterar = "UPDATE astronautas SET astronauta_nome = '".$nome."' WHERE astronauta_id=".$id;
        $conexao->query($alterar);
    }

    if($pais <> $linha['astronauta_pais']){
        $alterar = "UPDATE astronautas SET astronauta_pais = ".$pais. " WHERE astronauta_id=".$id;
        $conexao->query($alterar);
    }

    if($datamorte <> $linha['astronauta_data_morte']){
        echo "DATA MORTE= ".$datamorte ." e DATA MORTE GRAVADA ".$linha['astronauta_data_morte'];
        $alterar = "UPDATE astronautas SET astronauta_data_morte = '".$datamorte. "' WHERE astronauta_id=".$id;
        $conexao->query($alterar);
    }

    if($nave <> $linha['astronauta_nave']){
        $alterar = "UPDATE astronautas SET astronauta_nave = '".$nave. "' WHERE astronauta_id=".$id;
        $conexao->query($alterar);
    }

    if($anolancamento <> $linha['astronauta_ano_lancamento']){
        $alterar = "UPDATE astronautas SET astronauta_ano_lancamento = '".$anolancamento."' WHERE astronauta_id=".$id;
        $conexao->query($alterar);
    }

    if($fatoespecial <> $linha['astronauta_fato_especial']){
        $alterar = "UPDATE astronautas SET astronauta_fato_especial = '".$fatoespecial."' WHERE astronauta_id=".$id;
        $conexao->query($alterar);
    }

    if($link <> $linha['astronauta_link']){
        $alterar = "UPDATE astronautas SET astronauta_link = '".$link."' WHERE astronauta_id=".$id;
        $conexao->query($alterar);
    }

    if($status <> $linha['astronauta_status']){
        $alterar = "UPDATE astronautas SET astronauta_status = '".$status."' WHERE astronauta_id=".$id;
        $conexao->query($alterar);
    }

    if($alterarfoto == 'alterar'){
            $nomeFinal = time().'.jpg';
            if(move_uploaded_file($imagem['tmp_name'], $nomeFinal)){
                $tamanhoImg = filesize($nomeFinal);
                $mysqlImg = addslashes(fread(fopen($nomeFinal, "r"), $tamanhoImg));
                $conexao->query("UPDATE astronautas SET astronauta_foto ='".$mysqlImg."' WHERE astronauta_id=".$id);
                //echo "UPDATE astronautas SET astronauta_foto ='".$mysqlImg."' WHERE astronauta_id=".$id;
                //echo $link.$alterarfoto;
        }
    }
    header("location: index.php?pagina=astronautas/adm_astronautas");
}
