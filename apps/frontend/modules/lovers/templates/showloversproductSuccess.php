<?php include(sfConfig::get('sf_app_template_dir').'/newsletter.php') ?>
<?php include(sfConfig::get('sf_app_template_dir').'/menuSecondary.php') ?>
<?php slot(
    'title',
    sprintf('%s - Bat Eye', $product->getName()))
?>
<div id="seta-prod">
    <a href="<?php echo url_for(array(
        'module' => 'lovers',
        'action' => 'index'
    ))?>"><img src="/images/setas.png"></a>
</div>
    <div id="title">
        <h6><?php echo $product->getName() ?></h6>
        <h5><?php echo $product->getCategory() ?></h5>
    </div>
    <div class="fluid_container">
        <div class="camera_wrap camera_azure_skin" id="camera_wrap_1">
            <?php foreach($images as $image): ?>
            <div data-src="/images/slides/<?php echo $product->getName() . '/' .  $image->getLocation() ?>">
            </div>
            <?php endforeach; ?>
            </div>
        </div>
        <!-- #camera_wrap_1 -->
    </div>
    <div id="nada"></div>
    <div id="text">
        <br><br>

        <?php echo $product->getCitation() ?><br><br>

        <hr>
    </div>
    <div id="desc">
        <?php echo $product->getDescription() ?>
    </div>
    <div id="info_peca">
        <div style="float: left; width: 135px">
            <b>name</b><br>
            <?php echo $product->getName() ?><br><br>
            <b>type</b><br>
            <?php echo $product->getCategory() ?><br><br>
            <b>designer</b><br>
            <?php echo $product->getDesigner() ?><br><br>
        </div>
        <div style="float: left; width: 135px">
            <b>dimensions</b><br>
            <?php if($product->getWidth()!='null') echo $product->getWidth() . "<br>"; ?>
            <?php if($product->getHeight()!='null') echo $product->getHeight() . "<br>"; ?>
            <?php if($product->getDiameter()!='null') echo $product->getDiameter() . "<br>"; ?>
            <?php if($product->getDepth()!='null') echo $product->getDepth() . "<br>";?>
            <?php if($product->getOther()!='null') echo $product->getOther() . "<br>";?>

            <b>materials</b><br>
            <?php echo $product->getMaterials(); ?>
        </div>
        <div style="float: left; width: 540px; height: 128px;">
            <span style="position:absolute; margin-left: 85px; font-weight: bold">You might like....</span>
            <?php foreach($products as $single): ?>
				<span style="width: 180px; margin-left: 65px">
					<a href="<?php echo url_for(array(
                        'module' => 'collection',
                        'action' => 'showproduct',
                        'id' => $single->getId(),
                        'name' => $single->getName()
                    )) ?>">
                        <img style="width: 140px; " src="/images/mosaics/<?php echo $single->getCollections() . '/' . $single->getMainImgPath() ?>" alt="<?php echo $single->getMainImgAlt() ?>">
                    </a>
				</span>
            <?php endforeach ?>
        </div>
    </div>
<?php include(sfConfig::get('sf_app_template_dir').'/exploreMore.php') ?>
<?php include(sfConfig::get('sf_app_template_dir').'/footerSecondary.php') ?>