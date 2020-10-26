<?php
$view = filter_input(INPUT_GET, "view");

  include("./pages/template/header.php");
    switch ($view) {
      case 'acao-aventura':
        include("./pages/acao-aventura.php");
        break;
      case 'rpg':
        include("./pages/rpg.php");
        break;
      case 'pixel':
        include("./pages/pixel.php");
        break;
      case 'contato':
        include("./pages/contato.php");
      break;
      case 'quem-somos':
        include("./pages/quem-somos.php");
      break;
      case 'normas-utilizacao':
        include("./pages/normas-utilizacao.php");
      break;
      case 'terror':
        include("./pages/terror.php");
      break;
      default:
        include("./pages/home.php");
        break;
    }
  include("./pages/template/footer.php"); 
?>
