<div id="catalogue" style="position:fixed; z-index: 5; left: -6px; top:245px;">
    <a href="<?php echo url_for('media/catalogue.pdf')?>"><img src="/images/CATALOGUE.png"></a>
</div>

<div id="fundo">
    <div id="back">
        <div id="logo">
            <img src="/images/logo.png">
        </div>
    </div>
</div>
<div id="menu">
    <nav>
        <ul>
            <li><a href="<?php echo url_for('homepage') ?>">HOME</a></li>
            <li><a href="brand.php">THE BRAND</a></li>
            <li>
                <a href="<?php echo url_for('collection') ?>">COLLECTIONS</a>
                <ul>
                    <?php foreach ($collections as $collection): ?>
                    <li>
                        <a href="<?php echo url_for(array(
                            'module' => 'collection',
                            'action' => 'show',
                            'name'   => $collection->getName()
                        )) ?>"><?php echo $collection->getName(); ?></a>
                    </li>
                    <?php endforeach;?>
                </ul>
            </li>
            <li><a href="not_available.php">PRESS & NEWS</a></li>
            <li><a href="contact.php">CONTACTS</a></li>
            <li><a href="not_available.php">LOVERS</a></li>
        </ul>
    </nav>
</div>
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
            <a href="<?php echo url_for(array(
                'module' => 'collection',
                'action' => 'show',
                'collection'   => $collection->getName()
            )) ?>">
                <?php $collectionName = str_replace("-", "", $collectionName); ?>
                <img class="/responsive-img" src="/images/<?php echo $collectionName ?>_branco.png" /></a>
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

</div>