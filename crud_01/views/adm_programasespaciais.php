<?php
    $query = "SELECT * FROM programas";
    $programas = $conexao->query($query);


echo "<a href='index.php?pagina=cadastro_programas'>Cadastrar Novo Programa</a>";

echo "<h4>Lista de Programas Cadastrados</h4>";
    echo "<table border=1>";
    foreach ($programas as $linha) {
        echo "<tr>";
        echo "<td>".$linha['programa_nome']."</td>";
        echo "<td>".$linha['programa_url_artigo']."</td>";
        echo "<td><a href=index.php?pagina=editar_programas&id=".$linha['programa_id']."><img width=25 src='img/nasa_icons/editar.png'></a></td>";
        echo "<td><a href=index.php?pagina=excluir_programas&id=".$linha['programa_id']."><img width=25 src=img/nasa_icons/excluir.png></a></td>";
        echo "</tr>";
    }
    echo "</table>";
