<div id="newsletteroverlay" class="overlay">
    <div class="newsubscribe">
        <a id="closeform" style="display: inline-block"></a>

        <div style="width:200px; margin: 0 auto">
            <img class="logo" src="/images/logo_principal_cores.png" alt="Logo Bateye"/>
        </div>
        <div id="newsletterform">
            <form id="mail" name="mail" method="post" action="<?php echo url_for(array(
                'module' => 'contacts',
                'action' => 'sendmail',
            ))?>">
                <label for="name">NAME</label><input type="text" name="name" id="name"/>
                <label for="email">EMAIL</label><input type="email" name="email" id="email"/>
                <label for="country">COUNTRY</label><input type="text" name="country" id="country"/>
                <!--  <div id="termos">
                   <input type="checkbox" name="terms" id="terms"> Ao submeter os seus dados receberá a newsletter, ofertas e publicidade enviado por bateye.com e aceita os Termos e Condições e a Política de Privacidade. Os dados submetidos não serão partilhados com mais nenhuma entidade.
                 </div> -->
                <div id="sendcontainer">
                    <input type="submit" name="enviar" id="enviar" value="SEND" class="button" data-url="<?php echo url_for(array(
                        'module' => 'contacts',
                        'action' => 'sendmail',
                    ))?>">
                </div>
            </form>
        </div>
    </div>
</div>
<div id="newsletter" style="position:fixed; z-index: 5; left: -6px; top:120px">
    <img src="/images/newsletter.png" style="">
</div>
<div id="catalogue" style="position:fixed; z-index: 5; left: -6px; top:245px;">
    <a href="<?php echo url_for('mediafile') ?>"><img src="/images/CATALOGUE.png"></a>
</div>