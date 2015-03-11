<?php
/**
 * Created by PhpStorm.
 * User: pedro
 * Date: 11-03-2015
 * Time: 22:48
 */
include(sfConfig::get('sf_app_template_dir').'/newsletter.php');
include(sfConfig::get('sf_app_template_dir').'/menuSecondary.php');
slot(
    'title',
    sprintf('%s - A Bat Eye collection', $collections->getName())
);
?>
<div id="container">
    <div style="margin: 0 auto; width: 1016px">
        <div id="category_selector">
            <div id="categories_list">
                <ul>
                <?php /** @var Category $category */
                foreach ($categories as $category): ?>
                    <li>
                        <?php $category->getName()  ?>
                    </li>
                <?php endforeach; ?>
                </ul>
            </div>
            <div id="category_images">
            <?php /** @var Category $category */
            foreach ($categories as $category): ?>

            <?php endforeach; ?>
            </div>
        </div>
        <?php /** @var Product $product */
        foreach ($products as $product): ?>
            <div class="img">
                <a href="<?php echo url_for(array(
                    'module' => 'collection',
                    'action' => 'showproduct',
                    'id' => $product->getId(),
                    'name' => $product->getName()
                ))?>">
                    <img src="/images/mosaics/<?php echo $product->getCollection() . "/" .  $product->getMainImgPath() ?>" alt="<?php echo $product->getMainImgAlt() ?>">
                </a>
                <div class="desc">
                    <h6><?php echo $product->getName() ?></h6>
                    <h5><?php echo $product->getCategory() ?></h5>
                </div>
            </div>
        <?php endforeach; ?>
        <div class="clear"></div>
    </div>
</div>
<?php include(sfConfig::get('sf_app_template_dir').'/footerSecondary.php') ?>