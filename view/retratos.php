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
        <link href="/view/css/styles.css" rel="stylesheet" />
        <link href="/view/css/modal.css" rel="stylesheet" />
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
                    <div class="col-xl-8 col-lg-7"><img class="img-fluid hover-shadow cursor " src="../assets/img/dreamcatcher_summer_holiday_teaser_2_all_group.jpg" alt="1" onclick="openModal();currentSlide(1)" /></div>
                    <div class="col-xl-4 col-lg-5">
                        <img class="img-fluid hover-shadow cursor" src="../assets/img/dreamcatcher_summer_holiday_teaser_2_handong.jpg" alt="2" onclick="openModal();currentSlide(2)" /></div>
                </div>
                
                <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                    <div class="col-lg-6"><img class="img-fluid hover-shadow cursor" src="../assets/img/dreamcatcher_summer_holiday_teaser_2_dami.jpg" alt="..." onclick="openModal();currentSlide(3)"/></div>
                    <div class="col-lg-6">
                                <img class="img-fluid hover-shadow cursor" src="../assets/img/dreamcatcher_summer_holiday_teaser_2_gahyeon.jpg" alt="..." onclick="openModal();currentSlide(4)"/>
                           
                    </div>
                </div>
                
                <div class="row gx-0 justify-content-center">
                    <div class="col-lg-6"><img class="img-fluid hover-shadow cursor" src="../assets/img/dreamcatcher_summer_holiday_teaser_2_jiu.jpg" alt="..." onclick="openModal();currentSlide(6)"/></div>
                    <div class="col-lg-6 order-lg-first">
                                <img class="img-fluid hover-shadow cursor" src="../assets/img/dreamcatcher_summer_holiday_teaser_2_siyeon.jpg" alt="..." onclick="openModal();currentSlide(5)"/>

                    </div>
                </div>
                <div class="row gx-0 justify-content-center">
                    <div class="col-lg-6"><img class="img-fluid hover-shadow cursor" src="../assets/img/dreamcatcher_summer_holiday_teaser_2_sua.jpg" alt="..." onclick="openModal();currentSlide(8)"/></div>
                    <div class="col-lg-6 order-lg-first"><img class="img-fluid hover-shadow cursor" src="../assets/img/dreamcatcher_summer_holiday_teaser_2_yoohyeon.jpg" alt="..." onclick="openModal();currentSlide(7)"/>                       
                    </div>
                </div>
            </div>
        </section> 
   
        <div id="myModal" class="modal">
            <span class="close cursor" onclick="closeModal()">&times;</span>
            <div >
          
              <div class="mySlides modal-content-wide">
                <div class="numbertext">1 / 8</div>
                <img  src="../assets/img/dreamcatcher_summer_holiday_teaser_2_all_group.jpg" style="width:100%">
              </div>
          
              <div class="mySlides modal-content">
                <div class="numbertext">2 / 8</div>
                <img src="../assets/img/dreamcatcher_summer_holiday_teaser_2_handong.jpg" style="width:100%">
              </div>
          
              <div class="mySlides modal-content">
                <div class="numbertext">3 / 8</div>
                <img src="../assets/img/dreamcatcher_summer_holiday_teaser_2_dami.jpg" style="width:100%">
              </div>
              
              <div class="mySlides modal-content">
                <div class="numbertext">4 / 8</div>
                <img src="../assets/img/dreamcatcher_summer_holiday_teaser_2_gahyeon.jpg" style="width:100%">
              </div>
              <div class="mySlides modal-content">
                <div class="numbertext">5 / 8</div>
                <img  src="../assets/img/dreamcatcher_summer_holiday_teaser_2_siyeon.jpg" style="width: 100%;">
              </div>
          
              <div class="mySlides modal-content">
                <div class="numbertext">6 / 8</div>
                <img src="../assets/img/dreamcatcher_summer_holiday_teaser_2_jiu.jpg" style="width:100%">
              </div>
          
              <div class="mySlides modal-content">
                <div class="numbertext">7 / 8</div>
                <img src="../assets/img/dreamcatcher_summer_holiday_teaser_2_yoohyeon.jpg" style="width:100%">
              </div>
              
              <div class="mySlides modal-content">
                <div class="numbertext">8 / 8</div>
                <img src="../assets/img/dreamcatcher_summer_holiday_teaser_2_sua.jpg" style="width:100%">
              </div>
              <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
              <a class="next" onclick="plusSlides(1)">&#10095;</a>
          
            </div>

        <footer class="footer bg-black small text-center text-white-50"><div class="container px-4 px-lg-5"> &copy; Aperture Fotografia 2021</div></footer>
        <script src="../js/scripts.js"></script>

    </body>
</html>
