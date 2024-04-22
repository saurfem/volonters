<?php

    $to = "sai.adiasimow@gmail";

    $name = $_POST["name"];
    $email = trim($_POST["email"]);
    $comment = $_POST["comment"];

    $headers = "Name: $name" . "\r\n" . "email: $email" . "\r\n" . "Comment $comment";

    if (mail($to, $comment, $headers)) {
        echo ("Письмо отправлено");
    } else {
        echo ("Письмо не отправлено");
    }
?>