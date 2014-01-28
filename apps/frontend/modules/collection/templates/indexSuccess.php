<?php include(sfConfig::get('sf_app_template_dir').'/newsletter.php') ?>
<?php include(sfConfig::get('sf_app_template_dir').'/menuSecondary.php') ?>
<div id="collect_container">
    <div class="span11 collections-imag">
        <?php foreach ($collections as $collection): ?>
        <?php
            $collectionName = $collection->getName();
            $collectionName = str_replace(" ", "-", $collectionName);
            $collectionName = strtolower($collectionName);
            $collectionId = substr($collectionName, 0,-3);
        ?>
        <div id="<?php echo $collectionId ?>">
            <?php $collectionName = str_replace("-", "", $collectionName); ?>
            <!--      LINK TO EXAMPLE      -->
            <?php echo link_to(image_tag('/images/' . $collectionName . '_branco.png'), 'collection/showcollection?id=' . $collection->getId()) ?>
<!--            <a href="--><?php //echo url_for(array(
//                'module' => 'collection',
//                'action' => 'showcollection',
//                'collection'   => $collection->getName()
//            )) ?><!--">-->
<!--                <img class="/responsive-img" src="/images/--><?php //echo $collectionName ?><!--_branco.png" />-->
<!--            </a>-->
        </div>
        <?php endforeach; ?>
<!--        <div id="london-collect">-->
<!--            <a href="--><?php //echo url_for(array(
//                'module' => 'collection',
//                'action' => 'show',
//                'name'   => $collection->getName()
//            )) ?><!--"><img class="responsive-img" src="/images/londoncollection_branco.png" /></a>-->
<!--        </div>-->
    </div>
    <div class="clear"></div>
</div>
<?php include(sfConfig::get('sf_app_template_dir').'/footerSecondary.php') ?>