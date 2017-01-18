<?php include(sfConfig::get('sf_app_template_dir').'/newsletter.php') ?>
<?php include_partial('header') ?>
<div class="container">
    <?php include_partial(
        'pressareamenu',
        array('collections' => $collections)
    ) ?>
    <div class="span100" id="press-main-area">
        <div class="gallery-container">
            <div class="span3">
                <?php /** @var Collection $collection */ ?>
                <h3 class="abrilfat">Catalogues</h3>
            </div>
            <div class="span9">
            <?php /** @var PressCatalogue $catalogue */
            foreach ($catalogues as $catalogue): ?>
                <div class="span3 span3marginalized">
                    <img src="<?php echo '/images/press/catalogue/' . $catalogue->getCover() ?>" alt="example"/>
                    <p class="no-margin">COLOR</p>
                    <a class="span10" href="<?php echo url_for('mediafile') . '?filepath=' . sfConfig::get('sf_upload_dir') . '/images/press/catalogue/' . $catalogue->getLink() ?>">>Download</a>
                </div>
            <?php endforeach; ?>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>
<?php include(sfConfig::get('sf_app_template_dir').'/footerSecondary.php') ?>
