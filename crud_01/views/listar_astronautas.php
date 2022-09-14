<?php


$valor = $_GET['valor'];
$campo = $_GET['campo'];

if ($campo == "astronauta_pais"){
    $query = "SELECT * FROM `astronautas` WHERE astronauta_pais='$valor' ORDER BY astronauta_nome ASC";
    $frase = "do País ".$valor;
}else{
    $query = "SELECT * FROM `astronautas` WHERE astronauta_nave='$valor' ORDER BY astronauta_nome ASC";
    $frase = "da Nave";
}


$astronauta = $conexao->query($query);
echo "<h4>Astronautas $frase</h4>";

echo "<div class='tabela'>";
foreach($astronauta as $linha){
    if($campo == "astronauta_nave"){
        echo "<div class='campo'>";
        echo "<div class='titulo'>".$linha['astronauta_nome']."</div>";
        echo "<div class=''>Ano da Missão ".$linha['astronauta_ano_lancamento']."</div>";
        echo "<div class=''>".$linha['astronauta_pais']."</div>";
        echo "<div class=''>Nave ".$linha['astronauta_nave']."</div>";
        echo "<div class=''>Link ".$linha['astronauta_link']."</div>";
        echo "<div class=''>Morte ".$linha['astronauta_data_morte']."</div>";
        echo "<div class=''>Status ".$linha['astronauta_status']."</div>";
        echo "<div class=''><a href='index.php?pagina=editar_astronautas&id=".$linha['astronauta_id']."'><img width=20px src='img/nasa_icons/editar.png'></a></div>";
        echo "<div class=''><a href='index.php?pagina=excluir_astronautas&id=".$linha['astronauta_id']."'><img width=20px src='img/nasa_icons/excluir.png'></a></div>";
        echo "</div>";
    }
    if($campo == "astronauta_pais"){
        echo "<div class='campo'>";
        echo "<div class='titulo'>".$linha['astronauta_nome']."</div>";
        echo "<div class=''>Ano da Missão ".$linha['astronauta_ano_lancamento']."</div>";
        echo "<div class=''>".$linha['astronauta_pais']."</div>";
        echo "<div class=''>Nave ".$linha['astronauta_nave']."</div>";
        echo "<div class=''>Link ".$linha['astronauta_link']."</div>";
        echo "<div class=''>Morte ".$linha['astronauta_data_morte']."</div>";
        echo "<div class=''>".$linha['astronauta_status']."</div>";
        echo "<div class=''><a href='index.php?pagina=editar_astronautas&id=".$linha['astronauta_id']."'><img width=20px src='img/nasa_icons/editar.png'></a></div>";
        echo "<div class=''><a href='index.php?pagina=excluir_astronautas&id=".$linha['astronauta_id']."'><img width=20px src='img/nasa_icons/excluir.png'></a></div>";
        echo "</div>";
    }
}
echo "</div>";
