<?php
# Base de dados
include 'db.php';

# Cabeçalho da pagina
include 'header.php';

# Conteudo da Pagina
$pagina = 'views/'.$_GET['pagina'].'.php';
echo $pagina;
if($pagina <> ""){include $pagina;}

# Rodapé da Página
include 'footer.php';
