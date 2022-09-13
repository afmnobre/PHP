<h1>Alterar Lançamentos</h1>
<hr>

<?php
$id = $_GET['id'];

$query = "SELECT * FROM calendario WHERE calendario_id=".$id;

$calendario = $conexao->query($query);

foreach($calendario as $linha){
?>

<form class="form-style" name="lancamentos" method="post" action="index.php?pagina=alterar_lancamentos">
    <ul>
        <li>
            <?php
                $data = explode("-",$linha['calendario_data']);
                $datamostrar = $data[2]."/".$data[1]."/".$data[0];
            ?>
                <input class="field-style field-split align-left" type="text" name="txt_data_lancamento" value="<?php echo $datamostrar; ?>">
            <select class="field-style field-split align-right" name="cmb_status">
                <option value="">Ativo?</option>
                <option value="">------</option>
                <option value="S" <?php if($linha['calendario_status'] =="S"){echo "selected";} ?>>Sim</option>
                <option value="N" <?php if($linha['calendario_status'] =="N"){echo "Selected";} ?>>Não</option>
            </select>
        </li>
        <li>
            <h4>Especificação sobre o Lançamento:</h4>
            <textarea name="txt_texto_lancamento" id="area" style="width:100%;height:200px;">
                <?php echo $linha['calendario_texto']; ?>
            </textarea>
        </li>
        <li>
            <input type="hidden" name="id" value="<?php echo $linha['calendario_id']; ?>">
            <input type="submit" value="Alterar">
        </li>
</form>

<?php
}

