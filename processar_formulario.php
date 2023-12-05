<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $mensagem = $_POST["mensagem"];

    // Enviar e-mail
    $para = "ivanprnascimento@gmail.com";
    $assunto = "Nova mensagem do site";
    $corpo = "E-mail: $email\n\nMensagem:\n$mensagem";
    
    mail($para, $assunto, $corpo);

    // Redirecionar de volta para a página inicial
    header("Location: index.html");
    exit();
}
?>