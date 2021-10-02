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
    <a class="navbar-brand" href="../index.html"><img src="../assets/logo.png" alt="Logo do site"style="height: 20px; margin-right: 10px;">Aperture Fotografia</a>
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
            <a class="nav-link" href="/controller/logout.php">Logout</a>
            </li>
        </ul>
    </div>
</nav>

<section class="content" id="contato">
    <iframe class="pb-5" src="https://snazzymaps.com/embed/333893" width="100%" height="600px" style="border:none;"></iframe>

    <div class="container">
        <div class="row">
            <div class="col-lg-7">

                <div class="offset-anchor" id="contact-sent"></div>


                <h2 class="font-weight-bold text-7 mt-2 mb-0">Contate-nos</h2>
                <p class="mb-4 font-italic">Sinta-se livre para detalhes, não fique com nenhuma dúvida.</p>

                <form>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="form-label mb-1 text-2">Nome Completo</label>
                            <input type="text" maxlength="100" class="form-control text-3 h-auto py-2" name="name" id="name" required="true">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="form-label mb-1 text-2">Endereço de Email</label>
                            <input type="email" maxlength="100" class="form-control text-3 h-auto py-2" name="email" id="email" required="true">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label class="form-label mb-1 text-2">Assunto</label>
                            <select class="form-control text-3 h-auto py-2" name="assunto" id="assunto" required="true">
                                <option value="">Orçamento</option>
                                <option value="">Dúvidas</option>
                                <option value="outros">Outros</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label class="form-label mb-1 text-2">Anexar arquivo</label>
                            <input class="form-control d-block" type="file" name="anexo" id="anexo">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12 mb-4">
                            <label class="form-label mb-1 text-2">Mensagem</label>
                            <textarea maxlength="5000"  rows="6" class="form-control text-3 h-auto py-2" name="message" id="message" required=""></textarea>
                        </div>
                    </div>


                    <div class="row">
                        <div class="form-group col-md-12">
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12 mb-5">
                            <input type="submit" value="Enviar mensagem" class="btn btn-primary btn-modern pull-right p-3" data-loading-text="Carregando...">
                        </div>
                    </div>
                </form>

            </div>

            <div class="col-lg-5">

                <div class="overflow-hidden mb-1">
                    <h4 class="text-primary mb-0">Fale <strong>Conosco</strong></h4>
                </div>
                <div class="overflow-hidden mb-3">
                    <p class="text-4 mb-0">Mussum Ipsum, cacilds vidis litro abertis. Si num tem leite então bota uma pinga aí cumpadi! Admodum accumsan disputationi eu sit. Vide electram sadipscing et per. Quem manda na minha terra sou euzis! Detraxit consequat et quo num tendi nada.</p>
                </div>
                <div class="overflow-hidden">
                    <p class="mb-0" >Mussum Ipsum, cacilds vidis litro abertis. Si num tem leite então bota uma pinga aí cumpadi! Admodum accumsan disputationi eu sit. Vide electram sadipscing et per. Quem manda na minha terra sou euzis! Detraxit consequat et quo num tendi nada.</p>
                </div>

                <div>
                    <h4 class="text-primary pt-5">Nosso <strong>escritório</strong></h4>
                    <ul class="contato-detalhes mt-2">
                        <li><i class="fas fa-map-marker-alt top-6"></i> <strong>Endereço:</strong> Avenida Tiaraju, 810, Ibirapuitã, Alegrete-RS</li>
                        <li><i class="fas fa-phone top-7"></i> <strong>Telefone:</strong> (55) 3421-8400</li>
                        <li><i class="fas fa-envelope top-6"></i> <strong>Email:</strong> <a href="mailto:contato@aperture.com">contato@aperture.com</a></li>
                    </ul>

                    <h4 class="text-primary pt-5">Horário de <strong>atendimento</strong></h4>
                    <ul class="contato-detalhes mt-2">
                        <li><i class="far fa-clock top-6"></i> Segunda - Sexta - 9:00 às 18:00</li>
                        <li><i class="far fa-clock top-6"></i> Sábado - 9:00 ao 12:00</li>
                        <li><i class="far fa-clock top-6"></i> Domingo - Fechado</li>
                    </ul>
                </div>

            </div>
        </div>


    </div>



</section>
</body>
</html>
