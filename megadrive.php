<?php
  require_once('./persistence/gamelist_mega.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
  <!-- Site produzido por André Rodrigues - 2020 - Twitter @andrerodrigues. -->
    <title>PowerGame &mdash; Mega Drive</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300i,400,700" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/lightgallery.min.css">    
    
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    
    <link rel="stylesheet" href="css/swiper.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>
  
  <div class="site-wrap">

    
    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    

    <header class="site-navbar py-3" role="banner">
      
      


      <div class="container">
        <div class="row align-items-center">
          
          <!-- <div class="col-6 col-xl-2">
            <a href="index.php" class="text-black h2 mb-0"><img src="./Images/megadrive.png" alt="PowerGame" width=146 height=95 ></a>
          </div> -->
          <div class="col-10 col-md-8 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right text-lg-center" role="navigation">

              <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
                <li class="active"><a href="index.php">Home</a></li>
                <li class="has-children">
                  <a href="#">Consoles</a>
                  <ul class="dropdown">
                    <li><a href="atari.php?console=atari">Atari</a></li>
                    <li><a href="gba.php?console=gba">Game Boy Advanced</a></li>
                    <li><a href="megadrive.php?console=megadrive">Mega Drive</a></li>
                    <li><a href="snes.php?console=snes">Super Nes</a></li>
                    <li><a href="psx.php?console=psx">Play Station 1</a></li>
                    <li><a href="social.html">Social</a></li> 
                    <li><a href="places.html">Lugares</a></li>        
                  </ul>
                </li>
                <li><a href="#">Videos</a></li>
                <li><a href="#">Manuais</a></li>
                <li><a href="contact.html">Contato</a></li>
              </ul>
            </nav>
          </div>

          <div class="col-6 col-xl-2 text-right">
            <div class="d-none d-xl-inline-block">
              <ul class="site-menu js-clone-nav ml-auto list-unstyled d-flex text-right mb-0" data-class="social">
                <li>
                  <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                </li>
                <li>
                  <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                </li>
                <li>
                  <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                </li>
                <li>
                  <a href="#" class="pl-3 pr-3"><span class="icon-youtube-play"></span></a>
                </li>
              </ul>
            </div>

            <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

          </div>

        </div>
      </div>
      
    </header>

    <!-- <div class="site-blocks-cover overlay inner-page-cover" style="background-Image: url('./Images/console/megadrive.png');" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-2 text-center" data-aos="fade-up">
            <h1>Mega Drive</h1>
            <p class="caption">jogos / Mega Drive</p>
          </div>
        </div>
      </div>
    </div> -->

    <div class="site-section" data-aos="fade">
      <div class="container">
        <div class="row mb-5">
            <div class="col-12 ">
              <h4 class="site-section-heading text-center">Mega Drive</h4>
            </div>
          </div>
          <div class="row">

              <?php foreach ($result as $row) {?>
              <!-- <p><?php echo $row['image'];?></p> -->
              <div class="col-md-6">
              <h5><?php echo $row['name'];?></h5>
                <div class="site-block-half d-lg-flex">
                  <div class="image" style="background-image: url('<?php echo "./roms/megadrive/".$row['thumbnail'];?>')">
                  <!-- roms\megadrive\images\3-in-1 Road Rash - Ms. Pac-Man - Block Out [p1][!]-thumb.png -->
                </div>
                  <div class="text">
                    <form action="./roms/megadrive/index.php" method="post" target = "_blank" > 
                      <input type="hidden" name="rom" value="<?php echo $row['path'];?>"> 
                      <input type="hidden" name="id" value="<?php echo $row['id_game'];?>"> 
                       <h6><?php echo $row['descr'];?></h6>
                      <button style ="background-color: #008CBA;
                        margin-top: 0px;
                        border: none;
                        color: white;
                        padding: 5px 45%;
                        text-align: center;
                        text-decoration: none;
                        display: inline-block;
                        font-size: 16px;
                        border-radius: 15px;
                        "type="submit">Jogar
                      </button> 
                    </form>
                  </div>
              </div>
          </div><?php }?>
      </div>
      <?php require_once('./persistence/paginacao.php'); ?>
    </div>
  </div>


    <div class="py-3 mb-5 mt-5">
     <div class="container">
       <div class="row">
         <div class="col-md-12 d-md-flex align-items-center" data-aos="fade">
           <h2 class="text-black mb-5 mb-md-0 text-center text-md-left">Deseja deixar uma sugestão ?</h2>
           <div class="ml-auto text-center text-md-left">
            <a href="contact.html" class="btn btn-danger py-3 px-5 rounded">Contate-me</a>
           </div>
         </div>
       </div>
     </div>
   </div>


  

  <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="mb-5">
              <h3 class="footer-heading mb-4">Sobre o Game</h3>
              <p>Oi, ipsiloriumipsilorium!<br>
              ipsiloriumipsilorium<br> ipsilorium.<br>
              ipsiloriumipsiloriumipsiloriumipsiloriumipsiloriumipsilorium.
              </p>
            </div>
          </div>
          <div class="col-lg-4 mb-5 mb-lg-0">
            <div class="row mb-5">
              <div class="col-md-12">
                <h3 class="footer-heading mb-4">Navegação</h3>
              </div>
              <div class="col-md-6 col-lg-6">
                <ul class="list-unstyled">
                  <li><a href="index.php">Home</a></li>                  
                  <li><a href="services.html">Serviços</a></li>
                </ul>
              </div>
              <div class="col-md-6 col-lg-6">
                <ul class="list-unstyled">
                  <li><a href="#">Sobre Game</a></li>
                  <li><a href="#">Privacidade</a></li>
                  <li><a href="contact.html">Contate-me</a></li>
                  <li><a href="#">Termos</a></li>
                </ul>
              </div>
            </div>


          </div>

          <div class="col-lg-4 mb-5 mb-lg-0">
            <h3 class="footer-heading mb-4">Me Siga</h3>

                <div>
                  <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                  <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                  <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                  <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
                </div>

            

          </div>
          
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p>
            
            Copyright &copy; 2020 Todos os direitos reservados 
            
            </p>
          </div>
          
        </div>
      </div>
    </footer>


    
    
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/swiper.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/picturefill.min.js"></script>
  <script src="js/lightgallery-all.min.js"></script>
  <script src="js/jquery.mousewheel.min.js"></script>

  <script src="js/main.js"></script>
  
  <script>
    $(document).ready(function(){
      $('#lightgallery').lightGallery();
    });
  </script>
    
  </body>
</html>