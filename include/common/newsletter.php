<!--
<!--  Created by PhpStorm.-->
<!--  User: pedro-->
<!--  Date: 1/9/14-->
<!--  Time: 7:52 PM-->
<!-- /-->
    <div id="newsletteroverlay" class="overlay">
        <div class="newsubscribe">
            <a id="closeform" style="display: inline-block"></a>

            <div style="width:200px; margin: 0 auto">
                <img class="logo" src="images/logo_principal_cores.png" alt="Logo Bateye"/>
            </div>
            <div id="newsletterform">
                <form id="mail" name="mail" method="post" action="contact-us.php">
                    <label for="name">NAME</label><input type="text" name="name" id="name"/>
                    <label for="email">EMAIL</label><input type="email" name="email" id="email"/>
                    <label for="country">COUNTRY</label><input type="text" name="country" id="country"/>
                    <!--  <div id="termos">
                       <input type="checkbox" name="terms" id="terms"> Ao submeter os seus dados receberá a newsletter, ofertas e publicidade enviado por bateye.com e aceita os Termos e Condições e a Política de Privacidade. Os dados submetidos não serão partilhados com mais nenhuma entidade.
                     </div> -->
                    <div id="sendcontainer">
                        <input type="submit" name="enviar" id="enviar" value="SEND" class="button">
                    </div>
                </form>
            </div>
        </div>
    </div>