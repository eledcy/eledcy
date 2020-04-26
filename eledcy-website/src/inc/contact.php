<?php

    $name = $_POST['UserName'];
    $Email = $_POST['Email'];
    $message = $_POST['Message'];

    $email_from = '$Email';

    $email_subject = "New Form Submission";

    $email_body = "User Name: $name.\n".
        "User Email: $Email.\n".
            "User Message: $message.\n";

    $to = "eledcy@gmail.com"

    $headers = "From: $email_from \r\n";

    $headers .= "Reply-to: $Email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: ../index.html");
?>