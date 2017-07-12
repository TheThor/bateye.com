<?php
/**
 * Created by PhpStorm.
 * User: pedrotentugal
 * Date: 09/02/17
 * Time: 13:39
 */
include(sfConfig::get('sf_app_template_dir').'/newsletter.php');
include(sfConfig::get('sf_app_template_dir').'/menuSecondary.php');
slot(
    'title',
    sprintf('Bat Eye Lover Atelier Products')
);
?>
    <div id="container">
        <div id="all-products-filters">
            <!--        <p class="filter">Filters</p>-->
            <div id="products-search-bar">
                <input type="text" id="search-products" placeholder="Search for products, categories,..." data-type="search">
            </div>
            <div id="categories-list">
                <label for="categories-selector" class="special-label">
                    <select name="categories-selector" id="categories-selector">
                        <option value="">Category</option>
                        <?php /** @var Category $category */
                        foreach ($categories as $category): ?>
                            <option value="<?php echo $category->getName() ?>">
                                <?php echo $category->getName() ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </label>
            </div>
            <div id="collections-list">
                <label for="collections-selector" class="special-label">
                    <select name="collections-selector" id="collections-selector">
                        <option value="">Collection</option>
                        <?php /** @var Collection $colletions */
                        foreach ($collections as $collection): ?>
                            <option value="<?php echo $collection->getName() ?>">
                                <?php echo $collection->getName() ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </label>
            </div>
        </div>
        <div class="clear"></div>
        <?php /** @var Category $category */
        foreach ($categories as $category):
            ?>
            <div class="line-text-center" id="<?php $category->getName() ?>">
                <span class="filter"><strong><?php echo $category->getName() ?></strong></span>
                <div class="clear"></div>
            </div>
            <div style="margin: 0 auto; width: 1016px;">
                <?php /** @var Product $product */
                foreach ($products as $product):
                    if ($product->getCategoryId() == $category->getId()):
                        ?>
                        <div class="img" data-name="<?php echo $product->getName() ?>" data-category="<?php echo $product->getCategory()->getName() ?>" data-collection="Lovers Atelier">
                            <a href="
                            <?php
                            echo url_for(
                                array(
                                    'module' => 'collection',
                                    'action' => 'showloversatelierproduct',
                                    'id' => $product->getId(),
                                    'name' => $product->getName()
                                )
                            )
                            ?>
                        ">
                                <img src="/images/products/<?php echo $product->getMainImgPath() ?>" alt="<?php echo $product->getMainImgAlt() ?>">
                            </a>
                            <div class="desc">
                                <h6><?php echo $product->getName() ?></h6>
                                <h5><?php echo $product->getCategory() ?></h5>
                            </div>
                        </div>
                        <?php
                    endif;
                endforeach; ?>
                <div class="clear"></div>
            </div>
        <?php endforeach; ?>
    </div>
<?php include(sfConfig::get('sf_app_template_dir').'/footerSecondary.php') ?>