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
<br>


<?php 

date_default_timezone_set('America/Mexico_City');
$fecha_actual=date("Y-m-d H:i:s");

?>

<div class="row animated fadeIn fast alert alert-success"  id="pla" >
        <div class="col-md-4">
                      <img style="max-width:65%; width:auto; height:auto;" src="imagenes/certificado.png"  class="img-img-fluid" >
                      <br><br>
        </div>
        <div class="col-md-8" >
                    <h5 class="card-title">Selecciona el Certificado que desas subir</h5>
                    <hr>
                    <form class="" action="subirfirmaprog.php" method="post" enctype="multipart/form-data">
                    <input type="file" name="certificado">
                    <br><br>
                    <h5 class="card-title">Selecciona su archivo llave</h5>
                    <hr>
                    <form class="" action="subirdocprog.php" method="post" enctype="multipart/form-data">
                    <input type="file" name="llave">
                    <br><br>
                    <b>Descripcion:     </b>
                    <br>
                    <textarea name="descripcion" rows="5" cols="60" ></textarea>
                    <input type="hidden" name="idusuario" value="<?php echo $_SESSION['id'];?>">
                    <input type="hidden" name="fecha" value="<?php echo $fecha_actual;?>">
                    <br><br>
                    <input type="submit" value="Subir Documento" class="btn float-left login_btn">
                    <a class="btn btn-danger"  href="index.php"  role="button" aria-expanded="false">Cancelar</a>
                    </form>

        </div>




</div>
</body>