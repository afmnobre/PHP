<h1>Programas Cadastrados</h1>
<hr>
 <?php
    $query = "SELECT * FROM programas";
    $programa = $conexao->query($query);
    foreach($programa as $linha){

echo "<div class='panel'>";
        echo "<div class='titulo'>";
            echo $linha['programa_nome'];
        echo "</div>";
        echo "<div class='campo'>";
            echo "<div class='ano'>";
                echo "Inicio: ".$linha['programa_ano_inicio'];
                echo " Fim: ".$linha['programa_ano_fim'];
            echo "</div>";
            echo "<div class='link'>";
                echo "<a href='".$linha['programa_url_artigo']."' target='_blank'>".$linha['programa_url_artigo']."</a>";
            echo "</div>";
                echo "<div class='texto'>";
                    echo $linha['programa_texto'];
                echo "</div>";
        echo "</div>";
        echo "<div class='foto'>";
            echo '<img width=370px src="data:image/jpg;base64,'.base64_encode($linha["programa_imagem"]).'">';
        echo "</div>";
echo "</div>";
}
