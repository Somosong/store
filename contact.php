<!--A Design by W3layouts
   Author: W3layout
   Author URL: http://w3layouts.com
   -->
   <?php $title="Contacto"?>
<!DOCTYPE html>
<html lang="zxx">
   <?php include 'includes/head.php';include 'includes/dbConn.php';
   $stmt = "SELECT * FROM business_info";
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
                  <div class="contact-form">
                     <form action="save.php" method="post">
                        <div class="row agile-wls-contact-mid mb-sm-3 mb-2">
                           <div class="col-lg-4 col-md-4 form-group contact-forms">
                              <input type="text" class="form-control" placeholder="Nombre" name="name" required value="">
                           </div>
                           <div class="col-lg-4 col-md-4 form-group contact-forms">
                              <input type="email" class="form-control" placeholder="Email" name="email" required value="">
                           </div>
                           <div class="col-lg-4 col-md-4 form-group contact-forms">
                              <input type="text" class="form-control" placeholder="Teléfono" name="phone" required value="">
                           </div>
                        </div>
                        <div class="form-group contact-forms">
                           <textarea class="form-control" placeholder="Mensaje" name="text" required value=""></textarea >
                        </div>
                        <button type="submit" name="submit" class="btn sent-butnn btn-lg">Enviar</button>
                     </form>
                  </div>
               </div>
               <div class="contact-address row mt-lg-5 mt-md-4 mt-3">
                  <div class="col-lg-6 col-md-6 contact-form pb-lg-3 pb-2">
                     <div class="text-center contact-address-grid">
                        <div class="footer_grid_left">
                           <div class="contact_footer_grid_left text-center mb-3">
                              <h5> Dirección</h5>
                           </div>
                           <p><?php $query=mysqli_fetch_array($data);echo $query['address']?></p>
                        </div>
                     </div>
                     <div class=" text-center contact-address-grid">
                        <div class="footer_grid_left">
                           <div class="contact_footer_grid_left text-center mb-3">
                              <h5>Teléfono</h5>
                           </div>
                           <p><?php echo $query['phone']?></p>
                        </div>
                     </div>
                     <div class="text-center contact-address-grid">
                        <div class="footer_grid_left">
                           <div class="contact_footer_grid_left text-center mb-3">
                              <h5>Email</h5>
                           </div>
                           <p><a href="mailto:info@example.com"><?php echo $query['email']?></a> 
                           </p>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-6 col-md-6 address_mail_footer_grids">
                  <?php echo $query['gps'];mysqli_close($con)?>
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