<?php


use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\PHPMailer;


function send(array $data)
{
    $mail = new PHPMailer;
    $mail->CharSet = 'UTF-8';
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                    //Enable verbose debug output

    $mail->SMTPSecure = 'tls'; //PHPMailer::ENCRYPTION_SMTPS;   //Enable implicit TLS encryption
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = "smtps.monteirorondo.com";             //Set the SMTP server to send through
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'site@monteirorondo.com';                       //SMTP username
    $mail->Password   = 'site@monteirorondo.com';

    //Recipients
    $mail->setFrom($data['from'], $data['quem']);
    $mail->addAddress($data['para']);     //Add a recipient
    //$mail->addAddress('ellen@example.com');               //Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Body    = $data['message']; //'This is the HTML message body <b>in bold!</b>';
    $mail->Subject = $data['subject']; //'Here is the subject';
    $mail->AltBody = 'Para ver este mail tenha certeza de estar vendo em um programa que aceite ver HTML!';
    $mail->msgHTML($data['message']);
    return $mail->send();
}
