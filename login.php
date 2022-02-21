<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Firma Digital</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <link rel="stylesheet" type="text/css" href="css/estiloslogin.css">
  </head>
  <body>
    <br><br>
    <div class="imagen">
      <img  src="imagenes/fondo.png" class="" alt="..." height="200px">
      <br><br><br>
    </div>

    <div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Iniciar Sesion</h3>

			</div>
			<div class="card-body">
				<form action="validar.php" method="POST">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="Correo" name="mail">

					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="password" name="password">
					</div>
					<div class="form-group">
            <?php
             echo "<a href='registro.php' class='btn float-left login_btn' >Registrarse</a>";
             ?>
						<input type="submit" value="Iniciar" class="btn float-right login_btn">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
  </body>
</html>
