<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="./assets/css/styles.css">
  <link rel="shortcut icon" href="./assets/images/favicon.png" type="image/x-icon">
  <title>Portal dos Games</title>
</head>
<body>
  <header class="py-2 mb-5">
    <div class="container d-flex align-items-center justify-content-between">
      <a href="./index.php">
        <img src="./assets/images/logo.png" class="img-fluid" alt="Logo Portal dos games, um controle preto retrô com alguns botões em vermelho">
      </a>
      <nav>
        <ul class="list-inline d-flex mb-0">
          <li class="mx-1 d-flex"><a href="./index.php" class="<?= !$view ? 'active':'' ?>">Início</a></li>
          <li class="mx-1 d-flex"><a href="./index.php?view=quem-somos" class="<?= $view === "quem-somos"? 'active':'' ?>">Quem somos</a></li>
          <li class="mx-1 d-flex"><a href="./index.php?view=normas-utilizacao" class="<?= $view === "normas-utilizacao"? 'active':'' ?>">Normas de utilização</a></li>
          <li class="mx-1 d-flex"><a href="./index.php?view=contato" class="<?= $view === "contato"? 'active':'' ?>">Contato</a></li>
        </ul>
      </nav>
    </div>
  </header>