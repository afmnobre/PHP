<?php
    $query = "SELECT * FROM calendario ORDER BY calendario_data DESC";
    $programas = $conexao->query($query);


echo "<a href='index.php?pagina=lancamentos/cadastro_lancamentos'>Cadastrar Novo Agendamento</a>";

echo "<h4>Lista de Agendamentos Cadastrados</h4>";
    echo "<div class='tabela'>";
    foreach ($programas as $linha) {
        $date = explode("-",$linha['calendario_data']);
        $datamostrar = $date[2]."/".$date[1]."/".$date[0];
        echo "<div class='campo'>";
        echo "<div class='titulo'>".$datamostrar."</div>";
        echo "<div class='texto'>".$linha['calendario_texto']."</div>";
        echo "<div class='controles'><a href=index.php?pagina=lancamentos/editar_lancamentos&id=".$linha['calendario_id']."><img width=25 src='img/nasa_icons/editar.png'></a>";
        echo "<a href=index.php?pagina=lancamentos/excluir_lancamentos&id=".$linha['calendario_id']."><img width=25 src=img/nasa_icons/excluir.png></a></div>";
        echo "</div>";
    }
    echo "</div>";
