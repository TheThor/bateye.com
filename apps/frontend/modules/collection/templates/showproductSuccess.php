<?php include(sfConfig::get('sf_app_template_dir').'/newsletter.php') ?>
<?php include(sfConfig::get('sf_app_template_dir').'/menuSecondary.php') ?>
<?php slot(
    'title',
    sprintf('%s - Bat Eye', $product->getName()))
?>
<div id="seta-prod">
    <a href="<?php /** @var Product $product */
    echo url_for(array(
        'module' => 'collection',
        'action' => 'showcollection',
        'id'    => $product->getCollectionId(),
        'name' => $product->getCollection()
    ))?>"><img src="/images/setas.png"></a>
</div>
    <div id="title">
        <h6><?php echo $product->getName() ?></h6>
        <h5><?php echo $product->getCategory() ?></h5>
    </div>
    <div class="fluid_container">
        <div class="camera_wrap camera_azure_skin" id="camera_wrap_1">
            <?php foreach($images as $image): ?>
            <div data-src="/images/slides/<?php echo $image->getLocation() ?>">
            </div>
            <?php endforeach; ?>
            </div>
        </div>
        <!-- #camera_wrap_1 -->
    </div>
    <div id="text">
        <br><br>

        <?php echo $product->getCitation() ?><br><br>

        <hr>
    </div>
    <div id="desc">
        <?php echo $product->getDescription() ?>
    </div>
    <div id="info_peca">
        <div style="float: left; width: 235px">
            <b>name</b><br>
            <?php echo $product->getName() ?><br><br>
            <b>type</b><br>
            <?php echo $product->getCategory() ?><br><br>
            <b>designer</b><br>
            <?php echo $product->getDesigner() ?><br><br>
            <b>dimensions</b><br>
            <?php if($product->getDimensions()!='null') echo html_entity_decode($product->getDimensions()); ?><br><br>
            <b>materials</b><br>
            <?php echo $product->getMaterials(); ?><br><br>
        </div>
        <div style="float: right; width: 500px;">
            <img src="http://dummyimage.com/500x300/000/fff" alt=""/>
        </div>
        <div class="clear"></div>
    </div>
    <div id="might_like">
        <div style="margin-bottom: 15px; font-weight: bold; position:relative; width: 100%">You might like....</div>
        <hr>
        <?php foreach($products as $single): ?>
            <span style="width: 180px; margin-left: 35px">
					<a href="<?php echo url_for(array(
                        'module' => 'collection',
                        'action' => 'showproduct',
                        'id' => $single->getId(),
                        'name' => $single->getName()
                    )) ?>">
                        <img style="width: 140px; " src="/images/mosaics/<?php echo $single->getCollection() . '/' . $single->getMainImgPath() ?>" alt="<?php echo $single->getMainImgAlt() ?>">
                    </a>
				</span>
        <?php endforeach ?>
        <div class="clear"></div>
    </div>
<?php include(sfConfig::get('sf_app_template_dir').'/exploreMore.php') ?>
<?php include(sfConfig::get('sf_app_template_dir').'/footerSecondary.php') ?>