<?php
/**
 * Created by PhpStorm.
 * User: ptentugal
 * Date: 12/16/13
 * Time: 12:27 PM
 * TODO: Move this to Controller
 */
if (isset($_POST['contact']) && $_POST['contact'] == "true") {
    $email = "info@bateye.com";
    $name = "Bateye";
    $email_from = $_POST['email'];
    $name_from = $_POST['nome'];
    $assunto = $_POST['assunto'];
    $referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';
    $message = "Nome: " . $_POST['nome'] . "\n Email: " . $email_from . "\n Cidade: " . $_POST['cidade'] . "\n Mensagem: " . $_POST['mensagem'] . "\nTelefone: " . $_POST['telefone'];

    $mail = new PHPMailer(true);
    $mail->IsSMTP(); // telling the class to use SMTP

//    $mail->SMTPDebug  = 2;

    $mail->Mailer = "smtp";
    $mail->SMTPKeepAlive = true;

    $mail->SMTPAuth = true;                  // enable SMTP authentication
    $mail->SMTPSecure = "tls";                 // sets the prefix to the servier
    $mail->Host = "smtp.gmail.com";      // sets GMAIL as the SMTP server
    $mail->Port = 587;                   // set the SMTP port for the GMAIL server
    $mail->Username = "salesbateye@gmail.com";  // GMAIL username
    $mail->Password = "M@rc01325";            // GMAIL password

    $mail->AddAddress($email, $name);
    $mail->AddBCC("marcosousa@bateye.com");
    $mail->AddBCC("requeridas@bateye.com");
    $mail->SetFrom($email_from, $name_from);
    $mail->Subject = $assunto;
    $mail->Body = $message;

    try {
        $mail->Send();
        echo "true";
    } catch (Exception $e) {
        echo "false" . $mail->ErrorInfo;
    }
} else {
    $email = "info@bateye.com";
    $name = "Marco Sousa";
    $email_from = $_POST['email'];
    $name_from = $_POST['nome'];
    $assunto = "Subscrição na newsletter";
    $country = $_POST['country'];
    $referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';
    $message = "Nome: " . $name_from . "\n Email para subscrição: " . $email_from . "\n País: " . $country . "\n Mensagem: Subscrição na newsletter.";

    $mail = new PHPMailer(true);
    $mail->IsSMTP(); // telling the class to use SMTP

//    $mail->SMTPDebug  = 2;

    $mail->Mailer = "smtp";
    $mail->SMTPKeepAlive = true;

    $mail->SMTPAuth = true;                  // enable SMTP authentication
    $mail->SMTPSecure = "tls";                 // sets the prefix to the servier
    $mail->Host = "smtp.gmail.com";      // sets GMAIL as the SMTP server
    $mail->Port = 587;                   // set the SMTP port for the GMAIL server
    $mail->Username = "salesbateye@gmail.com";  // GMAIL username
    $mail->Password = "M@rc01325";            // GMAIL password

    $mail->AddAddress($email, $name);
    $mail->AddBCC("marcosousa@bateye.com");
    $mail->AddBCC("requeridas@bateye.com");
    $mail->SetFrom($email_from, $name_from);
    $mail->Subject = $assunto;
    $mail->Body = $message;


    try {
        $mail->Send();
        echo "true";
    } catch (Exception $e) {
        echo "false" . $mail->ErrorInfo;
    }
}