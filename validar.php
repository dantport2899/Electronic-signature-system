<?php
session_start();

require("connect_db.php");
$username=$_POST['mail'];
$pass=$_POST['password'];
$_SESSION['username']=$username;
$_SESSION['documentos']=0;

$sql=mysqli_query($conexion, "SELECT id, nombre, apellidos, rol, fechan, nacionalidad, correo, contrasena from usuarios where correo='$username'");

if($f=mysqli_fetch_assoc($sql)){
  if ($pass==$f['contrasena']) {
    $_SESSION['id']=$f['id'];
    $_SESSION['nombre']=$f['nombre'];
    $_SESSION['apellidos']=$f['apellidos'];
    $_SESSION['rol']=$f['rol'];
    $_SESSION['fechan']=$f['fechan'];
    $_SESSION['nacionalidad']=$f['nacionalidad'];
    $_SESSION['correo']=$f['correo'];
    $_SESSION['contrasena']=$f['contrasena'];
    $_SESSION['documentos'];

      echo '<script>alert("Bienvenido")</script>';
      echo "<script>location.href='index.php'</script>";



  }else
  {
    echo '<script>alert("Contrasena Incorrecta")</script>';
    echo "<script>location.href='login.php'</script>";
  }
}




 ?>