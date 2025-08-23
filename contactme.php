<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $emailFrom = $_POST['email'];
    $message = $_POST['text'];

    $mailTo = "dorothylin2302@gmail.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have a new email from ".$name.".\n\n".$message;

    mail($mailTo, $txt, $headers);
    header("Location: index.php?mailsend");
}
