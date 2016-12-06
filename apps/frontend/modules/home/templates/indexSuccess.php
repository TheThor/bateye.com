<!--
<!--  Created by PhpStorm.-->
<!--  User: pedro-->
<!--  Date: 1/9/14-->
<!--  Time: 7:52 PM-->
<!-- /-->
<?php include(sfConfig::get('sf_app_template_dir').'/newsletter.php') ?>
<div class="container">
    <div id="myCarousel" class="carousel slide span12">
        <a href="#" id="keep-scroll"></a>
        <ol class="carousel-indicators">
            <?php for($i=0; $i<$sliderCount; $i++): ?>
                <?php if($i==0):?>
                    <li data-target="#myCarousel" data-slide-to="<?php echo $i; ?>" class="active"></li>
                <?php else: ?>
                    <li data-target="#myCarousel" data-slide-to="<?php echo $i; ?>"></li>
                <?php endif; ?>
            <?php endfor; $i = 0;?>
        </ol>
        <!-- Carousel items -->
        <div class="carousel-inner">

            <?php /** @var SliderImage $slider */
            foreach($sliders as $slider): ?>
                <?php if (substr(strrchr($slider->getPath(), "."), 1) == "mp4"): ?>
                    <div align="center item <?php echo $i==0 ? 'active' : ''?>">
                        <video autoplay loop style="width: 100%">
                            <source src="/images/Carousel/<?php echo $slider->getPath();?>" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                <?php else: ?>
                    <div class="<?php echo $i==0 ? 'active' : ''?> item img-carousel">
                        <img src="/images/Carousel/<?php echo $slider->getPath();?>" alt="<?php echo $slider->getAlt()?>" />
                    </div>
                <?php endif; ?>
                <?php $i++;?>
            <?php endforeach; ?>
        </div>
        <!-- Carousel nav -->
        <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
        <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div>

    <div class="span12">
        <div id="menu" class="span12 transp-white">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-th-list">
            </span>
            </a>
            <div class="nav-collapse">
                <ul class="nav nav-pills navigation latoregular">
                    <li>
                        <a href="<?php echo url_for('thebrand') ?>">The Brand</a>
                    </li>

                    <li>
                        <a href="<?php echo url_for('collection') ?>">Collections</a>
                    </li>
                    <li>
                        <a href="<?php echo url_for('@show_allproducts') ?>">All Products</a>
                    </li>
                    <li>
                        <a href="<?php echo url_for('press') ?>">Press</a>
                    </li>
                    <li>
                        <a href="<?php echo url_for(array(
                            'module' => 'contacts',
                            'action' => 'index'
                        )) ?>">Contacts</a>
                    </li>
                    <?php if ($sf_user->isAuthenticated()): ?>
                        <li><?php echo link_to('Logout', 'sf_guard_signout') ?></li>
                    <?php endif ?>
                </ul>
            </div>
        </div>
        <div class="clear"></div>
    </div>
    <?php
    //$productArray = $featuredProducts->getRawValue()->getData();
    /** @var ProductTable $featuredProducts */
    if (isset($featuredProducts) && $featuredProducts->count()):
        ?>
        <!-- Slider main container -->
        <div class="swiper-container">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <?php
                /** @var Product $product */
                foreach ($featuredProducts as $product): ?>
                    <div class="swiper-slide">
                            <a href="<?php echo url_for(array(
                                'module' => 'collection',
                                'action' => 'showproduct',
                                'id' => $product->getId(),
                                'name' => $product->getName()
                            )) ?>">
                                <?php echo image_tag('/images/products/' . $product->getMainImgPath(), array('class' => 'swiper-image')) ?>
                                <div>
                                    <h6 class="latobold"><?php echo strtoupper($product->getName()) ?></h6>
                                    <h5 class="latolight"><?php echo strtolower($product->getCategory()) ?></h5>
                                </div>
                            </a>
                    </div>
                <?php endforeach; ?>
            </div>
            <!-- If we need pagination -->
            <!--            <div class="swiper-pagination"></div>-->

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

        </div>
    <?php endif; ?>
    <div class="span12 background-art">
        <div id="artparallax" class="span12 center-text art-typo abrilfat nodisplay">art<span class="symbolred">&</span>design</div>
    </div>
    <div class="span12 collections-img nodisplay">
        <?php /** @var Collection $collection */
        $i = 2;
        /** @var Doctrine_Collection $collections */
        foreach ($collections as $collection):
            $collectionName = $collection->getName();
            $collectionName = str_replace(" ", "-", $collectionName);
            $collectionName = strtolower($collectionName);
            $collectionId = substr($collectionName, 0,-3);
            $collectionName = str_replace("-", "", $collectionName); ?>
            <div class="span12">
            <?php if ($i%2==0): ?>
            <div id="collection-text-centered" class="span7">
                <?php echo $collection->getRawValue()->getDescription() ?>
            </div>
            <div class="span7">
                <?php echo image_tag('/images/collection/' . $collection->getBackgroudImage()) ?>
                <div class="span3">
                    <?php echo link_to(image_tag('/images/collection/' . $collection->getNameImage()), 'collection/showcollection?id=' . $collection->getId() . "&name=" . $collection->getName()) ?>
                </div>
            </div>
            <?php else: ?>
            <div class="span7">
                <?php echo image_tag('/images/collection/' . $collection->getBackgroudImage()) ?>
                <div class="span3">
                    <?php echo link_to(image_tag('/images/collection/' . $collection->getNameImage()), 'collection/showcollection?id=' . $collection->getId() . "&name=" . $collection->getName()) ?>
                </div>
            </div>
            <div id="collection-text-centered" class="span7">
                <p class="latobold">
                    <?php echo $collection->getRawValue()->getDescription() ?>
                </p>
            </div>
            <?php endif; ?>
            </div>
        <?php $i++; endforeach; ?>
    </div>
    <div class="span12 moreinfo nodisplay">
        <div class="span7 center-text border-r marginized abrilfat" style="float: left">
            <div class="justified">
                <h1 class="abrilfat">the brand</h1>
                <br />
                <h4 class="latobolditalic">‘We personify the furniture collective memories of the cities.’</h4>
                <br />
                <p class="latolight">We personify in the furniture the collective memory
                    of places, through moments, expressions, textures
                    and chromatic seized in the cities. We want to create
                    pieces from the whole world, for the whole world.</p>
                <br />
                <a href="<?php echo url_for('thebrand') ?>" class="red-cross">+</a>
            </div>
        </div>
        <div class="span7 center-text marginized" style="float: right">
            <div class="justified abrilfat">
                <h1 class="abrilfat">the designer</h1>
                <br />
                <h4 class="latobolditalic">‘I want to create pieces of the world, for the entire world.’</h4>
                <br />
                <p class="latolight">As an architect I felt the need to create furniture that caught in the elementrs of convergence beween art and the city. The shapes, movements, gestures and chromatics that my look keeps mtranscribed into furniture as a tribute to the places. Nobady chooses the city where born.
                    <span class="latoitalic">Bat eye, Ltd.</span></p>
                <a href="<?php echo url_for('thebrand/showauthor') ?>" class="red-cross">+</a>
            </div>
        </div>
    </div>
    <div class="span12 whatsnew nodisplay">
        <h2 class="abrilfat">what's new?</h2>
    </div>
    <div id="mainwrapper" class="span12 nodisplay">
        <?php /** @var News $news */
        foreach($news as $new): ?>
            <?php $i=1; ?>
            <div id="box-<?php echo $i;?>" class="box">
                <a href="<?php echo $new->getLink() ?>">
                    <img id="image-<?php echo $i;?>" src="/images/whatsnew/<?php echo $new->getNewsImage() ?>" alt="<?php echo htmlspecialchars_decode($new->getNewsTitle()) ?>"/>
              <span class="caption fade-caption">
              <?php echo htmlspecialchars_decode($new->getNewsTitle()) ?>
                  <?php echo htmlspecialchars_decode($new->getNewsContent()) ?></p>
              </span>
                </a>
            </div>
            <?php $i++;?>
        <?php endforeach ?>
    </div> <!-- end of #mainwrapper-->
    <div class="clear"></div>
    <?php $uri_url=$_SERVER['REQUEST_URI'];?>

    <div class="span12" id="footer" style="<?php if ($uri_url=="" || $uri_url=="index.php") echo 'display: none';?>">
        <div id="bar">
            <div id="logos">
                <a href="https://twitter.com/bat_eye"><img src="/images/icons/bateye_twitter.png" alt="Twitter Logo"></a>
                <a href="http://www.facebook.com/BatEye.com.pt"><img src="/images/icons/bateye_facebook.png" alt="Facebook Logo"></a>
                <a href="http://www.youtube.com/user/bateyevideos"><img src="/images/icons/bateye_youtube.png" alt="Youtube logo"></a>
                <a href="http://www.behance.net/Bateye"><img src="/images/icons/bateye_behance.png" alt="Behance Logo"></a>
                <a href="http://instagram.com/bateye"><img src="/images/icons/bateye_instagram.png" alt="Instagram Logo"></a>
                <a href="http://www.linkedin.com/company/bat-eye"><img src="/images/icons/bateye_linkedin.png" alt="Linkdin logo"></a>
                <a href="http://www.houzz.com/pro/bateye/bateye"><img src="/images/icons/houzz.png" alt="houzz logo"></a>
                <a href="http://pt.pinterest.com/bat_eye/"><img src="/images/icons/pinterest.png" alt="Pinterest logo"></a>
            </div>
        </div>
        <div class="span12 center-text latobold">
            <p class="red" style="font-size:15px;">+<a href="<?php echo url_for(array(
                    'module' => 'contacts',
                    'action' => 'index'
                )) ?>" style="font-size:14px;">INFO</a></p>
          <span class="latolight">info@bateye.com<br />
          +351 227312657</span>
        </div>
        <div id="rights" class="latolight">
            © 2013 <span class="latoitalic">bat eye, Ltd.</span><br />
            All rights reserved.
        </div>
    </div>
</div>

<!-- END   -->

</div>
<?php /** @var Product $latestProduct */
if($latestProduct->count() > 0): ?>
    <?php /** @var IndexNewProduct $product */
    foreach($latestProduct as $product): ?>
    <div id="produ" style="position:fixed; z-index: 5; bottom: 0; right: 0;">
        <img id="closeit" src="/images/close.png" alt="close button image">
        <a href="<?php echo url_for(array(
            'module' => 'contacts',
            'action' => 'index'
        )) ?>">
            <img src="/images/homepage/<?php echo $product->getImage() ?>" alt="Our new piece!"/>
        </a>
     </div>
    <?php endforeach; ?>
<?php endif; ?>