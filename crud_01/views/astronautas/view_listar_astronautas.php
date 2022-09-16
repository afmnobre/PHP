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
                echo "<img width=15px src=img/nasa_icons/missao.png> Ano: ".$linha['astronauta_ano_lancamento']."<br>";
                echo "<img width=15px src=img/nasa_icons/pais.png> ".$linha['astronauta_pais']."<br>";
                echo "<img width=15px src=img/nasa_icons/nave.png> ".$linha['astronauta_nave']."<br>";
                echo "<img width=15px src=img/nasa_icons/wiki.png> Biografia:<a target=_blank href=".$linha['astronauta_link']."> LINK</a><br>";
                echo "<img width=15px src=img/nasa_icons/morte.png>".$linha['astronauta_data_morte']."<br>";
                if($linha['astronauta_status']=='A'){ echo "<img width=15px src=img/nasa_icons/ok.png>"; }else{ echo "<img width=15px src=img/nasa_icons/notok.png>"; } ;
            echo "</div>";
            echo "<div class='foto'>";
            if(empty($linha['astronauta_foto']) != NULL ){
                echo "<img width=100px src='img/nasa_icons/semfoto.png'>";
            }else{
                echo "<img width=100px height=150px src='data:image/jpg;base64,".base64_encode($linha['astronauta_foto'])."'>";
            }
            echo "</div>";
        echo "</div>";
    }
    if($campo == "astronauta_pais"){
        echo "<div class='campo'>";
            echo "<div class='texto'>";
                echo "<div class='titulo'>".$linha['astronauta_nome']."</div>";
                echo "<img width=15px src=img/nasa_icons/missao.png> Ano: ".$linha['astronauta_ano_lancamento']."<br>";
                echo "<img width=15px src=img/nasa_icons/pais.png> ".$linha['astronauta_pais']."<br>";
                echo "<img width=15px src=img/nasa_icons/nave.png> ".$linha['astronauta_nave']."<br>";
                echo "<img width=15px src=img/nasa_icons/wiki.png> Biografia:<a target=_blank href=".$linha['astronauta_link']."> LINK</a><br>";
                echo "<img width=15px src=img/nasa_icons/morte.png>".DataMostrar($linha['astronauta_data_morte'])."<br>";
                if($linha['astronauta_status']=='A'){ echo "<img width=15px src=img/nasa_icons/ok.png>"; }else{ echo "<img width=15px src=img/nasa_icons/notok.png>"; } ;
            echo "</div>";
            echo "<div class='foto'>";
            if(empty($linha['astronauta_foto']) != NULL ){
                echo "<img width=100px src='img/nasa_icons/semfoto.png'>";
            }else{
                echo "<img width=100px height=150px src='data:image/jpg;base64,".base64_encode($linha['astronauta_foto'])."'>";
            }
            echo "</div>";
        echo "</div>";
    }
}
echo "</div>";
