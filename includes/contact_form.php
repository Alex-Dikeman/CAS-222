<?php
    //use PHPMailer\PHPMailer\PHPMailer;
    //use PHPMailer\PHPMailer\Exception;
    //require 'C:\xampp\composer\vendor\autoload.php';


    //require 'PHPMailer\PHPMailer-5.2-stable\Exception.php';

    require '../PHPMailer\PHPMailer-5.2-stable\class.phpmailer.php';

    require '../PHPMailer\PHPMailer-5.2-stable\class.smtp.php';

    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->Mailer = "smtp";
    $mail->SMTPDebug  = 1;  
    $mail->SMTPAuth   = TRUE;
    $mail->SMTPSecure = "tls";
    $mail->Port       = 587;
    $mail->Host       = "smtp.gmail.com";
    $mail->Username   = "boringemailcompany@gmail.com";
    $mail->Password   = "testPass2020";
    $users_name = $_POST['contactName'];
    $users_email = $_POST['contactMail'];
    $users_message = $_POST['contactText'];
        
    $mail->IsHTML(true);
    $mail->AddAddress("$users_email", "$users_name");
    $mail->SetFrom("boringemailcompany@gmail.com", "Alex");
    $mail->AddReplyTo("reply-to-email@domain", "Alex");
    $mail->Subject = "Thank you for contacting us!";
    $content = "<b>Thank you for contacting us. We should be able to reply within a couple days. A copy of your message is below. <p>$users_message</p></b>";
    $mail->MsgHTML($content); 

    $mail->IsHTML(true);
    $mail->AddAddress("adikeman71@gmail.com", "Alex Dikeman");
    $mail->SetFrom("boringemailcompany@gmail.com", "Alex");
    $mail->AddReplyTo("", "");
    $mail->Subject = "A customer is contacting you.";
    $content = "<b>$users_name says: <p>$users_message</p></b>";
    $mail->MsgHTML($content); 
    if(!$mail->Send()) {
      echo "Error while sending Email.";
      var_dump($mail);
    } else {
        header("Location: success.html.php");
    }
?>
