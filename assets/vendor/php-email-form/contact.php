<?php
if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $subject = $_POST['email'] ;
    $mailform = $_POST['subject'] ;
    $message = $_POST['message'] ;

    $mailTo = "rajphx299@gmail.com"
    $headers = "From: ".$mailform ;
    $txt = "You have recived an e-mail from".$name. ".\n\n".$message;
    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.html?mailsend");
}

