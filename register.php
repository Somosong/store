<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<?php include 'includes/dbConn.php';$create=false;
 if(isset($_POST["submit"])){
 $email = $_POST["email"];
 $username= $_POST["username"];
 $password = $_POST["password"];
 $cpassword = $_POST["cpassword"];}
 
 if($_SERVER['REQUEST_METHOD']=='POST'){;
 $sql="SELECT * FROM user WHERE username='$username'";
 $query= mysqli_query($con,$sql);
 if(mysqli_num_rows($query)>0){
	echo "El usuario ya existe";
 }elseif(mysqli_num_rows(mysqli_query($con,"SELECT * FROM user WHERE email='$email'"))>0){
	echo "El email ya esta en uso";
 }elseif($password != $cpassword){
	echo "La contraseñas tienes que ser iguales";}
  else{
	mysqli_query($con,"INSERT INTO user(email,username,password) VALUES ('$email','$username','$password')");Header("Location:succesful.php");
  }}?>
<head>
<link rel="shortcut icon" href="https://cdn.discordapp.com/attachments/1065329363853250591/1070411013658247168/carrito-supermercado-metalico-dorado-articulos-compras-internet-agregando-icono-d-vector-realista_92753-5317-removebg-preview.png">
<title>Crear una cuenta</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Somosong Login Form Widget Tab Form,Login Forms,Sign up Forms,Registration Forms,News letter Forms,Elements"/>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="login/css/style.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body>
	<div class="padding-all">
		<div class="header">
			<h1>Crear una cuenta</h1>
			<img src="login/images/ghost.png" alt="" height="90px">
		</div>
  		
		<div class="design-w3l">
			<div class="mail-form-agile">
				<form action="register.php" method="post">
					<input type="text" name="email" placeholder="Email" required=""/>
					<input type="text" name="username" class="padding" placeholder="Nombre de Usuario" required=""/>
					<input type="password"  name="password" placeholder="Contraseña" required=""/>
					<input type="password"  name="cpassword" placeholder="Repetir Contraseña" required=""/>
					<br><br>
					<input type="submit" name="submit" value="Enviar">
				</form>
				<form action="index.php" method="get">
					<br>
					<input type="submit" value="Volver al Inicio">
				</form>
			</div>
		  <div class="clear"> </div>
		</div>

		<div class="footer">
		<p>¿Tienes ya una cuenta? <a href="login.php" > Inicia sesión </a></p>
		<p>© 2023 Formulario de Registro Somosong. Por:<a href="https://github.com/Somosong" >  Somosong </a></p>
		</div>
	</div>
		
</body>
</html>