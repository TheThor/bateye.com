<!DOCTYPE html>
<html>
	<head>
		<?php
			require 'top.php';
		?>
		<title>Bat Eye | Contact</title>
	</head>
	<body>
		<div id="talk">
			<h1>talk with us</h1><br>
			<hr>
			<form name="mail" method="post" action="">
				NAME <br><input type="text" name="nome" id="nome" ><br><br>
				SUBJECT <br><input type="text" name="assunto" id="assunto"><br><br>
				E-MAIL <br><input type="text" name="email" id="email"><br><br>
				PHONE <br><input type="text" name="telefone" id="telefone"><br><br>
				CITY <br><input type="text" name="cidade" id="cidade"><br><br>
				MESSAGE <br><textarea rows="5" cols="40" id="mensagem" name="mensagem"></textarea><br><br>
				<input type="submit" name="send" id="send" value="SEND" class="button">
            </form>
				<?php
				    if(isset($_POST['enviar']))
				    {
//                        var_dump($_POST); exit;
				        if($_POST['nome']==""||$_POST['assunto']==""||$_POST['email']==""||$_POST['telefone']==""||$_POST['cidade']==""||$_POST['mensagem']=="")
				        {
				            echo"Por favor preencha todos os campos!";
				        }else{
                            require_once("include/class.phpmailer.php");
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
                                echo "E-mail enviado com sucesso!!";
                            } catch(Exception $e){
                                echo "false". $mail->ErrorInfo;
                            }
                        }
                    }
				?>
		</div>
<!--		<div id="follow">-->
<!--			<div id="subs">-->
<!--				<h1>subscribe</h1><br>-->
<!--				<hr>-->
<!--				<div id="s_1">-->
<!--					<img src="images/icons/newsletter.png">-->
<!--					<h2>newsletter</h2>-->
<!--				</div>-->
<!--				<div id="s_2">-->
<!--					<form name="news" method="post" action="">-->
<!--						E-MAIL <input type="text" name="email_news" id="email_news"><br>-->
<!--						<input type="submit" name="enviar_news" id="enviar_news" value="SUBS" class="button">-->
<!--						--><?php //
//						if(isset($_POST['enviar_news']))
//						{
//							if($_POST['email_news']=="")
//							{
//								echo "Por favor indique o seu e-mail!";
//							}else{
//								$email_news=$_POST[email_news];
//
//								//enviar newsletter
//								mail("killzonedsk@gmail.com","Newsletter Bat Eye","
//
//
//									Email:\n$email_news\n","FROM: <$email_news>");
//
//								echo"Subs efectuada!!";
//							}
//						}
//						?>
<!--					</div>-->
<!--				</div>-->
<!--			</div>-->
		<!-- <div id="contact">
			<h1>contact us</h1><br>
			<hr>
			<div id="c_1">
				<img src="images/icons/telefone.png"><br>
				<h2>+351 915 790 818</h2>
			</div>
			<div id="c_2">
				<img src="images/icons/email.png"><br>
				<h2>info@bateye.com</h2>
			</div>
			<div id="c_3">
				<img src="images/icons/morada.png"><br>
				<h2>Porto<br>Portugal</h2>
			</div>
		</div> -->
		<div id="download">
			<h1>download</h1><br>
			<hr>
			<div id="d_1">
				<img src="images/icons/catalogo.png"><br>
				<h2>catalogue</h2>
			</div>
			<div id="d_2">
				<img src="images/icons/presskit.png"><br>
				<h2>presskit</h2>
			</div>
		</div>
		<?php 
		require 'explore.php';
	?>
	</body>
</html>