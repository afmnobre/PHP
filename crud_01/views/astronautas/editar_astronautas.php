<?php

$id = $_GET['id'];

$query = "SELECT * FROM astronautas WHERE astronauta_id=".$id;

$astronauta = $conexao->query($query);
foreach($astronauta as $linha){
?>
<h4>Alterar cadastro do Astronautas</h4>
<hr>


<form class="form-style" enctype="multipart/form-data" action="index.php?pagina=astronautas/alterar_astronautas" method="post">
    <ul>
        <li>
        <input class="field-style field-split align-left" type="text" name="txt_astronauta_nome" value='<?php echo $linha['astronauta_nome']; ?>'>
        <input class="field-style field-split align-right" type="text" name="txt_astronauta_pais" value='<?php echo $linha['astronauta_pais']; ?>'>
        </l1>
        <li>
        <input class="field-style field-split align-left" type="text" name="txt_astronauta_nave" value='<?php echo $linha['astronauta_nave']; ?>'>
        <input class="field-style field-split align-right" type="text" name="txt_astronauta_data_lancamento" value='<?php echo $linha['astronauta_ano_lancamento']; ?>'>
        </l1>
        <li>
        <input class="field-style field-split align-left" type="text" name="txt_astronauta_link" value='<?php echo $linha['astronauta_link']; ?>'>
        <input class="field-style field-split align-right" type="text" name="txt_astronauta_data_morte" value=<?php if($linha['astronauta_data_morte'] <> ""){ echo DataMostrar($linha['astronauta_data_morte']); }?>>
        </l1>
        <li>
            <h4>Fato Especial:</h4>
            <textarea name="txt_fato_especial" id="area" style="width:100%;height:100px;">
                <?php echo $linha['astronauta_fato_especial']; ?>
            </textarea>
        </li>
        <li>
            <input class="field-style align-left" type="file" name="img_foto_astronauta" placeholder="Foto do Astronauta">
            <input class="field-style align-right"type="checkbox" name="alterarfoto" value="alterar">
            <input type="label" class="field-style align-right" disabled value="Alterar Foto?">
        </li>
        <li>
            <input class="field-style align-right" type="checkbox" name="status" value="A" <?php if($linha['astronauta_status']== "A"){ echo "checked"; } ?>>
            <input type="label" class="field-style align-right" disabled value="Ativo?">
        </li>
        <li>
            <input type="hidden" name="id" value="<?php echo $linha['astronauta_id']; ?>">
            <input class="field-style align-left" type="submit" value="gravar">
        </li>
    </ul>
</form>

<?php
}
