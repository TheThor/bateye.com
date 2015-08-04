<div class="span11" id="press-area-menu">
    <div>
        <div class="span3">
            <h1 class="abrilfat">PRESS</h1>
        </div>
        <div class="span3">
            <ul class="latoregular">
                <li><a href="<?php echo url_for('@press_thebrand') ?>">the brand</a></li>
                <li>contacts</li>
            </ul>
        </div>
        <div class="span3">
            <ul class="latoregular">
                <?php /** @var Collection $collection */
                foreach ($collections as $collection): ?>
                    <li>
                        <a href="<?php echo url_for(array(
                            'module' => 'press',
                            'action' => 'showcollection',
                            'id'    => $collection->getId(),
                            'name' => $collection->getName()
                        )) ?>"><?php echo $collection->getName(); ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
            <div class="clear"></div>
        </div>
        <div class="span3 latoregular">
            <ul>
                <li><a href="<?php echo url_for('@press_catalogue_success') ?>">Catalogues</a></li>
                <li><a href="<?php echo url_for('@press_press_releases_success') ?>">Press releases</a></li>
                <li><a href="<?php echo url_for('@press_cover_images_success') ?>">Covers images</a></li>
                <li><a href="<?php echo url_for('@press_cover_videos_success') ?>">Videos</a></li>
            </ul>
        </div>
    </div>
</div>