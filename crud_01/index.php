<?php
# Base de dados
include 'db.php';

# Cabeçalho da pagina
include 'header.php';

# Conteudo da Pagina
$pagina = 'views/'.$_GET['pagina'].'.php';
if($pagina <> ""){
    include $pagina;
}

# Rodapé da Página
include 'footer.php';
