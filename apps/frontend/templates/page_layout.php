<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
</head>
<body>
<div id="newsletteroverlay" class="overlay">
    <div class="newsubscribe">
        <a id="closeform" style="display: inline-block"></a>

        <div style="width:200px; margin: 0 auto">
            <img class="logo" src="/images/logo_principal_cores.png" alt="Logo Bateye"/>
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
<div id="newsletter" style="position:fixed; z-index: 5; left: -6px; top:120px">
    <img src="/images/newsletter.png" style="">
</div>
<?php echo $sf_content ?>
<?php $uri_url=$_SERVER['REQUEST_URI'];?>
<div class="span11" id="footer" style="<?php if ($uri_url=="" || $uri_url=="index.php") echo 'display: none';?>">
    <div id="bar">
        <div id="logos">
            <a href="https://twitter.com/bat_eye"><img src="/images/icons/bateye_twitter.png" alt="Twitter Logo"></a>
            <a href="http://www.facebook.com/BatEye.com.pt"><img src="/images/icons/bateye_facebook.png" alt="Facebook Logo"></a>
            <a href="http://www.youtube.com/user/bateyevideos"><img src="/images/icons/bateye_youtube.png" alt="Youtube logo"></a>
            <a href="http://www.behance.net/Bateye"><img src="/images/icons/bateye_behance.png" alt="Behance Logo"></a>
            <a href="http://instagram.com/bateye"><img src="/images/icons/bateye_instagram.png" alt="Instagram Logo"></a>
            <a href="http://www.linkedin.com/company/bat-eye"><img src="/images/icons/bateye_linkedin.png" alt="Linkdin logo"></a>
        </div>
    </div>
    <div class="span11 center-text white-text latobold">
        <p style="font-size:15px;">+<a href="contact.php" style="font-size:14px;">INFO</a></p>
          <span class="latolight">info@bateye.com<br />
          +351 915790818</span>
    </div>
    <div id="rights" class="latolight">
        © 2013 <span class="latoitalic">bat eye, Ltd.</span><br />
        All rights reserved.
    </div>
</div>

</div>
</body>
</html>