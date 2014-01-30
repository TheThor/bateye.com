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
                                'action' => 'showcollection',
                                'id'    => $collection->getId(),
                                'name' => $collection->getName()
                            )) ?>"><?php echo $collection->getName(); ?></a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </li>
            <li><a href="not_available.php">PRESS & NEWS</a></li>
            <li><a href="<?php echo url_for(array(
                    'module' => 'contacts',
                    'action' => 'index'
                )) ?>">CONTACTS</a></li>
            <li><a href="not_available.php">LOVERS</a></li>
        </ul>
    </nav>
</div>