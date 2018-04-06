<script src="https://www.google.com/recaptcha/api.js" async defer></script>
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
                <noscript>
                    <iframe src="http://api.recaptcha.net/noscript?k=6LfaWzkUAAAAAMgZnxf0B9HKifDbbZbTJRuD8Ck5" height="300" width="500" frameborder="0"></iframe><br/>
                    <textarea name="recaptcha_challenge_field" rows="3" cols="40"></textarea>
                    <input type="hidden" name="recaptcha_response_field" value="manual_challenge"/>
                </noscript>

                <div class="g-recaptcha" data-callback="onHuman" data-sitekey="6LfaWzkUAAAAAMgZnxf0B9HKifDbbZbTJRuD8Ck5"></div>
                <input type="hidden" id="captcha" name="captcha" value="">
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
<?php /** @var CatalogueManagerTable $instance */
$instance = CatalogueManagerTable::getInstance();
/** @var Doctrine_Collection $catalogue */
$catalogue = $instance->getLastInserted();
/** @var CatalogueManager $catalogue */
$catalogue = $catalogue->getFirst();
?>
<div id="catalogue" style="position:fixed; z-index: 5; left: -6px; top:245px;">
    <a href="<?php echo url_for('mediafile') . '?filepath=' . $catalogue->getPath() ?>"><img src="/images/CATALOGUE.png"></a>
</div>