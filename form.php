<?php

if (isset($POST['submit'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

    $mailTo = "kasharmt@gmail.com";
    $headers = "From: " . $mailFrom;
    $txt = "You have mail from " . $name . " .\n\n" . $message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.php?mailsend");
}
