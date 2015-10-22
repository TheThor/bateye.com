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
    <div id="menu" style="top:140px; top: 135px">
        <nav>
            <ul>
                <li><a href="<?php echo url_for('homepage') ?>">HOME</a></li>
                <li><a href="<?php echo url_for('thebrand') ?>">THE BRAND</a></li>
                <li>
                    <a href="<?php echo url_for('collection') ?>">COLLECTIONS</a>
                    <?php if (isset($collections)): ?>
                        <ul>
                            <?php /** @var Collection $collection */
                            foreach ($collections as $collection): ?>
                                <?php if ($collection->getId()!=3):?>
                                    <li>
                                        <a href="<?php echo url_for(array(
                                            'module' => 'collection',
                                            'action' => 'showcollection',
                                            'id'    => $collection->getId(),
                                            'name' => $collection->getName()
                                        )) ?>"><?php echo $collection->getName(); ?></a>
                                    </li>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif ?>
                </li>
                <li>
                    <a href="<?php echo url_for('@show_allproducts') ?>">All Products</a>
                </li>
                <!--            <li>-->
                <!--                <a href="--><?php //echo url_for('@show_allproducts') ?><!--">All Products</a>-->
                <!--            </li>-->
                <li>
                    <a href="<?php echo url_for('press') ?>">Press</a>
                </li>
                <li>
                    <a href="<?php echo url_for(array(
                        'module' => 'contacts',
                        'action' => 'index'
                    )) ?>">CONTACTS</a>
                </li>
                <?php if ($sf_user->isAuthenticated()): ?>
                    <li><?php echo link_to('Logout', 'sf_guard_signout') ?></li>
                <?php endif ?>
            </ul>
        </nav>
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
            <?php endforeach; ?>
            <div class="clear"></div>
        </div>
</div>
