<?php 
session_start();

if (isset($_POST['contactForm'])) {
    
    if (isset($_POST['name'])) { // sender's name
        $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING); // Sanitization
    }

    if (isset($_POST['email'])) { // sender's Email address
        $from = filter_var($_POST['email'], FILTER_SANITIZE_STRING); // Sanitization
    }

    $to = "sy.durant@hotmail.com"; // my Email address
    $subject = "Mail from my CV";
    $subject2 = "Copy of your Mail";
    $headers = "From: webmaster@example.com";
    $message = 'From: '.$name. "\n\n".
                $_POST["message"];
    $message2 = "Thank you for contacting me, I will come back to you as soon as possible. \n\n".
                "Here is a copy of your message: \n\n" 
                .'"'. $_POST["message"].'"'."\n\n".
                "\n\n".
                "Have a nice day,\n\n".
                "Sylvain Durant";
    mail($to,$subject,$message,$from);
    mail($from,$subject2,$message2,$to); // sends a copy of the message to the sender
    $_SESSION['success_message'] = "Your message has been sent! </br> I will come back to you as soon as possible.";
    header('location:http://www.sylvaindurant.compteweb.com/');
}
?>