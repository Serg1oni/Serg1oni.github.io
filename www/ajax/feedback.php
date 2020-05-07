<?php
    $name == ''|| = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']); 
    if ($name == ''|| $email == '' || $subject == '' || $message == ''){
        echo 'Complectați toate rândurile';
        exit;
    }
    //Trimiterea
    $subject ="=?utf-8?B?".base64_encode($subject)."?=";
    $headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html; charset=utf-8\r\n";
    if(mail("serg1oni2455@gmail.com", $subject, $message, $headers))
        echo "Mesaj trimis cu succes";
    else
        echo "Mesajul nu a fost trimis";
?>