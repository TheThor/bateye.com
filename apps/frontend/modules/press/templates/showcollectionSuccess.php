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
                <h3 class="abrilfat"><?php echo $collection->getName() ?></h3>
            </div>
            <div class="span9">
            <?php /** @var PressCollection $product */
            foreach ($products as $product): ?>
                <div class="span3 span3marginalized">
                    <a href="<?php echo url_for(array(
                        'module' => 'press',
                        'action' => 'showproduct',
                        'id' => $product->getId()
                    ))?>">
                        <img src="<?php echo '/images/press/collection/' . $product->getProductImage() ?>" alt="example"/>
                    </a>
                    <p class="no-margin"><?php echo $product->getProduct()->getName() ?></p>
                    <a class="span10" href="<?php echo url_for('mediafile') . '?filepath=' . sfConfig::get('sf_upload_dir') . '/press/collection/' . $product->getPackageLocation() ?>">>package</a>
                    <a class="span10" href="<?php echo url_for(array(
                        'module' => 'press',
                        'action' => 'showproduct',
                        'id' => $product->getId()
                    ))?>">>single images</a>
                </div>
            <?php endforeach; ?>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>
<?php include(sfConfig::get('sf_app_template_dir').'/footerSecondary.php') ?>
