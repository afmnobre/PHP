<h1>Lançamentos Agendados</h1>
<hr>
<?php
    $query = "SELECT * FROM calendario ORDER BY calendario_data DESC";
    $programas = $conexao->query($query);



echo "<h4>Agendamentos Cadastrados</h4>";
    echo "<div class='tabela'>";
    foreach ($programas as $linha) {
        $date = explode("-",$linha['calendario_data']);
        $datamostrar = $date[2]."/".$date[1]."/".$date[0];
        echo "<div class='campo'>";
        echo "<div class='titulo'>".$datamostrar."</div>";
        echo "<div class='texto'>".$linha['calendario_texto']."</div>";
        echo "</div>";
    }
    echo "</div>";

