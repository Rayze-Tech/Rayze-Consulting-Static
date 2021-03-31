<?php

if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $mailFrom = $_POST['email'];
    $subject = $_POST['subject'];
    $requests = $_POST['message'];

    $mailTo = "steven@pinepcs.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have received a build request from ".$name.".\n\n"."What the customer wants to use the pc for: ".$subject.".\n"."Additional Requests ".$requests;

    error_reporting(E_ALL);
    ini_set('display_errors', TRUE);
    ini_set('display_startup_errors', TRUE);
    
    mail($mailTo, $txt, $headers);
    header("Location: index.html?mailsent");
}