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
