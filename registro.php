<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registro</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/estilos.css">
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="login.php">Firma Digital</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
       
        <li class="nav-item">
          <a class="nav-link" href="login.php">Salir</a>
        </li>
      </ul>
    </div>
    </nav>

        <div class="row animated fadeIn fast alert alert-success"  id="pla" >
        <div class="col-md-4">
                      <img style="max-width:65%; width:auto; height:auto;" src="imagenes/fondo.png"  class="img-img-fluid" >
                      <br><br>
        </div>
        <div class="col-md-8" >
                    <h5 class="card-title">Ingrese sus datos para registrarse</h5>
                    <hr>
                    <form class="" action="registrousuarios.php" method="post">
                    <b>Nombre:  <br> </b><input type="text" name="nombre" value="" required><br><br>
                    <b>Apellidos:   <br>  </b><input type="text" name="apellidos" value="" required><br><br>
                    <b>Rol:  <br>   </b><input type="text" name="rol" value="" size="50" required><br><br>
                    <b>Fecha de Nacimientos:    <br>  </b><input type="text" name="fechan" value="" size="50" required><br><br>
                    <b>Nacionalidad: <br>  </b><input type="text" name="nacionalidad" value=" " required ><br><br>
                    <b>Correo: <br>   </b><input type="text" name="correo" value="" required><br><br>
                    <b>Contraseña:  <br>  </b><input type="text" name="contrasena" value="" required><br><br>

                    <input type="submit" value="Registrar" class="btn float-left login_btn">

                    </form>
</div>
  </body>
</html>