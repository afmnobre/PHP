<?php
    $query = "SELECT * FROM calendario ORDER BY calendario_data DESC";
    $programas = $conexao->query($query);


echo "<a href='index.php?pagina=cadastro_lancamentos'>Cadastrar Novo Agendamento</a>";

echo "<h4>Lista de Agendamentos Cadastrados</h4>";
    echo "<table border=1>";
    foreach ($programas as $linha) {
        $date = explode("-",$linha['calendario_data']);
        $datamostrar = $date[2]."/".$date[1]."/".$date[0];
        echo "<tr>";
        echo "<td width=100>".$datamostrar."</td>";
        echo "<td>".$linha['calendario_texto']."</td>";
        echo "<td><a href=index.php?pagina=editar_lancamentos&id=".$linha['calendario_id']."><img width=25 src='img/nasa_icons/editar.png'></a></td>";
        echo "<td><a href=index.php?pagina=excluir_lancamentos&id=".$linha['calendario_id']."><img width=25 src=img/nasa_icons/excluir.png></a></td>";
        echo "</tr>";
    }
    echo "</table>";
