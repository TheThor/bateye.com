<?php include(sfConfig::get('sf_app_template_dir').'/newsletter.php') ?>
<?php include(sfConfig::get('sf_app_template_dir').'/menuSecondary.php') ?>
<?php slot(
    'title',
    sprintf('%s - Inspired by Porto', $product->getName()))
?>
<div id="seta-prod">
    <a href="porto_collection.php"><img src="/images/setas.png"></a>
</div>
    <div id="title">
        <h6><?php echo $product->getName() ?></h6>
        <h5><?php echo $product->getCategory() ?></h5>
    </div>
    <div class="fluid_container">
        <div class="camera_wrap camera_azure_skin" id="camera_wrap_1">
            <?php foreach($images as $image): ?>
            <div data-src="/<?php echo $image->getLocation() ?>">
            </div>
            <?php endforeach; ?>
            </div>
        </div>
        <!-- #camera_wrap_1 -->
    </div>
    <div id="nada"></div>
    <div id="text">
        <br><br>

        <p><?php echo $product->getCitation() ?></p><br><br>

        <hr>
    </div>
    <div id="desc">
        <?php echo $product->getDescription() ?>
    </div>
    <div id="info_peca">
        <div style="float: left; width: 135px">
            <b>name</b><br>
            Arc<br><br>
            <b>type</b><br>
            Sideboard<br><br>
            <b>designer</b><br>
            Marco Sousa<br><br>
        </div>
        <div style="float: left; width: 135px">
            <b>dimensions</b><br>
            h 103 cm | 40,6”<br>
            w 227 cm | 89,4”<br>
            d 80 cm | 31,5”<br><br>
            <b>materials</b><br>
            satin wood <br>
            hand painted portuguese tiles
        </div>
        <div style="float: left; width: 540px; height: 128px;">
            <span style="position:absolute; margin-left: 85px; font-weight: bold">You might like....</span>
				<span style="width: 180px; margin-left: 65px">
					<a href="silhouette.php">
                        <img style="width: 140px; " src="images/portocollection/Silhouette.png" alt="">
                    </a>
				</span>
				<span style="width: 180px; margin-left: 20px">
					<a href="sensuality.php">
                        <img style="width: 140px;" src="images/portocollection/Sensuality.png" alt="">
                    </a>
				</span>
				<span style="width: 180px; margin-left: 20px">
					<a href="movements.php">
                        <img style="width: 140px;" src="images/portocollection/RhytmicMovements.png" alt="">
                    </a>
				</span>
        </div>
    </div>

<?php include(sfConfig::get('sf_app_template_dir').'/exploreMore.php') ?>
<?php include(sfConfig::get('sf_app_template_dir').'/footerSecondary.php') ?>