<?php
  if(isset($_POST['enviar']))
  {
    if($_POST['name']=="" || $_POST['email']=="" || $_POST['country']=="")
    {
      echo "Por favor preencha todos os campos!";
    }else{
      if ($_POST['terms']=="YES"){
        $nome=$_POST['nome'];
        $assunto="Inscrição na newsletter.";
        $email=$_POST['email'];
        $country=$_POST['country'];
        $terms="Termos aceites.";

            //enviar mail

        mail("pedrotentugal@gmail.com","Formulário Contacto Bat Eye","

         Nome:\n$nome\n
         Assunto:\n$assunto\n
         Email:\n$email\n
         Telefone:\n$telefone\n
         País:\n$country\n
         Mensagem:\n$terms","FROM:$nome<$email>");

        echo "E-mail enviado com sucesso!!";
      }
      else{
        echo "Tem de aceitar os termos!!";
      }
    }

  }
?>