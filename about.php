<!--A Design by W3layouts
   Author: W3layout
   Author URL: http://w3layouts.com
   -->
   <?php $title="Sobre nosotros"?>
<!DOCTYPE html>
<?php include 'includes/head.php';include 'includes/dbConn.php';
      $stmt = "SELECT * FROM about";
      $data = mysqli_query($con,$stmt)?>
   <body>
      <!--headder-->
      <div class="header-outs">
         <div class="header-w3layouts">
            <div class="container">

               <?php include 'includes/button.php'?>
               <!-- /open/close -->
               <!-- /navigation section -->
            </div>
            <div class="clearfix"> </div>
         </div>
      </div>
      <!--//headder-->
      <!-- banner -->
      <div class="inner_page-banner">
      </div>
      <!--//banner -->
      <!--about-->
      <section class="about-inner py-lg-4 py-md-3 py-sm-3 py-3">
         <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
            <h3 class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Sobre Nosotros</h3>
            <div class="row">
               <div class="col-lg-6 about-txt-left">
                  <img src="<?php $query=mysqli_fetch_array($data);echo $query['path_photo']?>" alt="" class="img-fluid">
               </div>
               <div class="col-lg-6 about-txt-right">
                  <div class="jst-wthree-text">

                     <h2><?php echo $query['title']?><br>
                     </h2>
                  </div>
                  <div class="info-sub-w3">
                     <?php echo $query['text'];mysqli_close($con)?>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--//about-->
      <!--
      <section class="feature-inner py-lg-4 py-md-3 py-sm-3 py-3">
         <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
            <h3 class="title text-center clr mb-lg-5 mb-md-4 mb-sm-4 mb-3">Our Features</h3>
            <div class="row text-center">
               <div class="col-md-4 mt-md-0 mt-4 service-icon-agile">
                  <div class="feature-inner ">
                     <h5>Speed Up</h5>
                  </div>
                  <div class="address-left text-center">
                     <span class="fab fa-asymmetrik"></span>
                  </div>
                  <div class="address-right">
                     <p class="pt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt utLorem ipsum dolor sit amet
                     </p>
                  </div>
               </div>
               <div class="col-md-4 mt-md-0 mt-5 service-icon-agile">
                  <div class="feature-inner">
                     <h5>New Avatars</h5>
                  </div>
                  <div class="address-left text-center">
                     <span class="fab fa-android"></span>
                  </div>
                  <div class="address-right">
                     <p class="pt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt utLorem ipsum dolor sit amet
                     </p>
                  </div>
               </div>
               <div class="col-md-4 mt-md-0 mt-5 service-icon-agile">
                  <div class="feature-inner">
                     <h5>Level Changes</h5>
                  </div>
                  <div class="address-left text-center">
                     <span class="fas fa-reply-all"></span>
                  </div>
                  <div class="address-right">
                     <p class="pt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt utLorem ipsum dolor sit amet
                     </p>
                  </div>
               </div>
            </div>
            <div class="row text-center mt-lg-4 mt-md-3 mt-3">
               <div class="col-md-4 mt-md-0 mt-5 service-icon-agile">
                  <div class="feature-inner ">
                     <h5>Settings</h5>
                  </div>
                  <div class="address-left text-center">
                     <span class="fas fa-cogs"></span>
                  </div>
                  <div class="address-right">
                     <p class="pt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt utLorem ipsum dolor sit amet
                     </p>
                  </div>
               </div>
               <div class="col-md-4 mt-md-0 mt-5 service-icon-agile">
                  <div class="feature-inner">
                     <h5>New Levels</h5>
                  </div>
                  <div class="address-left text-center">
                     <span class="fab fa-cloudsmith"></span>
                  </div>
                  <div class="address-right">
                     <p class="pt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt utLorem ipsum dolor sit amet
                     </p>
                  </div>
               </div>
               <div class="col-md-4 mt-md-0 mt-5 service-icon-agile">
                  <div class="feature-inner">
                     <h5>3D Weapons</h5>
                  </div>
                  <div class="address-left text-center">
                     <span class="fas fa-cubes"></span>
                  </div>
                  <div class="address-right">
                     <p class="pt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt utLorem ipsum dolor sit amet
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </section>-->
      <!--Footer -->  
      <?php include 'includes/footer.php'?>
       <!--js working-->
       <script src='dragon_hunt/js/jquery-2.2.3.min.js'></script>
      <!-- For the demo ad only -->  
      <!--nav menu-->
      <script src="dragon_hunt/js/classie.js"></script>
      <script src="dragon_hunt/js/demonav.js"></script>
      <!-- //nav menu-->
      <!-- //nav menu-->
      <!--bootstrap working-->
      <script src="dragon_hunt/js/bootstrap.min.js"></script>
      <!-- //bootstrap working-->
   </body>
</html>