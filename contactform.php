<?php

if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $mailFrom = $_POST['email'];
    $subject = $_POST['subject']
    $requests = $_POST['message'];

    $mailTo = "gearbox120456@gmail.com";
    $headers = "From: ".$mailFrom;
    $txt = "Name: ".$name." subject: ".$subject." message: ".$requests;


    mail($mailTo, $txt, $headers);
    header("Location: index.html?mailsent");
}

?>