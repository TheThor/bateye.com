<?php include(sfConfig::get('sf_app_template_dir').'/newsletter.php') ?>
<?php include(sfConfig::get('sf_app_template_dir').'/menuSecondary.php') ?>
<?php slot(
    'title',
    sprintf('Bat Eye brand author'))
?>
    <div id="seta">
        <a href="<?php echo url_for('thebrand') ?>"><img src="/images/setas.png"></a>
    </div>
    <div id="authorbackground">
        <div class="clear"></div>
    </div>
    <div id="brand_author">
        Marco
        Sousa<br>
        <p>'As an architect, I felt the need to create furniture that caught in the elements of convergence between art and the city. The shapes, movements, gestures and chromatics that my look keeps are transcribed into furniture as a tribute to the places.<br>
            Nobody chooses the city where born.  But sometimes the city chooses us. It happened with me. It’s like this with Porto. My traces became the streets’ traces, the city’s light awns my colours, and maybe I’ll draw to discover its mysteries. I have much to draw.
            I want to create pieces of the world, for the entire world'.
        </p>
    </div>
<?php include(sfConfig::get('sf_app_template_dir').'/exploreMore.php') ?>
<?php include(sfConfig::get('sf_app_template_dir').'/footerSecondary.php') ?>