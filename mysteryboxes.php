<!--A Design by W3layouts
   Author: W3layout
   Author URL: http://w3layouts.com
   -->
   <?php $title="Cajas Misteriosas"?>
<!DOCTYPE html>
<?php include 'includes/head.php';include 'includes/dbConn.php';
      $stmt = "SELECT * FROM product";
      $data = mysqli_query($con,$stmt) ?>
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
      <!--Avatar -->  
      <section class="select-hero py-lg-4 py-md-3 py-sm-3 py-3">
         <div class="container py-lg-5 py-md-5 py-sm-4 py-4">
            <h3 class="title text-center  mb-lg-3 mb-md-3 mb-sm-3 mb-3">Cajas Misteriosas</h3>
            <div class="container text-center">
            <div class="row">
            <?php $x=1;while($query = mysqli_fetch_array($data)){?>
               <div class="col">
               <a href="box<?php echo $x++?>.php"><img src="<?php echo $query['path_photo'];?>" width="400" height="400"></a>
            <br><?php echo $query['name'];?>
               </div><?php }mysqli_close($con)?>
            </div>
            </div>
         </div>
      </section>
      <!--Avatar -->   
      <!--Footer -->   
      <?php include 'includes/footer.php'; ?>
      <!--js working-->
      <script src='dragon_hunt/js/jquery-2.2.3.min.js'></script>
      <!-- For the demo ad only -->  
      <!--nav menu-->
      <script src="dragon_hunt/js/classie.js"></script>
      <script src="dragon_hunt/js/demonav.js"></script>
      <!-- //nav menu-->
      <!--bootstrap working-->
      <script src="dragon_hunt/js/bootstrap.min.js"></script>
      <!-- //bootstrap working-->
   </body>
</html>