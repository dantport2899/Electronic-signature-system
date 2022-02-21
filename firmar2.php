<!DOCTYPE html>
<?php
session_start();
$idusu=$_SESSION['id'];
 ?>

 <?php
   include 'plantillas/navbar.php'
 ?>

 <head>
   <link rel="stylesheet" type="text/css" href="css/estilos.css">
 </head>

 <div>
          <?php
          extract($_GET);
          require("connect_db.php");
          $sql="SELECT * FROM documentos WHERE id=$iddoc";
          $ressql=mysqli_query($conexion,$sql);

          while($row=mysqli_fetch_row($ressql)){
            $id=$row[0];
            $nombre=$row[1];
            $descripcion=$row[2];
            $_SESSION['iddocumento']=$row[0];
          }
           ?>


        </div>
            
        <div class="alert alert-success">
                <div class="form-group">
                  <label for="my-input"><h4>Documento Seleccionado</h4> </label>
                </div>
                
</div>
            <div class="centrado">
            <div class="card mb-3" style="max-width: 540px;"  >
            <div class="row g-0">
                <div class="col-md-4">
                <img src="imagenes/pfd.png" alt="..." width="100px">
                </div>
                <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $nombre ?></h5>
                    <p><strong>Descripcion</strong></p>
                    <p class="card-text"><?php echo $descripcion ?></p>
                     </div>
                </div>
            </div>
            </div>
            </div>

            <?php

       require("connect_db.php");
       $sql3 =("SELECT * from firmas where idusuario=$idusu");
       $query3=mysqli_query($conexion,$sql3);

?>

<div class="alert alert-success">
                <div class="form-group">
                  <label for="my-input"><h4>Selecciona la firma electronica que deseas utilizar</h4> </label>
                </div>
                
</div>

<table class="table table-ligh table-bordered">
        <tbody>
          <tr>
            <th width="3%" class="text-center">ID</th>
            <th width="20%" class="text-center">Certificado</th>
            <th width="20%" class="text-center">LLave</th>
            <th width="60%" class="text-center">Descripcion</th>
            <th width="10%" class="text-center">Seleccionar</th>
            <th width="10%" class="text-center">Eliminar</th>
          </tr>


<?php
        while($arreglo3=mysqli_fetch_array($query3)){

           echo "<tr>";
           echo "<td>$arreglo3[0]</td>";
           echo "<td><img src='imagenes/certificado.png' width='20' height='20'>  $arreglo3[2]</td>";
           echo "<td><img src='imagenes/key.jpg' width='20' height='20'>  $arreglo3[3]</td>";
           echo "<td>$arreglo3[4]</td>";
           echo "<td><a href='firmar3.php?idcert=$arreglo3[0]'><img src='imagenes/firmar.png'width='20' height='20'></a></td>";
           echo "<td><a href='firmar2.php?id=$arreglo3[0]&idborrar3=2&certificado=$arreglo3[2]&key=$arreglo3[3]'><img src='imagenes/borrar.png' width='20' height='20'></a></td>";
           echo "</tr>";
         }
         echo "</table>";
 ?>

<?php
         extract($_GET);
         if(@$idborrar3==2){
           $sqlborrar3="DELETE from firmas where id=$id";
           $resborrar3=mysqli_query($conexion, $sqlborrar3);

           unlink('certificados/certificados/'.$certificado);
           unlink('certificados/llaves/'.$key);





           echo '<script>alert ("Registro eliminado")</script>';
           echo "<script>location.href='firmas.php'</script>";

         }

?>

<div class="alert alert-success">
                <div class="form-group">
                  <label for="my-input">Agregar Nuevo Certificado</label>
                  </div>
                  <a href="subirfirma.php" class="btn btn-primary btn-lg btn-block">Agregar</a>
                
</div>

  </body>
</html>