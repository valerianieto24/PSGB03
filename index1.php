<?php
include "validarfrom.php";
if(isset($_POST['login'])){
$correo = $_POST['correo'];
$pass = $_POST['pass'];

}


?>




<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat:400,700'>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'><link rel="stylesheet" href="css/style.css">

</head>
<body>

<!-- partial:index.partial.html -->
<div class="container">
  <div class="info">
    <h1><font face="Comic Sans MS,arial,verdana">Login</font></h1><span>Tecnology Scanning<i class="fa fa-heart"></i><a href="http://andytran.me">
    </a></span>
  </div>
</div>
<div class="form">
  <div><img src="img/logo.png" style="width: 50%; height: 50%;"></div>
  <form class="login1-form" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" >
    <input type="text" placeholder="username" name="correo" value="<?php if (isset($correo)) echo $correo; ?>" /> 
    <input type="password" placeholder="pass" name="pass" value="<?php if (isset($pass)) echo $pass; ?>" />
    <button type="submit" value="boton" id="idBoton" name="login">login </button>
    <p class="message">Registrate? <a href="http://localhost/preciosa416/registrar.php">Crea un Usuario</a></p>
     <?php echo $erroremail; ?><br>
     <?php echo $errorpass; ?><br>
     <?php echo $errorusuar; ?><br>

  </form>
</div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="js/script.js"></script>

</body>
</html>
    
