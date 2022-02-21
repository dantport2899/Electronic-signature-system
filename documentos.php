<?php
session_start();
$idusu=$_SESSION['id'];
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
       require("connect_db.php");
       $sql3 =("SELECT * from documentos where idusuario=$idusu");
       $query3=mysqli_query($conexion,$sql3);

?>

<table class="table table-ligh table-bordered">
        <tbody>
          <tr>
            <th width="3%" class="text-center">ID</th>
            <th width="20%" class="text-center">Nombre</th>
            <th width="60%" class="text-center">Descripcion</th>
            <th width="30%" class="text-center">Fecha de subida</th>
            <th width="10%" class="text-center">Firmar</th>
            <th width="10%" class="text-center">Eliminar</th>
          </tr>


<?php
        while($arreglo3=mysqli_fetch_array($query3)){

           echo "<tr>";
           echo "<td>$arreglo3[0]</td>";
           echo "<td><img src='imagenes/pfd.png' width='20' height='20'>  $arreglo3[1]</td>";
           echo "<td>$arreglo3[2]</td>";
           echo "<td>$arreglo3[4]</td>";
           echo "<td><a href='firmar2.php?iddoc=$arreglo3[0]'><img src='imagenes/firmar.png'width='20' height='20'></a></td>";
           echo "<td><a href='documentos.php?id=$arreglo3[0]&idborrar3=2&documento=$arreglo3[1]'><img src='imagenes/borrar.png' width='20' height='20'></a></td>";
           echo "</tr>";
         }
         echo "</table>";
 ?>

<?php
         extract($_GET);
         if(@$idborrar3==2){
           $sqlborrar3="DELETE from documentos where id=$id";
           $resborrar3=mysqli_query($conexion, $sqlborrar3);

           unlink('documentos/originales/'.$documento);






           echo '<script>alert ("Registro eliminado")</script>';
           echo "<script>location.href='documentos.php'</script>";

         }

?>

<div class="alert alert-success">
                <div class="form-group">
                  <label for="my-input">Agregar Documento a firmar </label>
                  </div>
                  <a href="subirdoc.php" class="btn btn-primary btn-lg btn-block">Agregar</a>
                
</div>