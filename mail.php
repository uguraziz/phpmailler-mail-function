<?php

function send_email($email, $name, $subject, $message)
{
    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = true;
        $mail->Username = "aziztestmailhesabi@gmail.com";
        $mail->Password = "aziztest123";
        $mail->SMTPSecure = "tlc";
        $mail->Port = 587;
        $mail->CharSet = "UTF-8";

        $mail->setFrom("aziztestmailhesabi@gmail.com", "Uğur ALTUN");
        $mail->addAddress($email, $name);

        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = nl2br($message);

        $mail->send();
        return true;
    } catch (Exception $e) {
        return false;
    }
}
//send_email("aziz_altun93@hotmail.com", "RE:neden", "Mail başlık", "Mail Mesage");
//https://myaccount.google.com/lesssecureapps gmail den göndermek için açık olması gerek!

