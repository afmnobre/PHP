<?php

$campo = $_GET['campo'];

if ($campo == "astronauta_nave"){
    $query = "SELECT DISTINCT astronauta_nave, astronauta_ano_lancamento FROM `astronautas` ORDER BY astronauta_nave ASC";
    $frase = "A NAVE";
}else{
    $query = "SELECT DISTINCT astronauta_pais FROM `astronautas` ORDER BY astronauta_pais ASC";
    $frase = "O PAÍS";
}

$astronauta = $conexao->query($query);
echo "<h4>Selecione ".$frase." para ver os astronautas</h4>";

echo "<div class='tabela'>";
foreach($astronauta as $linha){
    if($campo == "astronauta_nave"){
        $nave = $linha['astronauta_nave'];
        echo "<div class='campo'>";
        echo "<div class='titulo'><a href='index.php?pagina=listar_astronautas&campo=astronauta_nave&valor=$nave'>".$linha['astronauta_nave']."</a></div>";
        echo "<div class=''>".$linha['astronauta_ano_lancamento']."</div>";
        echo "</div>";
    }
    if($campo == "astronauta_pais"){
        $pais = $linha['astronauta_pais'];
        $img = str_replace(" ","_",$pais);
        echo "<div class='campo'><div class='titulo'><a href='index.php?pagina=listar_astronautas&campo=astronauta_pais&valor=$pais'>".$linha['astronauta_pais']."<br><img width=100px height=50px src='img/flags/$img.png'></a></div></div>";
    }
}
echo "</div>";
