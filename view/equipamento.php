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
    <?php
       require  'navigation.php';
    ?>
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
