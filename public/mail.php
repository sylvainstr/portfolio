<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

if (isset($_POST['name']) && ($_POST['message'])) {
  $name = $_POST['name'];
  $company = $_POST['company'];
  $message = $_POST['message'];
}

require $_SERVER['DOCUMENT_ROOT'] . '/../vendor/phpmailer/phpmailer/src/Exception.php';
require $_SERVER['DOCUMENT_ROOT'] . '/../vendor/phpmailer/phpmailer/src/PHPMailer.php';
require $_SERVER['DOCUMENT_ROOT'] . '/../vendor/phpmailer/phpmailer/src/SMTP.php';


    $mail = new PHPMailer(true);

    try {
        //Server settings
      // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                   //Enable verbose debug output
      // $mail->isSMTP();                                        //Send using SMTP
      $mail->Host       = 'bij.o2switch.net';                 //Set the SMTP server to send through
      $mail->Port       = 26;                               //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
      $mail->CharSet = 'utf-8';                                  //Charset

      //Recipients
        $mail->setFrom('no-reply@sylvainsainteromane.com');
        $mail->addAddress('contact@sylvainsainteromane.com');     //Add a recipient
        // $mail->addAddress('ellen@example.com');               //Name is optional
        // $mail->addReplyTo('info@example.com', 'Information');
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');

        //Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

        //Content
      $mail->isHTML(true);                                  //Set email format to HTML
      $mail->Subject = $company;
      $mail->Body    = "$message <br> $name";
      $mail->AltBody = $message;

        $mail->send();
        // echo "Bonjour <b> $name </b>, votre message a bien été envoyé !!";
        header("Location: https:$absoluteUrl");        
        exit;
        
      } catch (Exception $e) {
        echo "Message non envoyé. Erreur: {$mail->ErrorInfo}";
      }
      

      

