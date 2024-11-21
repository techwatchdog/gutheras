<?php
    $emailTo = "gamalielgachanga58@gmail.com"; 
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=utf-8\r\n";
    $headers .= "From: " . $_POST['email'] . "\r\n";

    $subject = isset($_POST['subject']) ? $_POST['subject'] : "Contact form message";
    
    $body = "<p><b>Name: </b>" . $_POST['name'] . "</p>";
    $body .= "<p><b>Email: </b>" . $_POST['email'] . "</p>";
    $body .= "<p><b>Subject: </b>" . $subject . "</p>";
    $body .= "<p><b>Message: </b>" . $_POST['message'] . "</p>";

    if (mail($emailTo, $subject, $body, $headers)) {
        echo "true";
    } else {
        echo "false";
    }
?>
