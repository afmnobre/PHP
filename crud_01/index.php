<?php
# Base de dados
include 'db.php';

# Funções em PHP
include 'utils/funcoes.php';

# Cabeçalho da pagina
include 'header.php';

# Conteudo da Pagina
@$pagina = 'views/'.$_GET['pagina'].'.php';
echo $pagina;
if($pagina <> "views/.php"){include $pagina;}else{include "views/home.php";}

# Rodapé da Página
include 'footer.php';
