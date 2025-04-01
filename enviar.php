<!-- ENVIO DE FORMULARIO AL CORREO POR MEDIO DE PHP -->
<?php
if(isset($_POST['enviar'])){
	$nombre = $_POST['name'];
	$correo = $_POST['enail'];
	$motivo = $_POST['motivo'];
	$telefono = $_POST['telefono'];
	$mensaje = $_POST['message'];

	$destinatario = "ingalarcon2010@gmail.com";
	$asunto = "Mensaje enviado de: " . $correo;

    $contenido = "Nombre: " . $nombre . "\nCorreo: " . $correo . "\nMotivo: " . $motivo . "\nTelefono: " . $telefono . "\nMensaje: " . $mensaje ;

    $header = "From: Formulario_web@pagina.com";

    $mail = mail($destinatario,$asunto,$contenido,$header);
    if($mail){
        echo "<script>alert('Correo enviado con exito');</script>";
    }else{
        echo "<script>alert('problema al envar el correo');</script>";
    }
};