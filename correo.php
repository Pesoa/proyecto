<?php
    $destinatario= "pesoa.pesoa@gmail.com";

    $name= $_POST["nombre"];

    $asunto= $_POST["asunto"];

    $msg= $_POST["msg"];

    $mail= $_POST["mail"];

    $header= "From: noreply@example.com" . "\r\n";
    $header.= "Reply-to: noreply@example.com" . "\r\n";
    $header.= "X-mailer: PHP/". phpversion();

    mail($mail,$asunto,$msg,$header);
    echo "<script>alert('Correo enviado')</script>";
    echo "<script> setTimeout(\"location.href='index.html'\",1000)</script>";

?>