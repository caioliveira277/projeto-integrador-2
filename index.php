<?php 
  $view = filter_input(INPUT_GET, "view");

  include("./pages/template/header.php");
    switch ($view) {
      case 'acao_aventura':
        include("./pages/conteudo_acao_aventura.php");
        break;
      
      default:
        include("./pages/home.php");
        break;
    }
  include("./pages/template/footer.php"); 
?>