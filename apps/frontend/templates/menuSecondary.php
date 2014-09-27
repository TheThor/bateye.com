<div id="fundo">
    <div id="back">
        <div id="logo">
            <img src="/images/logo.png">
        </div>
    </div>
</div>
<div id="menu" <?php  if ($sf_user->isAuthenticated()) echo 'style="width: 590px"'; ?>>
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
            <li><a href="not_available.php">PRESS & NEWS</a></li>
            <li><a href="<?php echo url_for(array(
                    'module' => 'contacts',
                    'action' => 'index'
                )) ?>">CONTACTS</a></li>
            <li>
	            <a href="<?php echo url_for('lovers') ?>">LOVERS</a>
            </li>
	        <?php if ($sf_user->isAuthenticated()): ?>
		        <li><?php echo link_to('Logout', 'sf_guard_signout') ?></li>
	        <?php endif ?>
        </ul>
    </nav>
</div>