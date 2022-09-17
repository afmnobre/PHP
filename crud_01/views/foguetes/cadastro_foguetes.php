<h1>Cadastro de Modelos de Foguetes</h1>
<hr>
<form name='foguetes' action='index.php?pagina=foguetes/gravar_foguetes' method='post' enctype='multipart/form-data' class="form-style">
    <ul>
        <li>
            <input type="text" placeholder="Nome do Foguete" class="field-style field-split align-left" name="txt_foguete_nome">
            <input type="text" placeholder="Foguete País" class="field-style field-split align-right" name="txt_foguete_pais">
        </li>
        <li>
            <input type="text" placeholder="Link da Descrição do Foguete" class="field-style field-split align-left" name="txt_foguete_link">
            <input type="text" placeholder="Status do Foguete - Ativo / Aposentado / Em Desenvolvimento" class="field-style field-split align-right" name="txt_foguete_status">
        </li>
        <li>
            <input type="file" placeholder="Link da Descrição do Foguete" class="field-style field-split align-left" name="img_foguete">
            <!--<input type="checkbox" placeholder="" class="field-style align-right" name="incluir_foto" value="incluir">
                <input type="label" disabled class="align-right" value="Incluir Foto?">-->
        </li>
        <li>
            <input class="field-style align-left" type="submit" value="Gravar">
        </li>
    </ul>
</form>
