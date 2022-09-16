<h1>Modelos de Foguetes</h1>
<hr>
<h4>Selecione o País</h4>
<?php
$query ="SELECT DISTINCT(foguete_pais) FROM `foguetes`";
$foguetes = $conexao->query($query);
echo "<div class='tabela'>";
foreach($foguetes as $linha){
    $pais = $linha['foguete_pais'];
    $img = str_replace(" ","_",$pais);
echo "<div class='campo'><div class='titulo'><a href='index.php?pagina=foguetes/view_listar_foguetes&campo=foguete_pais&valor=$pais'>".$linha['foguete_pais']."</div><img width=100px height=50px src='img/flags/$img.png'></a></div>";
}
echo "</div>";
