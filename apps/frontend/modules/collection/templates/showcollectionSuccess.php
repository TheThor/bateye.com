<?php include(sfConfig::get('sf_app_template_dir').'/newsletter.php') ?>
<?php include(sfConfig::get('sf_app_template_dir').'/menuSecondary.php') ?>
<?php slot(
    'title',
    sprintf('%s - A Bat Eye collection', $collection->getName()))
?>
<div id="container">
    <div style="margin: 0 auto; width: 1016px">
        <?php /** @var Product $product */
        foreach ($products as $product): ?>
        <div class="img">
            <a href="<?php echo url_for(array(
                'module' => 'collection',
                'action' => 'showproduct',
                'id' => $product->getId(),
                'name' => $product->getName()
            ))?>">
                <img src="/images/products/<?php echo $product->getMainImgPath() ?>" alt="<?php echo $product->getMainImgAlt() ?>">
            </a>
            <div class="desc">
                <h6 class="latobold"><?php echo strtoupper($product->getName()) ?></h6>
                <h5 class="latolight"><?php echo strtolower($product->getCategory()) ?></h5>
            </div>
        </div>
        <?php endforeach; ?>
        <div class="clear"></div>
    </div>
</div>
<?php include(sfConfig::get('sf_app_template_dir').'/footerSecondary.php') ?>