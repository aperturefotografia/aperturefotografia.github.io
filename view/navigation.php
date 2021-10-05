<nav class="navbar navbar-expand-sm  navbar-dark fixed-top">
            <a class="navbar-brand" href="../index.php" ><img src="../assets/logo.png" alt="Logo do site" style="height: 20px; margin-right: 10px;">Aperture Fotografia</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="collapsibleNavbar">
              <ul class="navbar-nav ">
                <li class="nav-item">
                    <a class="nav-link" href="/view/retratos.php">Projetos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/view/sobre.php">Sobre</a>
                  </li>
                <li class="nav-item">
                  <a class="nav-link" href="/view/equipamento.php">Equipamento</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/view/loja.php">Loja</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/view/contato.php">Contato</a>
                </li>    
                <li class="nav-item">
                <?php if(isset($_SESSION['login'])) : ?>
                  <a class="nav-link" href="/controller/logout.php">Logout</a>
                <?php else : ?>
                   <a class="nav-link" href="/view/login.php">Login</a>
                <?php endif; ?>
                
                </li>
              </ul>
            </div>  
          </nav>