<?php include(sfConfig::get('sf_app_template_dir').'/newsletter.php') ?>
<?php include(sfConfig::get('sf_app_template_dir').'/menuSecondary.php') ?>
<?php slot(
    'title',
    sprintf('Bat Eye brand author'))
?>
    <div id="seta">
        <a href="<?php echo url_for('thebrand') ?>"><img src="/images/setas.png"></a>
    </div>
    <div id="historybackground">
        <div class="clear"></div>
    </div>
    <div id="brand_history">
        since<br>
        2011<br>

        <b>'Change to what you love is always an easy choice.'</b>

        <h1>Marco Sousa</h1>
        <p>After years dedicated to architecture, his field of study, Marco Sousa founded, in September 2011, Bat eye. The brand presented itself to the world at Décorex, in London, among the best internationally recognized designers.<br>
            A detail, in a lock, brings to mind a Bat eye. The bat's sixth sense guides it, but is when the bat can see, that it observes. Observing, it perceives the world, and seizes it. And it was precisely noticing that detail that the brand won its identity. Bat eye because we want more than just see, we want to observe, appreciate and create passionate pieces.</p>
    </div>
<?php include(sfConfig::get('sf_app_template_dir').'/exploreMore.php') ?>
<?php include(sfConfig::get('sf_app_template_dir').'/footerSecondary.php') ?>