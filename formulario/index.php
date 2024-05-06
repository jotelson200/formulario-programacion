<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">1
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>formulario</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
  <link rel="stylesheet" href="style.css">
</head>
<body>

    <form method="post" autocomplete="off" >
      <h2>Bienvenido</h2>
      <div class="input-group">
           <div class="input-container">
              <input type="text" name="name" placeholder="Nombre">
              <i class="fa-solid fa-user" ></i>
      </div>
      <div class="input-container">
              <input type="email" name="email" placeholder="Correo electronico">
              <i class="fa-solid fa-envelope" ></i>
      </div>
      <div class="input-container">
              <input type="password" name="password" placeholder="Contraseña">
              <i class="fa-solid fa-lock" ></i>
      </div>
      <div class="input-container">
              <input type="tel" name="phone" placeholder="Telefono">
              <i class="fa-solid fa-phone" ></i>

      <a href="#">Terminos y Condiciones</a>
      <input type="submit" name="send" class="btn" value="Enviar" >
    </div>  

</form>

<?php
     include("send.php");
?>
 
    
</body>
</html>