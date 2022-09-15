<?php

$valor = $_GET['valor'];
$campo = $_GET['campo'];

if ($campo == "astronauta_pais"){
    $query = "SELECT * FROM `astronautas` WHERE astronauta_pais='$valor' ORDER BY astronauta_nome ASC";
    $conta = "SELECT COUNT(astronauta_id) as TOTAL FROM `astronautas` WHERE astronauta_pais ='$valor'";
    $frase = "do País ".$valor;
}else{
    $query = "SELECT * FROM `astronautas` WHERE astronauta_nave='$valor' ORDER BY astronauta_nome ASC";
    $frase = "da Nave";
}

$astronauta = $conexao->query($query);

if ($campo == "astronauta_pais"){
    $total = $conexao->query($conta);
    foreach($total as $resultado){
        echo "<h4>Astronautas $frase - Total: ".$resultado['TOTAL']."</h4>";
    }
}else{
        echo "<h4>Astronautas $frase</h4>";
}

echo "<div class='tabela'>";
foreach($astronauta as $linha){
    if($campo == "astronauta_nave"){
        echo "<div class='campo'>";
            echo "<div class='texto'>";
                echo "<div class='titulo'>".$linha['astronauta_nome']."</div>";
                echo "<div class=''>Ano da Missão ".$linha['astronauta_ano_lancamento']."</div>";
                echo "<div class=''>".$linha['astronauta_pais']."</div>";
                echo "<div class=''>Nave ".$linha['astronauta_nave']."</div>";
                echo "<div class=''>Link ".$linha['astronauta_link']."</div>";
                echo "<div class=''>Morte ".$linha['astronauta_data_morte']."</div>";
                echo "<div class=''>Status ".$linha['astronauta_status']."</div>";
            echo "</div>";
            echo "<div class='foto'>";
            if(empty($linha['astronauta_foto']) != NULL ){
                echo "<img width=100px src='img/nasa_icons/semfoto.png'>";
            }else{
                echo "<img width=100px src='data:image/jpg;base64,".base64_encode($linha['astronauta_foto'])."'>";
            }
            echo "</div>";
            echo "<div class='controles'>";
                echo "<a href='index.php?pagina=editar_astronautas&id=".$linha['astronauta_id']."'><img width=20px src='img/nasa_icons/editar.png'></a>";
                echo "<a href='index.php?pagina=excluir_astronautas&id=".$linha['astronauta_id']."'><img width=20px src='img/nasa_icons/excluir.png'></a>";
            echo "</div>";
        echo "</div>";
    }
    if($campo == "astronauta_pais"){
        echo "<div class='campo'>";
            echo "<div class='texto'>";
                echo "<div class='titulo'>".$linha['astronauta_nome']."</div>";
                echo "<div class=''>Ano da Missão ".$linha['astronauta_ano_lancamento']."</div>";
                echo "<div class=''>".$linha['astronauta_pais']."</div>";
                echo "<div class=''>Nave ".$linha['astronauta_nave']."</div>";
                echo "<div class=''>Link ".$linha['astronauta_link']."</div>";
                echo "<div class=''>Morte ".$linha['astronauta_data_morte']."</div>";
                echo "<div class=''>Status ".$linha['astronauta_status']."</div>";
            echo "</div>";
            echo "<div class='foto'>";
            if(empty($linha['astronauta_foto']) != NULL ){
                echo "<img width=100px src='img/nasa_icons/semfoto.png'>";
            }else{
                echo "<img width=100px src='data:image/jpg;base64,".base64_encode($linha['astronauta_foto'])."'>";
            }
            echo "</div>";
            echo "<div class='controles'>";
                echo "<a href='index.php?pagina=editar_astronautas&id=".$linha['astronauta_id']."'><img width=20px src='img/nasa_icons/editar.png'></a>";
                echo "<a href='index.php?pagina=excluir_astronautas&id=".$linha['astronauta_id']."'><img width=20px src='img/nasa_icons/excluir.png'></a>";
            echo "</div>";
        echo "</div>";
    }
}
echo "</div>";
