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
      <button class="navbar-toggler d-block d-lg-none" type="button" data-toggle="collapse" data-target="#navbarMenu" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
        <i>
          <svg width="35" height="20" viewBox="0 0 35 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <line x1="0.5625" y1="9.49902" x2="33.7125" y2="9.49902" stroke="white" />
            <line x1="1" y1="0.5" x2="34.15" y2="0.5" stroke="white" />
            <line x1="0.5625" y1="19.499" x2="33.7125" y2="19.499" stroke="white" />
          </svg>
        </i>
      </button>
    </div>
    <nav class="collapse links container d-lg-flex justify-content-lg-end" id="navbarMenu">
      <ul class="list-inline d-flex mb-0 p-4 p-lg-0 align-items-center flex-column flex-lg-row">
        <li class="mx-0 mx-lg-1 my-2 my-lg-0 d-flex"><a href="./index.php" class="<?= !$view ? 'active' : '' ?>">Início</a></li>
        <li class="mx-0 mx-lg-1 my-2 my-lg-0 d-flex"><a href="./index.php?view=quem-somos" class="<?= $view === "quem-somos" ? 'active' : '' ?>">Quem somos</a></li>
        <li class="mx-0 mx-lg-1 my-2 my-lg-0 d-flex"><a href="./index.php?view=normas-utilizacao" class="<?= $view === "normas-utilizacao" ? 'active' : '' ?>">Normas de utilização</a></li>
        <li class="mx-0 mx-lg-1 my-2 my-lg-0 d-flex"><a href="./index.php?view=contato" class="<?= $view === "contato" ? 'active' : '' ?>">Contato</a></li>
      </ul>
    </nav>
  </header>