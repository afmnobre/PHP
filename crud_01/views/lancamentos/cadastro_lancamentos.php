<h1>Cadastro de Futuros Lançamentos</h1>
<hr>


<form class="form-style" name="lancamentos" method="post" action="index.php?pagina=lancamentos/gravar_lancamentos">
    <ul>
        <li>
            <input class="field-style field-split align-left" type="text" name="txt_data_lancamento" placeholder="DD/MM/AAAA">

            <select class="field-style field-split align-right" name="cmb_status">
                <option value="">Ativo?</option>
                <option value="">------</option>
                <option value="S">Sim</option>
                <option value="N">Não</option>
            </select>
        </li>
        <li>
            <h4>Especificação sobre o Lançamento:</h4>
            <textarea name="txt_texto_lancamento" id="area" style="width:100%;height:200px;">
                Descreva o que ocorrera da data cadastrada.
            </textarea>
        </li>
        <li>
            <input type="submit" value="Gravar">
        </li>
</form>
