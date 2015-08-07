$(document).ready(function() {
    $('.deactivated').on('click', function() {
        e.preventDefault();
        document.body.innerHTML += '<div class="warning-popup">Ainda não disponível/Not yet available</div>';
        $('.warning-popup').fadeIn("slow", function() {
            $('.warning-popup').fadeOut("slow");
        });
    });
});
