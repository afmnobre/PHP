<h1>Programas Cadastrados</h1>
<hr>
 <?php
    $query = "SELECT * FROM programas";
    $programa = $conexao->query($query);
    foreach($programa as $linha){


echo "<h4>".$linha['programa_nome']."</h4>";
echo "<table border=0>";
echo "<tr>";
echo "<td width=50>Inicio:</td>"."<td>".$linha['programa_ano_inicio']."</td>"."<td>Link:</td>"."<td>"."<a href='".$linha['programa_url_artigo']."' target='_blank'>".$linha['programa_url_artigo']."</a></td>";
echo "</tr>";
echo "<tr>";
echo "<td>Fim:</td>"."<td>".$linha['programa_ano_fim']."</td><td colspan=2></td>";
echo "</tr>";
echo "<tr>";
echo "<td colspan=2>".$linha['programa_texto']."</td>";
echo '<td colspan=2><img width=500px src="data:image/jpg;base64,'.base64_encode($linha["programa_imagem"]).'"></td>';
echo "</tr>";
echo "</table>";

}
