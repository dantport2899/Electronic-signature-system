<?php
session_start();
if($_SESSION['correo']){
    session_destroy();



    ob_start();
      header("Location: login.php");
       ob_end_flush();



}
unset($_SESSION['user']);
 ?>
