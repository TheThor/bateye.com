<?php include(sfConfig::get('sf_app_template_dir').'/newsletter.php') ?>
<div class="span11 pagination-centered" style="position: relative">
    <img class="logo" src="/images/logo_principal_cores.png" alt="Logo Bateye"/>
    <!--    <div id="lang-choice">-->
    <!--        <a href="">EN </a>|<a href="index.php"> PT</a>-->
    <!--    </div>-->
</div>
<div class="container">
    <?php include_partial(
        'pressareamenu',
        array('collections' => $collections)
    ) ?>
    <div class="span11" id="press-main-area">
        <div class="gallery-container">
            <div class="span3">
                <?php /** @var Collection $collection */ ?>
                <h3 class="abrilfat">Cover Videos</h3>
            </div>
            <div class="span9">
            <?php /** @var PressCoverVideo $coverVideo */
            foreach ($coverVideos as $coverVideo): ?>
                <div class="span3 span3marginalized">
                    <img src="<?php echo $coverVideo->getLink() ?>" alt="example"/>
                </div>
            <?php endforeach; ?>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>
<?php include(sfConfig::get('sf_app_template_dir').'/footerSecondary.php') ?>
