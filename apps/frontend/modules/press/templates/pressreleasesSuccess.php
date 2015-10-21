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
                <h3 class="abrilfat">Press Releases</h3>
            </div>
            <div class="span9">
            <?php /** @var PressRelease $pressRelease */
            foreach ($pressReleases as $pressRelease): ?>
                <div class="span3 span3marginalized">
                    <img src="<?php echo '/images/press/release/' . $pressRelease->getCover() ?>" alt="example"/>
                    <p class="no-margin">COLOR</p>
                    <a class="span10" href="<?php echo url_for('mediafile') . '?filepath=' . sfConfig::get('sf_upload_dir') . '/images/press/release/files/' . $pressRelease->getLink() ?>">>download</a>
                </div>
            <?php endforeach; ?>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>
<?php include(sfConfig::get('sf_app_template_dir').'/footerSecondary.php') ?>
