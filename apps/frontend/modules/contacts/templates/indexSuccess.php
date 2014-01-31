<?php include(sfConfig::get('sf_app_template_dir').'/newsletter.php') ?>
<?php include(sfConfig::get('sf_app_template_dir').'/menuSecondary.php') ?>
<?php slot(
    'title',
    sprintf('Bat Eye - Contacts'))
?>
<div id="talk">
    <h1>talk with us</h1><br>
    <hr>
    <form id="mailer" name="mailer" method="post" action="<?php echo url_for(array(
        'module' => 'contacts',
        'action' => 'sendmail',
    ))?>">
        NAME <br><input type="text" name="nome" id="nome" ><br><br>
        SUBJECT <br><input type="text" name="assunto" id="assunto"><br><br>
        E-MAIL <br><input type="email" name="email_mailer" id="email_mailer"><br><br>
        PHONE <br><input type="text" name="telefone" id="telefone"><br><br>
        CITY <br><input type="text" name="cidade" id="cidade"><br><br>
        MESSAGE <br><textarea rows="5" cols="40" id="mensagem" name="mensagem"></textarea><br><br>
        <input type="submit" name="send" id="send" value="SEND" class="button" data-url="<?php echo url_for(array(
            'module' => 'contacts',
            'action' => 'sendmail',
        ))?>">
    </form>
</div>
<div id="download">
    <h1>download</h1><br>
    <hr>
    <div id="d_1" style="height: 80px">
        <a href="<?php echo url_for('media/catalogue.pdf') ?>">
            <img src="/images/icons/catalogo.png"><br>
        </a>
        <h2>catalogue</h2>
    </div>
    <div id="d_2">
        <img src="/images/icons/presskit.png"><br>
        <h2>presskit</h2>
    </div>
</div>
<?php include(sfConfig::get('sf_app_template_dir').'/footerSecondary.php') ?>