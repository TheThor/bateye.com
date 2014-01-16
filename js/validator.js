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

$("#enviar").click(function(){
	if (error>0 || !$("#mail input[type='text']").val() || !$("#mail input[type='email']").val() || !IsEmail($("#mail input[type='email']").val()) /*|| !$("#mail input[type='checkbox']").is(':checked')*/){
		alert("Tem erros no formulário.");
	}else{
		var data = {
            nome: $("#nome").val(),
            email: $("#email").val(),
            empresa: $("#empresa").val(),
            assunto: $("#assunto").val(),
            messagem: $("#commentsText").val()
        };
        $.ajax({
	        type: "POST",
	        url: "contact-us.php",
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


function IsEmail(email) {
  var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  return regex.test(email);
}