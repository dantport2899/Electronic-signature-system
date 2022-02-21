<!DOCTYPE html>
<?php
session_start();
$idusu=$_SESSION['id'];
$iddoc=$_SESSION['iddocumento']

 ?>

 <?php
   include 'plantillas/navbar.php'
 ?>

<?php 

date_default_timezone_set('America/Mexico_City');
$fecha_actual=date("Y-m-d H:i:s");

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


            <div>
          <?php
          extract($_GET);
          require("connect_db.php");
          $sql2="SELECT * FROM firmas WHERE id=$idcert";
          $ressql2=mysqli_query($conexion,$sql2);

          while($row2=mysqli_fetch_row($ressql2)){
            $id2=$row2[0];
            $certificado=$row2[2];
            $llave=$row2[3];
            $descripcion2=$row2[4];
          }
           ?>


        </div>
            
        <div class="alert alert-success">
                <div class="form-group">
                  <label for="my-input"><h4>Certificado Seleccionado</h4> </label>
                </div>
                
</div>
            <div class="centrado">
            <div class="card mb-3" style="max-width: 540px;"  >
            <div class="row g-0">
                <div class="col-md-4">
                <img src="imagenes/certificado.png" alt="..." width="100px">
                </div>
                <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Certificado</h5>
                    <p><?php echo $certificado ?></p>
                    <h5 class="card-title">LLave</h5>
                    <p><?php echo $llave ?></p>
                    <h5 class="card-title">Descripcion</h5>
                    <p class="card-text"><?php echo $descripcion2 ?></p>
                     </div>
                </div>
            </div>
            
            </div>
            
            </div>

            <div class="row animated fadeIn fast alert alert-success"  id="pla" >
        <div class="col-md-4">
                      <img style="max-width:65%; width:auto; height:auto;" src="imagenes/usuario.png"  class="img-img-fluid" >
                      <br><br>
        </div>
        <div class="col-md-8" >
                    <h5 class="card-title">Datos del usuario</h5>
                    <hr>
                    <form class="" action="firmar4.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="idusuario" value="<?php echo $_SESSION['id'];?>">
                    <b>Nombre:     </b>
                    <input type="text" name="nombre" value="<?php echo $_SESSION['nombre'];?>">
                    <b> Apellido:     </b>
                    <input type="text" name="apellido" value="<?php echo $_SESSION['apellidos'];?>">
                    <br><br>
                    <b>Fecha Nacimiento:     </b>
                    <input type="text" name="fechan" value="<?php echo $_SESSION['fechan'];?>">
                    <br><br>
                    <b>Nacionalidad:     </b>
                    <input type="text" name="nacionalidad" value="<?php echo $_SESSION['nacionalidad'];?>">
                    <b>Correo:     </b>
                    <input type="text" name="correo" value="<?php echo $_SESSION['correo'];?>">
                    <b>Rol:     </b>
                    <input type="Rol" name="rol" value="<?php echo $_SESSION['rol'];?>">
                    <br><br>
                    <b>Descripcion:     </b>
                    <br>
                    <textarea name="descripcion" rows="5" cols="60" ></textarea>
                    <input type="hidden" name="fecha" value="<?php echo $fecha_actual;?>">
                    
                    <input type="hidden" name="certificado" value="<?php echo $certificado;?>">
                    <input type="hidden" name="llave" value="<?php echo $llave;?>">
                    <input type="hidden" name="documento" value="<?php echo $nombre;?>">

                    <br><br>
                    <input type="submit" value="Firmar Documento" class="btn float-left login_btn">
                    <a class="btn btn-danger"  href="index.php"  role="button" aria-expanded="false">Cancelar</a>

                    </form>

        </div>




</div>