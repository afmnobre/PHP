<h1>Programas Cadastrados</h1>
<hr>
 <?php
    $query = "SELECT * FROM programas";

    $programa = $conexao->query($query);
    foreach($programa as $linha){


echo "<div class='boxinfo'>";
echo "<h4>Inicio:</h4>".
        $linha['programa_ano_inicio'].
        "<h4>Fim:</h4>".
        $linha['programa_ano_fim'];
echo "<h4>Link:</h4>".$linha['programa_url_artigo'];
echo "<p>".$linha['programa_texto']."</p>";

echo base64_decode($linha['programa_imagem']);
echo '<img src="data:image/gif;base64,' . $linha['programa_imagem'] . '" />';
echo "</div>";


    }
