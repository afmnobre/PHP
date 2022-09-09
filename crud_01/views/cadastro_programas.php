<h1>Cadastro de Programas Espaciais</h1>
<hr>
<form class="form-style" enctype="multipart/form-data" action="index.php?pagina=gravar_programa" method="post">
    <ul>
        <li>
            <input class="field-style field-split align-left" placeholder="Título" type="text" name="txt_programa_nome">
            <input class="field-style field-split align-right" type="text" name="txt_programa_anoinicio" placeholder="Ano Inicio">
        </li>
        <li>
            <input class="field-style field-split align-left" type="text" name="txt_programa_link" placeholder="Link do Programa">

            <input class="field-style field-split align-right" type="text" name="txt_programa_anofim" placeholder="Ano fim">
        </li>
        <li>
                <h4>Descrição sobre o Programa:</h4>
                <textarea class="field-style" name="txt_programa_descricao" id="area" style="width:100%;height:200px;">
                    Coloque a descrição do programa espacial.
                </textarea>
        </li>
        <li>
            <input class="field-style" type="file" name="img_programa" placeholder="Imagem do Programa">
        </li>
        <li>
            <input type="hidden" name="pagina" value="index.php?pagina=gravar_programa">
            <input type="submit" value="Gravar">
        </li>
    </ul>
</form>

