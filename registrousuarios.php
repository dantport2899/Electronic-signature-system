<?php
//creacion de conexion al servidor
$conexion= mysqli_connect("localhost","root","","firmae",3306);
//validar conexion
if(!$conexion)
{
  die("Conexion fallida al servidor".mysqli_connect_error());
}

$sql="Insert into usuarios (nombre,apellidos,rol,fechan,nacionalidad,correo,contrasena) values ('".$_POST['nombre']."','".$_POST['apellidos']."','".$_POST['rol']."','".$_POST['fechan']."','".$_POST['nacionalidad']."','".$_POST['correo']."','".$_POST['contrasena']."') " ;

$result=mysqli_query($conexion, $sql);

if($result)
{
  echo "registo exitoso";
}else
{
    echo "Error de registro" .$sql . "<br>" .mysqli_error($conexion);
}
mysqli_close($conexion);

ob_start();
header("refresh:2,url=login.php");
ob_end_flush();
 ?>
