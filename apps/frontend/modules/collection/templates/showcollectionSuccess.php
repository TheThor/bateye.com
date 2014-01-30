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
                <img src="/<?php echo $product->getMainImgPath() ?>" alt="<?php echo $product->getMainImgAlt() ?>">
            </a>
            <div class="desc">
                <h6><?php echo $product->getName() ?></h6>
                <h5><?php echo $product->getCategory() ?></h5>
            </div>
        </div>
        <?php endforeach; ?>
        <div class="img">
            <a href="arc.php">
                <img src="/images/portocollection/Arc.png" alt="Arc" />
            </a>
            <!-- <img src="images/porto_co/55.jpg"> -->
            <div class="desc">
                <a href="arc.php"><h6>Arc</h6></a>
                <h5>Sideboard</h5>
            </div>
        </div>
        <div class="img">
            <a href="sensuality.php">
                <img src="/images/portocollection/Sensuality.png">
            </a>
            <div class="desc">
                <h6>Sensuality</h6>
                <h5>ArmChair</h5>
            </div>
        </div>
        <div class="img">
            <a href="movements.php">
                <img src="/images/portocollection/RhytmicMovements.png">
            </a>
            <div class="desc">
                <h6>R. Movements</h6></a>
                <h5>Sideboard</h5>
            </div>
        </div>
        <div class="img">
            <a href="pillar.php">
                <img src="/images/portocollection/Pillar.png">
            </a>
            <div class="desc">
                <h6>Pillar</h6></a>
                <h5>Table&Bench</h5>
            </div>
        </div>
        <div class="img">
            <a href="cask.php">
                <img src="/images/portocollection/Cask.png">
            </a>
            <div class="desc">
                <h6>Cask</h6></a>
                <h5>Mirror</h5>
            </div>
        </div>
        <div class="img">
            <a href="stone.php">
                <img src="/images/portocollection/Stone.png">
            </a>
            <div class="desc">
                <h6>Stone</h6></a>
                <h5>Sideboard</h5>
            </div>
        </div>
        <div class="img">
            <a href="ties.php">
                <img src="/images/portocollection/Ties.png">
            </a>
            <div class="desc">
                    <h6>Ties</h6></a>
                <h5>Bench</h5>
            </div>
        </div>
        <div class="img">
            <a href="reflection.php">
                <img src="/images/portocollection/Reflection.png">
            </a>
            <div class="desc">
                <h6>Reflection</h6></a>
                <h5>Console</h5>
            </div>
        </div>
        <div class="img">
            <a href="elegance.php">
                <img src="/images/portocollection/Elegance.png">
            </a>
            <div class="desc">
                <h6>Elegance</h6></a>
                <h5>Console</h5>
            </div>
        </div>
        <div class="img">
            <a href="silhouette.php">
                <img src="/images/portocollection/Silhouette.png">
            </a>
            <div class="desc">
                <h6>Silhouette</h6></a>
                <h5>Sideboard</h5>
            </div>
        </div>
        <div class="img">
            <a href="fairytale.php">
                <img src="/images/portocollection/Fairytale.png">
            </a>
            <div class="desc">
                <h6>Fairytale</h6></a>
                <h5>Bar</h5>
            </div>
        </div>
        <div class="img">
            <a href="queenly.php">
                <img src="/images/portocollection/Queenly.png">
            </a>
            <div class="desc">
                <h6>Queenly</h6></a>
                <h5>Coffee table</h5>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>
<?php include(sfConfig::get('sf_app_template_dir').'/footerSecondary.php') ?>