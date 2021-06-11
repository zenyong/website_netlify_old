<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = "kushpadhiyar27@gmail.com";
    $email_subject = "new form submission";
    $email_body = "username; $name.\n".
                  "user email: $visitor_email.\n".
                  "user message: $message.\n".
    $to = "kushpadhiyar27@gmail.com";
    $headers = "From : $email_from \r\n";
    $headers = "Reply-To : $visitor_email";
    mail($to, $email_subject, $email_body, $headers);

    header("location: form.html")
?>