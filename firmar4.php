<?php


require_once('./librerias/tcpdf/tcpdf.php');


$pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);


$info = array(
    'Name' => 'TCPDF'
);


$certificate = 'file://'.realpath('./certificados/certificados/'.$_POST['certificado']);
$primaryKey =  'file://'.realpath('./certificados/llaves/'.$_POST['llave']);

$pdf->AddPage();

$pdf->writeHTML('<br><br><br><div text-align: center><img src="imagenes/fondo.png" alt="..." width="100px"></div><br>Este es un documento firmado digitalmente por <b color="#FF0000">'.$_POST['nombre'].' '.$_POST['apellido'].'</b> <br>Con el rol de: <b color="#FF0000">'.$_POST['rol'].'</b><br>En el pais: <b color="#FF0000">'.$_POST['nacionalidad'].'</b><br>Firmado el dia: <b color="#FF0000">'.$_POST['fecha'].'</b><br><br><strong>Dejando las siguientes observaciones:</strong> <br>'.$_POST['descripcion'].'<br><br><br>Contacto: '.$_POST['correo'], true, 0, true, 0);

$pdf->setSignature($certificate, $primaryKey, '123456', '', 2, $info);

$pdf->Output(''.$_POST['documento'], 'D');


echo '<script>alert("Documento Firmado")</script>';
echo "<script>location.href='index.php'</script>";