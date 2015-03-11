<?php include(sfConfig::get('sf_app_template_dir').'/newsletter.php') ?>
<?php include(sfConfig::get('sf_app_template_dir').'/menuSecondary.php') ?>
<?php slot(
    'title',
    sprintf('%s - A Bat Eye collection', $collections->getName()))
?>
<div id="container">
    <div style="margin: 0 auto; width: 1016px">
        <?php foreach ($products as $product): ?>
        <div class="img">
            <a href="<?php echo url_for(array(
                'module' => 'collection',
                'action' => 'showproduct',
                'id' => $product->getId(),
                'name' => $product->getName()
            ))?>">
                <img src="/images/mosaics/<?php echo $product->getCollection() . "/" .  $product->getMainImgPath() ?>" alt="<?php echo $product->getMainImgAlt() ?>">
            </a>
            <div class="desc">
                <h6><?php echo $product->getName() ?></h6>
                <h5><?php echo $product->getCategory() ?></h5>
            </div>
        </div>
        <?php endforeach; ?>
        <div class="clear"></div>
    </div>
</div>
<?php include(sfConfig::get('sf_app_template_dir').'/footerSecondary.php') ?>