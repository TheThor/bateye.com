<div id="fundo">
    <div id="back">
        <div id="logo">
            <img src="/images/logo.png">
        </div>
    </div>
</div>
<div id="menu" <?php  //if ($sf_user->isAuthenticated()) echo 'style="width: 520px"'; ?>>
    <nav>
        <ul>
            <li><a href="<?php echo url_for('homepage') ?>">HOME</a></li>
            <li><a href="<?php echo url_for('thebrand') ?>">THE BRAND</a></li>
            <li>
                <a href="<?php echo url_for('collection') ?>">COLLECTIONS</a>
	            <?php if (isset($collections)): ?>
                <ul>
                    <?php foreach ($collections as $collection): ?>
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
            <li>
                <a href="<?php echo url_for('press') ?>">Press</a>
            </li>
            <li><a href="<?php echo url_for(array(
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