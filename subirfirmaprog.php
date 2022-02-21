<?php 

$nombrec=$_FILES['certificado']['name'];
$tipoc=$_FILES['certificado']['type'];
$guardadoc=$_FILES['certificado']['tmp_name'];

$nombrel=$_FILES['llave']['name'];
$tipol=$_FILES['llave']['type'];
$guardadol=$_FILES['llave']['tmp_name'];


$conexion= mysqli_connect("localhost","root","","firmae",3306);
//validar conexion
if(!$conexion)
{
  die("Conexion fallida al servidor".mysqli_connect_error());
}


if($tipoc=='application/x-x509-ca-cert'){
    if($tipol=='application/octet-stream'){

        $sql="Insert into firmas (idusuario,certificado,llave,descripcion) values ('".$_POST['idusuario']."','".$nombrec."','".$nombrel."','".$_POST['descripcion']."') " ;

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



        if(!file_exists('certificados/certificados/')){
            mkdir('certificados/certificados/',0777,true);
            if(file_exists('certificados/certificados/')){
                if(move_uploaded_file($guardadoc, 'certificados/certificados/'.$nombrec)){
                
                    echo '<script>alert("Archivo subido con exito")</script>';
                    
                }else{
                    echo '<script>alert("No se pudo guardar el archivo")</script>';
                
                    }
                }
            }else{
                if(move_uploaded_file($guardadoc, 'certificados/certificados/'.$nombrec)){
                    echo '<script>alert("Archivo subido con exito")</script>';
                    

                }else{
                    echo '<script>alert("No se pudo guardar el archivo")</script>';
                    
                }
            }

            if(!file_exists('certificados/llaves/')){
                mkdir('certificados/llaves/',0777,true);
                if(file_exists('certificados/llaves/')){
                    if(move_uploaded_file($guardadol, 'certificados/llaves/'.$nombrel)){
                    
                        echo '<script>alert("Archivo subido con exito")</script>';
                        
                    }else{
                        echo '<script>alert("No se pudo guardar el archivo")</script>';
                    
                        }
                    }
                }else{
                    if(move_uploaded_file($guardadol, 'certificados/llaves/'.$nombrel)){
                        echo '<script>alert("Archivo subido con exito")</script>';
                        
            
                    }else{
                        echo '<script>alert("No se pudo guardar el archivo")</script>';
                        
                    }
                }



    }else{
        echo '<script>alert("Error al seleccionar archivo llave")</script>';
    }


}else{
    echo '<script>alert("Error al seleccionar archivo de certificado")</script>';
}


    echo "<script>location.href='index.php'</script>";
    
?>