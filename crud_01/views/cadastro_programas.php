<h1>Cadastro de Programas Espaciais</h1>
<hr>

<form action="index.php?pagina=gravar_programa" method="GET">
    Titulo: <input type="text" name="txt_programa_nome">
    <input type="text" name="txt_programa_anoinicio" placeholder="Ano Inicio">
    <input type="text" name="txt_programa_anofim" placeholder="Ano fim">
    Link do Programa: <input type="txt_programa_link">
    <div id="sample">
    <h4>Descrição sobre o Programa:</h4>
    <textarea name="txt_programa_descricao" id="area" style="width:70%;height:200px;">
       Some Initial Content was in this textarea
    </textarea>
    </div>
    Upload de Imagem: <input type="file" name="img_programa">
    <input type="reset" value="Limpar">
    <input type="submit" value="Gravar">
</form>
