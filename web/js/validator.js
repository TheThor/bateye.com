$(document).ready(function() {
    error=0;

    $("#mail input[type='text']").blur(function() {
        if( !$(this).val() ) {
            $(this).addClass('warning');
            error++;
        }
        else{
            $(this).removeClass('warning');
            error--;
        }
    });

    $("#mail input[type='email']").blur(function() {
        if( !$(this).val() || !IsEmail($(this).val())) {
            $(this).addClass('warning');
            error++;
        }
        else{
            $(this).removeClass('warning');
            error--;
        }
    });

    $("#mailer input[type='text']").blur(function() {
        if( !$(this).val() ) {
            $(this).addClass('warning');
            error++;
        }
        else{
            $(this).removeClass('warning');
            error--;
        }
    });

    $("#mailer input[type='email']").blur(function() {
        if( !$(this).val() || !IsEmail($(this).val())) {
            $(this).addClass('warning');
            error++;
        }
        else{
            $(this).removeClass('warning');
            error--;
        }
    });

    $("#enviar").click(function(){
        url_for = $("#enviar").attr("data-url");
        if (error>0 || !$("#mail input[type='text']").val() || !$("#mail input[type='email']").val() || !IsEmail($("#mail input[type='email']").val()) /*|| !$("#mail input[type='checkbox']").is(':checked')*/){
            alert("Tem erros no formulário.");
            return false;
        }else{
            var data = {
                nome: $("#name").val(),
                email: $("#email").val(),
                country: $("#country").val()
            };
            $.ajax({
                type: "POST",
                url: url_for,
                data: data,
                success: function(result){
                    if (result == 'true') {
                        alert("Subscrição efectuada!");
                    } else {
                        alert("Não foi possível enviar a subscrição. Contacte-nos para marcosousa@bateye.com!")
                    }
                },
                error: function(errormessage){
                    $( "#senterror" ).dialog( "open" );
                }
            });
            return false;
        }
    });
    $("#send").click(function(){
        url_for = $("#send").attr("data-url");
        if (error>0 || !$("#mailer input[type='text']").val() || !$("#mailer input[type='email']").val() || !IsEmail($("#mailer input[type='email']").val()) /*|| !$("#mail input[type='checkbox']").is(':checked')*/){
            alert("Tem erros no formulário.");
            return false;
        }else{
            var data = {
                nome: $("#nome").val(),
                assunto: $("#assunto").val(),
                email: $("#email_mailer").val(),
                telefone: $("#telefone").val(),
                cidade: $("#cidade").val(),
                mensagem: $("#mensagem").val(),
                contact: "true"
            };
            $.ajax({
                type: "POST",
                url: url_for,
                data: data,
                success: function(result){
                    if (result == 'true') {
                        alert("Email enviado! Obrigado!");
                    } else {
                        alert("Não foi possível enviar o email. Contacte-nos para marcosousa@bateye.com p.f.f.!")
                    }
                },
                error: function(errormessage){
                    $( "#senterror" ).dialog( "open" );
                }
            });
            return false;
        }
    });
});


    function IsEmail(email) {
      var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
      return regex.test(email);
    }