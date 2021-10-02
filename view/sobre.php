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
    <link href="css/modal.css" rel="stylesheet" />
    <link href="https://kit-pro.fontawesome.com/releases/v5.15.2/css/pro.min.css" rel="stylesheet">
    <?php 
        session_start ();
        if(!isset($_SESSION["login"]))
        
          header("location: /view/login.php"); 
        ?>
</head>
<body id="page-top">
<nav class="navbar navbar-expand-sm  navbar-dark fixed-top">
    <a class="navbar-brand" href="index.html"><img src="assets/logo.png" alt="Logo do site"style="height: 20px; margin-right: 10px;">Aperture Fotografia</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
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


<section class="content">

    <div id="quemsomos" class="pt-5 pb-5 mr-5 ml-5">
        <div class="row pb-5">
            <div class="col-12 col-lg-8 align-self-top text">
                <div class="row intro m-0">
                    <div class="col-12 p-0 ">
                        <h2 class="text-primary"><span><span>Quem</span></span> <strong>nós</strong> somos</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 p-0 pr-md-5">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras iaculis diam varius diam ultricies lacinia. <b>Mauris lacus tellus, ultrices eu volutpat sit amet, finibus a ipsum.</b> Nullam sit amet pretium felis.</p>
                        <p>Curabitur convallis, diam a egestas iaculis, neque lorem interdum felis, in viverra lacus tortor in leo.</p>
                        <p>Donec tristique diam id mi venenatis facilisis eget sed mi. Phasellus malesuada nulla diam, a dignissim quam congue et.</p>
                        <p><b>Cras sem ante, accumsan quis sem sed, rutrum varius nunc.</b></p>
                    </div>
                </div>
            </div>
            <div>
                <div class="valores mt-5 mt-lg-0">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-center align-items-center">
                          <i class="fas fa-rocket"></i>
                            <div class="list-group-content">
                                <h4>Missão</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </li>
                        <li class="list-group-item d-flex justify-content-center align-items-center">
                            <i class="fas fa-eye"></i>
                            <div class="list-group-content">
                                <h4>Visão</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </li>
                        <li class="list-group-item d-flex justify-content-center align-items-center">
                           <i class="fas fa-gift"></i>
                            <div class="list-group-content">
                                <h4>Valores</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div id="nossos-resultados">
        <div  class="row pt-5 mr-5 ml-5">
            <div class="col-12 col-md-6 pr-md-5 align-self-top text ">
                <div class="row intro m-0 m-md-auto">
                    <div class="col-12 p-0">
                        <span class="m-0">Agregando valor</span>
                        <h2 class="text-primary"><span class="font-weight-bold"><span>Nossos</span></span> Resultados</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras iaculis diam varius diam ultricies lacinia.</p>
                        <p>Mauris lacus tellus, ultrices eu volutpat sit amet, finibus a ipsum.</p>
                        <p>Curabitur convallis, diam a egestas iaculis, neque lorem interdum felis, in viverra lacus tortor in leo.</p>
                        <blockquote>Donec tristique diam id mi venenatis facilisis eget sed mi. Phasellus malesuada nulla diam, a dignissim quam.</blockquote>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 pr-md-5 align-self-top text">
                <div class="row items">
                    <div class="col-12 col-md-6 p-0 pr-md-4 mb-2 item">
                        <div class="numeros">
                            <span>15</span>
                        </div>
                        <h4>Certificações</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
                    </div>
                    <div class="col-12 col-md-6 p-0 pr-md-4 mb-2">
                        <div class="numeros">
                            <span>20</span>
                        </div>
                        <h4>Colaboradores</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6 p-0 pr-md-4 mb-2">
                        <div class="numeros">
                            <span>200</span>
                        </div>
                        <h4>Clientes</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
                    </div>
                    <div class="col-12 col-md-6 p-0 pr-md-4 mb-2">
                        <div class="numeros">
                            <span>3</span>
                        </div>
                        <h4>Países atendidos</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

</body>
</html>
