<h1>Editar Programas Cadastrado</h1>
<hr>
<?php
    $id = $_GET['id'];
    $query = "SELECT * FROM programas WHERE programa_id = ".$id;
    $programas = $conexao->query($query);
    foreach($programas as $linha){
?>
<form class="form-style" enctype="multipart/form-data" action="index.php?pagina=programasespaciais/alterar_programasespaciais" method="post">
    <ul>
        <li>
        <input class="field-style field-split align-left" value="<?php echo $linha['programa_nome']; ?>" type="text" name="txt_programa_nome">
        <input class="field-style field-split align-right" type="text" name="txt_programa_anoinicio" value="<?php echo $linha['programa_ano_inicio']; ?>">
        </li>
        <li>
        <input class="field-style field-split align-left" type="text" name="txt_programa_link" value="<?php echo $linha['programa_url_artigo']; ?>">
        <input class="field-style field-split align-right" type="text" name="txt_programa_anofim" value="<?php echo $linha['programa_ano_fim']; ?>">
        </li>
        <li>
                <h4>Descrição sobre o Programa:</h4>
                <textarea class="field-style" name="txt_programa_descricao" id="area" style="width:100%;height:200px;">
                    <?php echo $linha['programa_texto']; ?>
                </textarea>
        </li>
        <li>
            <input type="checkbox" class="field-style" name="alterar_imagem" value="alterar">
            <label class="field-style" for="scales">Alterar Imagem</label>
            <input class="field-style align-right" type="file" name="img_programa" placeholder="Imagem do Programa">
        </li>
        <li>
            <input type="hidden" name="pagina" value="index.php?pagina=programasespaciais/alterar_programasespaciais">
            <input type="hidden" name="id" value="<?php echo $linha['programa_id']; ?>">
            <input type="submit" value="Alterar">
        </li>
    </ul>
</form>
<?php
}

