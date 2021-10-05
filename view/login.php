<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Aperture Fotografia</title>
        <link rel="icon" type="image/x-icon" href="assets/logo.png" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <link href="css/styles.css" rel="stylesheet" />
      
       
    </head>
    <body id="page-top">
        <nav class="navbar navbar-expand-sm  navbar-dark fixed-top">
            <a class="navbar-brand" href="#page-top" ><img src="../assets/logo.png" alt="Logo do site" style="height: 20px; margin-right: 10px;">Aperture Fotografia</a>
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
                 
              </ul>
            </div>  
          </nav>

        <section class="content" id="login">
         <div class="container px-4 px-lg-5">
          
          <div class="col-lg-3 col-md-2"></div>
          <div class="col-lg-6 col-md-8 login-box">
              <div class="col-lg-12 login-key">
                  
              </div>
              <div class="col-lg-12 login-title">
                  Faça seu login
              </div>

              <div class="col-lg-12 login-form">
                  <div class="col-lg-12 login-form">
                      <form action="/model/login_function.php" method="POST">
                        <div class="form-group">
                          <label class="form-control-label" for="username">Nome de Usuário</label>
                          <input
                            type="text"
                            class="form-control"
                            id="username"
                            name="username"
                          />
                        </div>
                        
                        <div class="form-group">
                          <label class="form-control-label" for="password">Senha</label>
                          <input
                            type="password"
                            class="form-control"
                            id="password"
                            name="password"
                          />
                        </div>
                    
                          <div class="col-lg-12  login-button">
                         
                          <input type="submit" name="sub" value="Login" class="btn btn-outline-light a" />
                          <p class="text-light">Novo usuário? <a href="cadastro.php">Faça seu cadastro</a></p>
                        </div>
                        <?php 
                            if(isset($_REQUEST["err"]))
                            $msg="Usuário ou senha inválido.";
                        ?>
                            <p style="color:red;">
                        <?php if(isset($msg))
                            {
                                
                            echo $msg;
                            }
                            ?>

                            </p>
                      </form>
                  </div>
              
                  <div class="col-lg-12 login-key">
                  
                  </div>
        





            </div>
        </section>

        <footer class="footer bg-black small text-center text-white-50"><div class="container px-4 px-lg-5"> &copy; Aperture Fotografia 2021</div></footer>
        <script src="../js/scripts.js"></script>

    </body>
</html>

  <body>
    <div class="container px-4 px-lg-5">
      <div class="row col-md-6 col-md-offset-3">
        <div class="panel panel-primary">
      
      
        </div>
      </div>
    </div>
    
 
</div>
  </body>
</html>