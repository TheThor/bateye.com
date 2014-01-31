<?php
/**
 * Created by PhpStorm.
 * User: ptentugal
 * Date: 12/16/13
 * Time: 12:27 PM
 */
require_once("include/class.phpmailer.php");
$email = "marcosousa@bateye.com";
$name = "Marco Sousa";
$email_from = $_POST['email'];
$name_from = $_POST['name'];
$assunto = "Subscrição na newsletter";
$referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';
$message = "Nome: " .$_POST['name'] . "\n Email: " . $email_from . "\n País: " . $_POST['country'] . "\n Mensagem: Subscrição na newsletter.";

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