<h1>Lançamentos Agendados</h1>
<hr>
<?php
    $query = "SELECT * FROM calendario ORDER BY calendario_data DESC";
    $programas = $conexao->query($query);



echo "<h4>Agendamentos Cadastrados</h4>";
    echo "<table border=1>";
    foreach ($programas as $linha) {
        $date = explode("-",$linha['calendario_data']);
        $datamostrar = $date[2]."/".$date[1]."/".$date[0];
        echo "<tr>";
        echo "<td width=100>".$datamostrar."</td>";
        echo "<td>".$linha['calendario_texto']."</td>";
        echo "</tr>";
    }
    echo "</table>";

