<?php
$view = filter_input(INPUT_GET, "view");

include("./pages/template/header.php");
switch ($view) {
  case 'acao_aventura':
    include("./pages/conteudo_acao_aventura.php");
    break;

  case 'contato':
    include("./pages/contato.php");
    break;
  case 'home':
    include("./pages/home.php");
    break;
  case 'quem_somos':
    include("./pages/quem_somos.php");
    break;
  default:
    include("./pages/home.php");
    break;
}
include("./pages/template/footer.php");
