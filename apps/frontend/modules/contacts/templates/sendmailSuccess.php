<?php
/**
 * Created by PhpStorm.
 * User: ptentugal
 * Date: 12/16/13
 * Time: 12:27 PM
 */
if(isset($_POST['contact']) && $_POST['contact']=="true"){
    $email = "marcosousa@bateye.com";
    $name = "Marco Sousa";
    $email_from = $_POST['email'];
    $name_from = $_POST['nome'];
    $assunto = $_POST['assunto'];
    $referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';
    $message = "Nome: " .$_POST['nome'] . "\n Email: " . $email_from . "\n Cidade: " . $_POST['cidade'] . "\n Mensagem: " . $_POST['mensagem'] . "\nTelefone: ". $_POST['telefone'];

    $mail = new PHPMailer(true);
    $mail->IsSMTP(); // telling the class to use SMTP
    $mail->SMTPAuth = true; // enable SMTP authentication
    $mail->Host = "smtp.bateye.com"; // sets GMAIL as the SMTP server
    $mail->Port = 25; // set the SMTP port for the GMAIL server
    $mail->Username = "bateye"; // GMAIL username
    $mail->Password = "att314"; // GMAIL password
    $mail->AddAddress($email, $name);
    $mail->SetFrom($email_from, $name_from);
    $mail->Subject = $assunto;
    $mail->Body = $message;

    try{
        $mail->Send();
        echo "true";
    } catch(Exception $e){
        echo "false". $mail->ErrorInfo;
    }
}
else{
    $email = "marcosousa@bateye.com";
    $name = "Marco Sousa";
    $email_from = $_POST['email'];
    $name_from = $_POST['nome'];
    $assunto = "Subscrição na newsletter";
    $country = $_POST['country'];
    $referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';
    $message = "Nome: " . $name_from . "\n Email para subscrição: " . $email_from . "\n País: " . $country . "\n Mensagem: Subscrição na newsletter.";

    $mail = new PHPMailer(true);
    $mail->IsSMTP(); // telling the class to use SMTP
    $mail->SMTPSecure = "tls";
    $mail->SMTPAuth = true; // enable SMTP authentication
    $mail->Host = "smtp.live.com"; // sets GMAIL as the SMTP server
    $mail->Port = 587; // set the SMTP port for the GMAIL server
    $mail->Username = "bateye.sales@hotmail.com"; // GMAIL username
    $mail->Password = "Portocollection"; // GMAIL password
    $mail->AddAddress($email, $name);
    $mail->SetFrom($email_from, $name_from);
    $mail->Subject = $assunto;
    $mail->Body = $message;

    try{
        $mail->Send();
        echo "true";
    } catch(Exception $e){
        echo "false". $mail->ErrorInfo;
    }
}