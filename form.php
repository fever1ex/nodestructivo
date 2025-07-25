<?php
    if ($_SERVER["REQUEST_METHOD"] === "POST"){
        $nombre = htmlspecialchars($_POST['nombre']);
        $emailFrom = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $asunto = htmlspecialchars($_POST['asunto']);
        $mensaje = htmlspecialchars($_POST['mensaje']);

        if (preg_match("/[\r\n]/", $nombre . $emailFrom . $asunto)){
            exit("Cabeceras inválidas");
        }
        if (!filter_var($emailFrom, FILTER_VALIDATE_EMAIL)){
            echo "Email no válido.";
            exit;
        }
        if (empty($nombre) || empty($emailFrom) || empty($asunto) || empty($mensaje)){
            exit("Todos los campos son obligatorios");
        }

        $mailTo = "jofay59201@dosonex.com";
        $headers = "De: ".$emailFrom;
        $txt = "Recibiste un correo de: $nombre\n\n$mensaje";

        mail($mailTo, $asunto, $txt, $headers);
        header("Location: index.php?mailsend=1#contacto");
        exit;
    }
?>