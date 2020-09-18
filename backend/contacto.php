<?php
include('../setup/configuracion.php');


$destino = "alexisburgos.info@gmail.com";
$ncompleto = $_POST["nombreCompleto"];
$email = $_POST["email"];
$motivo = $_POST["motivo"];
$mensaje = $_POST["mensaje"];
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

if(empty($_POST['email'] )){
    header("location: ../index.php?rta=error");
    $_SESSION['rta'] = 'error';
    die();
}else{
    $_SESSION['rta'] = 'ok';
}

$mensaje1 = <<<HTML
<div style="background:lightyellow; font:12px Verdana; padding:10px; width:80%; border: 1px solid gray;">

    <h1>Contacto desde la WEB</h1>
    <p>Nombre: $ncompleto <br /></p>
    <p>Email: $email <br /></p>
    <p>Motivo: $motivo <br /></p>
    <p>Mensaje: <br />
       $mensaje
    </p>

</div>
HTML;


//var_dump($mensaje1);

mail($destino,$motivo,$mensaje1,$headers);


header( "location: ../index.php?rta=ok" );
 ?>
