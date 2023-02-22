<!--A Design by W3layouts
   Author: W3layout
   Author URL: http://w3layouts.com
   -->
   <?php $title="Contacto"?>
<!DOCTYPE html>
<html lang="zxx">
   <?php include('includes/head.php')?>
   <body>
      <!--headder-->
      <div class="header-outs">
         <div class="header-w3layouts">
            <div class="container">
               <div class="right-side">
                  <p>
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
      </div>
      <!--//headder-->
      <!--//headder-->
      <!-- banner -->
      <div class="inner_page-banner">
      </div>
      <!--//banner -->
         <!--headder-->
         <section class="contact-inner py-lg-4 py-md-3 py-sm-3 py-3">
            <div class="container py-lg-5 py-md-5 py-sm-4 py-4">
               <h3 class="title text-center  mb-lg-5 mb-md-4 mb-sm-4 mb-3">Ponerse en contacto</h3>
               <div class=" contact-wls-detail">
                  <?php
                  $name = isset($_POST["name"]) ? $_POST["name"] : "";
                  $email = isset($_POST["email"]) ? $_POST["email"] : "";
                  $phone = isset($_POST["phone"]) ? $_POST["phone"] : "";
                  $text = isset($_POST["text"]) ? $_POST["text"] : "";

                  if (($name !="") and ($email !="") and ($phone !="") and ($text !="")) {
                     $filled = true;
                  } else {
                     $filled = false;
                  }
                  ?>
                  <div class="contact-form">
                     <form action="thanks.php" method="post">
                        <div class="row agile-wls-contact-mid mb-sm-3 mb-2">
                           <div class="col-lg-4 col-md-4 form-group contact-forms">
                              <input type="text" class="form-control" placeholder="Nombre" required value="<?php echo $name; ?>">
                           </div>
                           <div class="col-lg-4 col-md-4 form-group contact-forms">
                              <input type="email" class="form-control" placeholder="Email" required value="<?php echo $email; ?>">
                           </div>
                           <div class="col-lg-4 col-md-4 form-group contact-forms">
                              <input type="text" class="form-control" placeholder="Teléfono" required value="<?php echo $phone; ?>">
                           </div>
                        </div>
                        <div class="form-group contact-forms">
                           <textarea class="form-control" placeholder="Mensaje" required value="<?php echo $text; ?>"></textarea >
                        </div>
                        <button type="submit" class="btn sent-butnn btn-lg">Enviar</button>
                     </form>
                     <?php
                     if($filled==true) {
                        header("Location: thanks.php");
                     }
                     ?>
                  </div>
               </div>
               <div class="contact-address row mt-lg-5 mt-md-4 mt-3">
                  <div class="col-lg-6 col-md-6 contact-form pb-lg-3 pb-2">
                     <div class="text-center contact-address-grid">
                        <div class="footer_grid_left">
                           <div class="contact_footer_grid_left text-center mb-3">
                              <h5> Dirección</h5>
                           </div>
                           <p>MC. Can Valero, 19, 07011 Palma, Illes Balears</p>
                        </div>
                     </div>
                     <div class=" text-center contact-address-grid">
                        <div class="footer_grid_left">
                           <div class="contact_footer_grid_left text-center mb-3">
                              <h5>Teléfono</h5>
                           </div>
                           <p>+34 123 45 67 89</p>
                        </div>
                     </div>
                     <div class="text-center contact-address-grid">
                        <div class="footer_grid_left">
                           <div class="contact_footer_grid_left text-center mb-3">
                              <h5>Email</h5>
                           </div>
                           <p><a href="mailto:info@example.com">somosong_comp@gmail.com</a> 
                              <br><a href="mailto:info@example.com">somosong_info@gmail.com</a>
                           </p>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-6 col-md-6 address_mail_footer_grids">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3074.2766078352806!2d2.6303127151008527!3d39.598450979468666!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x129792501b357b1d%3A0x7ca712eb8d27073f!2sCooperativa%20de%20Ense%C3%B1anza%20Aula%20Balear!5e0!3m2!1sen!2ses!4v1675878240117!5m2!1sen!2ses" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                  </div>
               </div>
            </div>
         </section>
         <!--Footer -->   
         <?php include 'includes/footer.php'; ?>
         <!--js working-->
         <script src='dragon_hunt/js/jquery-2.2.3.min.js'></script>
         <!--//js working-->
         <!--nav menu-->
         <script src="dragon_hunt/js/classie.js"></script>
         <script src="dragon_hunt/js/demonav.js"></script>
         <!-- //nav menu-->
         <!--bootstrap working-->
         <script src="dragon_hunt/js/bootstrap.min.js"></script>
         <!-- //bootstrap working-->
   </body>
</html>