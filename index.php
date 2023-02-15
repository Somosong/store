<!--A Design by W3layouts
   Author: W3layout
   Author URL: http://w3layouts.com
   -->
<?php $title="Somosong"?>
<!DOCTYPE html>
   <?php include 'includes/head.php'?>
   <body>
      <div class="header-outs" id="home">
         <div class="header-w3layouts">
            <div class="container">
               <div class="right-side">
                  <p>
                  <form action="login.php" method="post">
                     <button type="submit" id="iniciarsesion" type="button">
                     <span aria-hidden="true"></span>
                     Iniciar Sesion</button>
                     <button id="trigger-overlay" type="button">
                     <span class="fa fa-bars" aria-hidden="true"></span>
                     </button>
                  </p>
               </div>
               <!-- open/close -->
               <div class="overlay overlay-hugeinc">
                  <button type="button" class="overlay-close">Close</button>
                  <nav>
                     <ul>
                        <li><a href="index.php" >Pagina Principal</a></li>
                        <li><a href="about.php" >Sobre Nosotros</a></li>
                        <li><a href="exclusive.php" >Exclusivo</a></li>
                        <li><a href="contact.php"  >Contactanos</a></li>
                     </ul>
                  </nav>
               </div>
               <div class="hedder-logo">
                  <h1><a href="index.php">   
                     <img src="dragon_hunt/images/logo.png" class="img-fluid" alt="Responsive image">SO</a>
                  </h1>
               </div>
               <!-- /open/close -->
               <!-- /navigation section -->
               
            </div>
            <div class="clearfix"> </div>
         </div>
         <!--banner-->
         
         <div class="slides text-center">
            
            <div class="slide slide--current one-img ">
               <div class="slider-up">
                  <br><br><br>
                  <h5><b>Somo</b><span class="fab fa-d-and-d"></span ><b>song</b></h5>
                  
                  <div class="outs_more-buttn">
                     <a href="exclusive.php">Empezar Compra</a>
                  </div>
               </div>
            </div>
            <div class="clearfix"></div>
         </div>
         <div class="clearfix"></div>
      </div>
      <!--//banner-->
      <!--Footer -->   
      <?php include 'includes/footer.php'; ?>
      <!-- js working-->
      <script src='dragon_hunt/js/jquery-2.2.3.min.js'></script>
      <!--//js working-->
      <!-- For-Banner -->
      <script src="dragon_hunt/js/imagesloaded.pkgd.min.js"></script>
      <script src="dragon_hunt/js/anime.min.js"></script>
      <script src="dragon_hunt/js/uncover.js"></script>
      <script src="dragon_hunt/js/demo1.js"></script>
      <!-- //For-Banner -->
      <!--nav menu-->
      <script src="dragon_hunt/js/classie.js"></script>
      <script src="dragon_hunt/js/demonav.js"></script>
      <!-- //nav menu-->
      <!-- bootstrap working-->
      <script src="dragon_hunt/js/bootstrap.min.js"></script>
      <!-- // bootstrap working--> 
   </body>
</html>