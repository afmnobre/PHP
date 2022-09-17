<?php

$id = $_GET['id'];

$query = "SELECT * FROM foguetes WHERE foguete_id=".$id;
$foguetes = $conexao->query($query);
echo "<h4>Editar Foguete</h4>";

foreach($foguetes as $linha){
?>
<form name='foguetes' action='index.php?pagina=foguetes/alterar_foguetes' method='post' enctype='multipart/form-data' class="form-style">
    <ul>
        <li>
        <input type="text" name="txt_foguete_nome" value="<?php echo $linha['foguete_nome']; ?>" class="field-style field-split align-left">
        <input type="text" name="txt_foguete_pais" value="<?php echo $linha['foguete_pais']; ?>" class="field-style field-split align-right">
        </li>
        <li>
        <input type="text" name="txt_foguete_link" value="<?php echo $linha['foguete_link']; ?>" class="field-style field-split align-left">
        <input type="text" name="txt_foguete_status" value="<?php echo $linha['foguete_status']; ?>" class="field-style field-split align-right">
        </li>
        <li>
            <input type="file" name="img_foguete" placeholder="Link da Descrição do Foguete" class="field-style field-split align-left">
        </li>
        <li>
            <input type="hidden" name="id" value=<?php echo $id; ?>>
            <input class="field-style align-left" type="submit" value="Gravar">
        </li>
    </ul>
</form>
<?php
}
?>
