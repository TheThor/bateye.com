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
                <h3 class="abrilfat">LOGO</h3>
            </div>
            <div class="span9">
            <?php /** @var PressLogo $logo */
            foreach ($logos as $logo): ?>
            <div class="span3 span3marginalized">
                <img src="/images/press/logo/<?php echo $logo->getImage() ?>" alt="example"/>
                <p class="no-margin">COLOR</p>
                <a class="span10" href="/images/press/logo/<?php echo $logo->getPngLocation() ?>">>png.</a>
                <a class="span10" href="/images/press/logo/<?php echo $logo->getJpgLocation() ?>">>jpeg.</a>
            </div>
            <?php endforeach; ?>
            </div>
            <div class="clear"></div>
        </div>
        <div class="gallery-container">
            <div class="span3">
                <h3 class="abrilfat">CONCEPT IMAGES</h3>
            </div>
            <div class="span9">
            <?php /** @var PressProductConcept $concept */
            foreach ($concepts as $concept): ?>
                <div class="span3 span3marginalized">
                    <img src="/images/press/product_concept/<?php echo $concept->getImage() ?>" alt="example"/>
                    <p class="no-margin"><?php echo $concept->getProduct()->getName() ?></p>
                    <a class="span10" href="<?php echo url_for('mediafile') . '?filepath=' . sfConfig::get('sf_upload_dir') . '/press/product_concept/' . $concept->getPackageLocation() ?>">>package.</a>
                </div>
            <?php endforeach; ?>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>
<?php include(sfConfig::get('sf_app_template_dir').'/footerSecondary.php') ?>
