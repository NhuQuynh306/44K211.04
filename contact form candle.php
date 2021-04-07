<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];


    $email_from = 'easytutorials@avinashkr.com';

    $email_subject = "new form submission";

    $email_body = "Use Name: $name.\n".
                    "Use Email: $visitor_email.\n".
                        "Use Message: $message.\n";


    $to = "avnash6252@gmail.com";


    $headers = "From: $email_from\r\n";

    $headers .= "Reply-to: $Visitor_email\r\n";

    mail($to,$mail_subject,$email_body,$headers);

    headers ("Location: index.html");
    



?>