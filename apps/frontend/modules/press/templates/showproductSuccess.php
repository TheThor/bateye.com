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
                <?php /** @var Product $product */ ?>
                <h3 class="abrilfat"><?php echo $product->getName() ?></h3>
            </div>
            <div class="span9">
                <?php /** @var PressProductImage $image */
                foreach ($images as $image): ?>
                    <div class="span3 span3marginalized">
                        <img src="<?php echo '/images/press/product/' . $image->getLowResImg() ?>" alt="example"/>
                        <p class="no-margin"><?php echo $image->getProduct()->getName() ?></p>
                        <a class="span10" href="<?php echo '/images/press/product/' . $image->getHighResImg() ?>">HD</a>
                        <a class="span10" href="<?php echo '/images/press/product/' . $image->getLowResImg() ?>">LOW</a>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>
<?php include(sfConfig::get('sf_app_template_dir').'/footerSecondary.php') ?>
