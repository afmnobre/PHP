<h1>Cadastro de Astronautas</h1>
<hr>
<form class="form-style" enctype="multipart/form-data" action="index.php?pagina=astronautas/gravar_astronautas" method="post">
    <ul>
        <li>
            <input class="field-style field-split align-left" placeholder="Nome do Astronauta" type="text" name="txt_astronauta_nome">
            <input class="field-style field-split align-right" placeholder="País de Origem" type="text" name="txt_astronauta_pais">
        </l1>
        <li>
            <input class="field-style field-split align-left" placeholder="Nome da Nave" type="text" name="txt_astronauta_nave">
            <input class="field-style field-split align-right" placeholder="Ano da Missão" type="text" name="txt_astronauta_data_lancamento">
        </l1>
        <li>
            <input class="field-style field-split align-left" placeholder="Link da Biografia" type="text" name="txt_astronauta_link">
            <input class="field-style field-split align-right" placeholder="Data da Morte" type="text" name="txt_astronauta_data_morte">
        </l1>
        <li>
            <h4>Fato Especial:</h4>
            <textarea name="txt_fato_especial" id="area" style="width:100%;height:100px;">
              Descreva uma curiosidade sobre o Astronauta.
            </textarea>
        </li>
        <li>
            <input class="field-style align-left" type="file" name="img_foto_astronauta" placeholder="Foto do Astronauta">
            <input class="field-style align-right"type="checkbox" name="status" value="A">
            <input type="label" disabled class="align-right" value="Ativo?">
        </li>
        <li>
            <input class="field-style align-left" type="submit" value="gravar">
        </li>
    </ul>
</form>
