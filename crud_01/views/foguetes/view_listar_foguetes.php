<?php

$pais = $_GET['valor'];
$query = "SELECT * FROM foguetes WHERE foguete_pais ='".$pais."' ORDER BY foguete_nome";
$foguetes = $conexao->query($query);

echo "<h4>Modelo de Foguetes</h4>";

echo "<div class='tabela'>";
foreach($foguetes as $linha){
    echo "<div class=campo>";
    echo "<div class='titulo'>".$linha['foguete_nome']."</div>";
    echo "<img src='img/nasa_icons/pais.png' width=15px> ".$linha['foguete_pais']."<br>";
    echo "<img src='img/nasa_icons/wiki.png' width=15px> Especificação: <a target='_blank' href='".$linha['foguete_link']."' >Link</a><br>";
    echo "<img src='img/nasa_icons/ok.png' width=15px> ".$linha['foguete_status'];


echo "</div>";
}
echo "</div>";

