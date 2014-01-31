<?php include(sfConfig::get('sf_app_template_dir').'/newsletter.php') ?>
<?php include(sfConfig::get('sf_app_template_dir').'/menuSecondary.php') ?>
<?php slot(
    'title',
    sprintf('Bat Eye brand author'))
?>
    <div id="manufacturebackground">
        <div class="clear"></div>
    </div>
    <div id="seta">
        <a href="<?php echo url_for('thebrand') ?>"><img src="/images/setas.png"></a>
    </div>
    <div id="brand_manufacture">
        Manufacture
        <p>Since Prehistoric, man produces objects, buildings, images. Each culture has its own relationship with the objects, which makes it difficult to separate art and design. From this premise, Bat eye drew and sculpted pieces that can be seen as art and design pieces. This symbiosis can only work with the best artisans, a fact that can be perceived in the perfection and boldness of our collection.
            We value the manual work of the competent and dedicated artisans. <br>
            To understand that the latest technology only resists if it blends with tradition. Furthermore, understand that the worthiest of the gestures is worthless if it is not crafted by the most competent artisans. <br>
            From the noblest materials, excellence will emerge. From precise detail, uniqueness will arise. And from the passion we put in everything we do, a perfect piece will one day emerge. With all this added value, we’re constantly feeling the risk of our pieces become art instead of furniture.</p>
    </div>
<?php include(sfConfig::get('sf_app_template_dir').'/exploreMore.php') ?>
<?php include(sfConfig::get('sf_app_template_dir').'/footerSecondary.php') ?>