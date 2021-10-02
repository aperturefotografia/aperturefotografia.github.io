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
        <?php 
        session_start ();
        if(!isset($_SESSION["login"]))
        
          header("location: /view/login.php"); 
        ?>
    </head>
    <body id="page-top">
        <nav class="navbar navbar-expand-sm  navbar-dark fixed-top">
            <a class="navbar-brand" href="../index.html" ><img src="../assets/logo.png" alt="Logo do site" style="height: 20px; margin-right: 10px;">Aperture Fotografia</a>
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
              <a class="nav-link" href="/model/logout.php">Logout</a>
              </li>  
              </ul>
            </div>  
          </nav>

        <section class="content" id="projetos">
         <div class="container px-4 px-lg-5">
                
            <div class="row gx-0 mb-4 mb-lg-5 align-items-center">
                <div class="col-xl-6 col-lg-6"><figure><img class="img-fluid hover-shadow cursor " src="../assets/img/camera.png" alt="..."  />
                    <figcaption class="text-light">Camera -  Canon EOS 5D Mark IV</figcaption></figure>
                </div>
                <div class="col-xl-6 col-lg-6"><figure>
                    <img class="img-fluid hover-shadow cursor" src="../assets/img/lente35mm.png" alt="..."/>
                    <figcaption class="text-light">Lente -  Canon EF 16-35mm f/2.8L III USM Lens</figcaption></figure>
                </div>
                    
                </div>
                
            </div>
        </section>

        <footer class="footer bg-black small text-center text-white-50"><div class="container px-4 px-lg-5"> &copy; Aperture Fotografia 2021</div></footer>
        <script src="js/scripts.js"></script>

    </body>
</html>
