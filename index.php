<?php
session_start();

 ?>
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="css/estilos.css">
  </head>
<body>

<?php
   include 'plantillas/navbar.php'
 ?>

<div class="card">
  <h5 class="card-header">Bienvenido <?php echo $_SESSION['nombre']; ?></h5>
</div>


<div class="card-group">
  <div class="card">
    <img src="imagenes/archivo.jpg" class="card-img-top" alt="...">
    <div class="card-footer">
    <a href="subirdoc.php" class="btn btn-primary btn-lg btn-block">Subir Documento</a>
    </div>
  </div>
  <div class="card">
    <img src="imagenes/certificado.png" class="card-img-top" alt="...">
    <div class="card-footer">
    <a href="subirfirma.php" class="btn btn-primary btn-lg btn-block">Subir Firma Electronica</a>
    </div>
  </div>
  <div class="card">
    <img src="imagenes/f.jpg" class="card-img-top" alt="...">
    <div class="card-footer">
    <a href="firmar1.php" class="btn btn-primary btn-lg btn-block">Firmar Documentos</a>
    </div>
  </div>
</div>




</div>
</body>