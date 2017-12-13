<?php
if(isset($POST['submit'])){
    $to = "contact@samyhussaein.com"; // this is your Email address
    $from = $POST['email']; // this is the sender's Email address
    $first_name = $POST['first_name'];
    $last_name = $POST['last_name'];
    $subject = $POST['subject'];
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message);
    mail($from,$subject,$message2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    }
?>
