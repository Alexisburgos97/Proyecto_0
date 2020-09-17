<?php
$destino = "pruebapedidos1997@gmail.com";
$ncompleto = $_POST["nombreCompleto"];
$email = $_POST["email"];
$motivo = $_POST["motivo"];
$mensaje = $_POST["mensaje"];
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";


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

$mail = mail($destino,$motivo,$mensaje1,$headers);

/*if($mail){
    echo '<h4 style="widht:100%; text-align: center; background-color:limegreen; border:2px solid chartreuse;">Mensaje enviado exitosamente!<h4>';
}else{
    echo '<h4 style="widht:100%; text-align: center; background-color:red; border:2px solid darkred;">El Mensaje no puedo ser enviado<h4>';
}*/

header( "location: ../index.php" );
 ?>
