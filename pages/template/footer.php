    <footer class="p-4 mt-5">
      <div class="container">
        <ul class="list-inline d-flex mb-4 justify-content-center">
          <li class="mr-3">
            <a href="https://www.facebook.com/" target="_blank">
              <img src="./assets/icons/facebook.svg" class="face" alt="Logomarca Facebook">
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
          <li class="ml-3">
            <a href="https://br.pinterest.com/" target="_blank">
              <img src="./assets/icons/pinterest.svg" alt="Logomarca Pinterest">
            </a>
          </li>
        </ul>
        <div class="row align-items-center justify-content-between logos">
          <a href="./index.php" class="col-6 justify-content-center">
            <img src="./assets/images/logo.png" alt="Logo Portal dos games, um controle preto retrô com alguns botões em vermelho">
          </a>
          <button class="navbar-toggler d-block d-lg-none" type="button" data-toggle="collapse" data-target="#navbarFooter" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
            <i>
              <svg width="35" height="20" viewBox="0 0 35 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <line x1="0.5625" y1="9.49902" x2="33.7125" y2="9.49902" stroke="white" />
                <line x1="1" y1="0.5" x2="34.15" y2="0.5" stroke="white" />
                <line x1="0.5625" y1="19.499" x2="33.7125" y2="19.499" stroke="white" />
              </svg>
            </i>
          </button>
        </div>
        <nav class="collapse links justify-content-end mt-4 mt-lg-0 mb-3 mb-lg-0" id="navbarFooter">
          <ul class="list-inline mb-0 d-flex flex-column align-items-center text-center">
            <li class="mb-4 d-flex"><a href="./index.php" class="<?= !$view ? 'active' : '' ?>">Início</a></li>
            <li class="mb-4 d-flex"><a href="./index.php?view=quem-somos" class="<?= $view === "quem-somos" ? 'active' : '' ?>">Quem somos</a></li>
            <li class="mb-4 d-flex"><a href="./index.php?view=normas-utilizacao" class="<?= $view === "normas-utilizacao" ? 'active' : '' ?>">Normas de utilização</a></li>
            <li class="mb-4 d-flex"><a href="./index.php?view=contato" class="<?= $view === "contato" ? 'active' : '' ?>">Contato</a></li>
          </ul>
        </nav>
      </div>
      <div class="container text-center mt-3 mt-lg-0">
        <small class="text-white">© portal dos games, todos os direitos reservados </small>
      </div>
    </footer>
    <script src="./assets/js/jquery-3.5.1.min.js"></script>
    <script src="./assets/js/bootstrap.bundle.min.js"></script>
    </body>

    </html>