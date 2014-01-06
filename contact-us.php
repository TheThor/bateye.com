<?php
/**
 * Created by PhpStorm.
 * User: ptentugal
 * Date: 12/16/13
 * Time: 12:27 PM
 */
//$to_email = 'adm-mass@adclick.pt';
$to_email = "marcosousa@bateye.com";
$fromemail = $_POST['email'];
$nome = $_POST['name'];
$assunto = "Subscrição na newsletter";
$referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';
$message = "Nome: " .$_POST['Nome'] . "\n Email: " . $fromemail . "\n País: " . $_POST['country'] . "\n Mensagem: Subscrição na newsletter.";

$noError="true";

$sent = @mail($to_email, $assunto, $message);
if($sent!=1){
    $noerror=="false";
}

if ($noError=="true"){
    echo "true";
}
else{
    echo "false";
}