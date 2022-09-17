    <h4>Gerencia de Foguetes</h4>

<a href="index.php?pagina=foguetes/cadastro_foguetes">Cadastrar Foguetes</a>

<?php
$query = "SELECT * FROM foguetes ORDER BY foguete_nome ASC";
$foguetes = $conexao->query($query);


echo "<div class='tabela'>";
foreach($foguetes as $linha){
    echo "<div class='campo'>";
    echo "<div class='titulo'>".$linha['foguete_nome']."</div>";
    $pais = $linha['foguete_pais'];
    $img = str_replace(" ","_",$pais);
    echo "<img width=20px height=15px src='img/flags/$img.png'> ".$linha['foguete_pais']."<br>";
    echo "<img width=15px height=15px src='img/nasa_icons/wiki.png'> Especificações: "."<a href='".$linha['foguete_link']."' target='_blank'>Link</a><br>";
    if($linha['foguete_status']=='Ativo'){
        echo "<img width=15px height=15px src=img/nasa_icons/ok.png> ".$linha['foguete_status']."<br>";
    }else{
        echo "<img width=15px height=15px src=img/nasa_icons/notok.png> ".$linha['foguete_status']."<br>";
    }
        echo "<div class='controles'>";
            echo "<a href=index.php?pagina=foguetes/editar_foguetes&id=".$linha['foguete_id']."><img width=15px height=15px src='img/nasa_icons/editar.png'></a>";
            echo "<a href=index.php?pagina=foguetes/excluir_foguetes&id=".$linha['foguete_id']."><img width=15px height=15px src='img/nasa_icons/excluir.png'></a>";
        echo "</div>";
    echo "</div>";
}
echo "</div>";
