<?php

namespace Portfolio\Controllers;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require $_SERVER['DOCUMENT_ROOT'] . '/../vendor/phpmailer/phpmailer/src/Exception.php';
require $_SERVER['DOCUMENT_ROOT'] . '/../vendor/phpmailer/phpmailer/src/PHPMailer.php';
require $_SERVER['DOCUMENT_ROOT'] . '/../vendor/phpmailer/phpmailer/src/SMTP.php';

class MainController extends CoreController
{

  public function home()
  {
      $this->show('home');
  }

  public function contact()
  {
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                   //Enable verbose debug output
        $mail->isSMTP();                                        //Send using SMTP
        $mail->Host       = 'smtp://sylvainsainteromane.com/';                 //Set the SMTP server to send through
        $mail->Port       = 26;                               //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        $mail->CharSet = 'utf-8';                                  //Charset

        //Recipients
        $mail->setFrom('no-reply@sylvain.sainteromane.fr');
        $mail->addAddress('contact@sylvain.sainteromane.fr');     //Add a recipient
        // $mail->addAddress('ellen@example.com');               //Name is optional
        // $mail->addReplyTo('info@example.com', 'Information');
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');

        //Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Sujet du message';
        $mail->Body    = 'Message';
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        echo 'Le message a été envoyé';
    } catch (Exception $e) {
        echo "Message non envoyé. Erreur: {$mail->ErrorInfo}";
    }
  }
      
}
