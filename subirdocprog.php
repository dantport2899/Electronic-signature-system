<?php 

$nombre=$_FILES['archivo']['name'];
$tipo=$_FILES['archivo']['type'];
$guardado=$_FILES['archivo']['tmp_name'];

$conexion= mysqli_connect("localhost","root","","firmae",3306);
//validar conexion
if(!$conexion)
{
  die("Conexion fallida al servidor".mysqli_connect_error());
}

if($tipo=='application/pdf'){
    $sql="Insert into documentos (nombre,descripcion,idusuario,fecha) values ('".$nombre."','".$_POST['descripcion']."','".$_POST['idusuario']."','".$_POST['fecha']."') " ;

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



        if(!file_exists('documentos/originales/')){
            mkdir('documentos/originales/',0777,true);
            if(file_exists('documentos/originales/')){
                if(move_uploaded_file($guardado, 'documentos/originales/'.$nombre)){
                
                    echo '<script>alert("Archivo subido con exito ")</script>';
                    echo "<script>location.href='documentos.php'</script>";
                }else{
                    echo '<script>alert("No se pudo guardar el archivo")</script>';
                    echo "<script>location.href='documentos.php'</script>";
                    }
                }
            }else{
                if(move_uploaded_file($guardado, 'documentos/originales/'.$nombre)){
                    echo '<script>alert("Archivo subido con exito")</script>';
                    echo "<script>location.href='documentos.php'</script>";

                }else{
                    echo '<script>alert("No se pudo guardar el archivo")</script>';
                    echo "<script>location.href='documentos.php'</script>";
                }
            }
}else{
                echo '<script>alert("Error el archivo no es PDF")</script>';
                echo "<script>location.href='documentos.php'</script>";
}


        
    
?>