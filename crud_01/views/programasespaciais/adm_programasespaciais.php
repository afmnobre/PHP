<?php
    $query = "SELECT * FROM programas";
    $programas = $conexao->query($query);


echo "<a href='index.php?pagina=programasespaciais/cadastro_programasespaciais'>Cadastrar Novo Programa</a>";

echo "<h4>Lista de Programas Cadastrados</h4>";
    echo "<div class='tabela'>";
    foreach ($programas as $linha) {
        echo "<div class='campo'>";
            echo "<div class='titulo'>".$linha['programa_nome']."</div>";
        echo "<div class='texto'>";
            echo "<img width=15px src='img/nasa_icons/wiki.png'> Dados do Programa: "."<a href='".$linha['programa_url_artigo']."' target='_blank'>"."LINK</a>";
        echo "</div>";
            echo "<div class='controles'>";
                echo "<a href=index.php?pagina=programasespaciais/editar_programasespaciais&id=".$linha['programa_id']."><img width=25px src='img/nasa_icons/editar.png'></a>";
                echo "<a href=index.php?pagina=programasespaciais/excluir_programasespaciais&id=".$linha['programa_id']."><img width=25 src=img/nasa_icons/excluir.png></a>";
            echo "</div>";
        echo "</div>";
    }
    echo "</div>";
