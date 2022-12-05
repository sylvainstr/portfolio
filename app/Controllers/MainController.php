<?php

namespace Portfolio\Controllers;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

class MainController extends CoreController
{

  public function home()
  {
      $this->show('home');
  }

  public function cv()
  {
      $this->show('cv');
  }

  public function cgv()
  {
      $this->show('cgv');
  }

  public function legalNotice()
  {
      $this->show('legal-notice');
  }
     
  public function contact ()
  {
    $pattern = "/[a-zA-Z]/";

    if (isset($_POST['name']) && ($_POST['message'])) {
      if (preg_match($pattern, $_POST['name'])
      && preg_match($pattern, $_POST['message']))
      {
        
        // je récupére les données et je désactive les balises
        $name = htmlentities($_POST['name']);
        $company = htmlentities($_POST['company']);
        $message = htmlentities($_POST['message']);
      }
    }


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
        
      } catch (Exception $e) {
        echo "KO";
      }

    echo "OK";
  }
  
}
