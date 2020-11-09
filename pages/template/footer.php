    <footer class="p-4 mt-5">
      <div class="container d-flex align-items-center justify-content-between">
        <a href="./index.php">
          <img src="./assets/images/logo.png" class="img-fluid" alt="Logo Portal dos games, um controle preto retrô com alguns botões em vermelho">
        </a>
        <ul class="list-inline d-flex mb-auto">
          <li class="mx-3">
            <a href="https://www.facebook.com/" target="_blank">
            <img src="./assets/icons/facebook.svg" alt="Logomarca Facebook">
          </a>
          </li>
          <li class="mx-3">
            <a href="https://www.instagram.com/" target="_blank">
              <img src="./assets/icons/instagram.svg" alt="Logomarca Instagram">
            </a>
          </li>
          <li class="mx-3">
            <a href="https://twitter.com/login" target="_blank">
              <img src="./assets/icons/twitter.svg" alt="Logomarca Twitter">
            </a>
          </li>
          <li class="mx-3">
            <a href="https://br.pinterest.com/" target="_blank">
              <img src="./assets/icons/pinterest.svg" alt="Logomarca Pinterest">
            </a>
          </li>
        </ul>
        <nav>
          <ul class="list-inline mb-0 d-flex flex-column align-items-center">
          <li class="mb-4 d-flex"><a href="./index.php" class="<?= !$view ? 'active':'' ?>">Início</a></li>
          <li class="mb-4 d-flex"><a href="./index.php?view=quem-somos" class="<?= $view === "quem-somos"? 'active':'' ?>">Quem somos</a></li>
          <li class="mb-4 d-flex"><a href="./index.php?view=normas-utilizacao" class="<?= $view === "normas-utilizacao"? 'active':'' ?>">Normas de utilização</a></li>
          <li class="mb-4 d-flex"><a href="./index.php?view=contato" class="<?= $view === "contato"? 'active':'' ?>">Contato</a></li>
          </ul>
        </nav>
      </div>
      <div class="container">
        <small class="text-white">© portal dos games, todos os direitos reservados </small>
      </div>
    </footer>
    <script src="./assets/js/jquery-3.5.1.min.js"></script>
    <script src="./assets/js/bootstrap.bundle.min.js"></script>
  </body>
</html>