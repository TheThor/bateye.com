<?php include(sfConfig::get('sf_app_template_dir').'/newsletter.php') ?>
<?php
    $display = true;
?>
<div class="container">
    <div style="position: absolute; z-index: 5; left: 50%">
        <div class="pagination-centered" style="position: relative; left:-50%">
            <img class="logo" src="/images/logo_principal_cores.png" alt="Logo Bateye" width="200px" />
        </div>
    </div>
    <div class="collection-images span11">
        <?php /** @var Collection $collection */
    foreach ($collections as $collection): ?>
        <img id="<?php echo 'collection-image-' . $collection->getId()  ?>" class="collection-image" src="<?php echo '/images/collection/' . $collection->getBackgroudImage() ?>" style="<?php echo !$display ? 'display:none':'display:block' ?>;">
    <?php $display = false ?>
    <?php endforeach; ?>
    </div>
        <div id="link-container" style="width: 100%;">
            <?php
            foreach ($collections as $collection):
                /* @var $collection Collection */
                $collectionName = strtolower(str_replace(" ", "", $collection->getName()));
                $collectionId = substr($collectionName, 0,-3);
                $collectionName = str_replace("-", "", $collectionName);
                ?>
                <div class="collection-link">
                    <?php
                    echo link_to(
                        image_tag(
                            '/images/collection/' . $collection->getNameImage(),
                            'collection_id=' . $collection->getId() . ' class=collection-link-image'
                        ),
                        'collection/showcollection?id=' . $collection->getId() . "&name=" . $collection->getName()
                    );
                    ?>
                </div>
                <br/>
            <?php endforeach; ?>
            <div class="clear"></div>
        </div>
</div>
