<!--
<!--  Created by PhpStorm.-->
<!--  User: pedro-->
<!--  Date: 1/9/14-->
<!--  Time: 7:52 PM-->
<!-- /-->
<?php include(sfConfig::get('sf_app_template_dir').'/newsletter.php') ?>
<div class="container">
    <div>
        <div class="span11 pagination-centered" style="position: relative">
            <img class="logo" src="/images/logo_principal_cores.png" alt="Logo Bateye"/>
<!--            <div id="lang-choice">-->
<!--                <a href="">EN </a>|<a href="index.php"> PT</a>-->
<!--            </div>-->
        </div>

    </div>
    <div id="myCarousel" class="carousel slide span11">
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

            <?php foreach($sliders as $slider): ?>
                <?php if ($i==0): ?>
                    <div class="active item img-carousel abrilfat"><img src="/images/Carousel/<?php echo $slider->getPath();?>" alt="<?php $slider->getAlt()?>" /></div>
                    <?php $i++;?>
                <?php else: ?>
                    <div class="item img-carousel"><img class="img-crousel" src="/images/Carousel/<?php echo $slider->getPath();?>" alt="<?php $slider->getAlt() ?>" /></div>
                <?php endif;?>
            <?php endforeach; ?>
        </div>
        <!-- Carousel nav -->
        <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
        <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div>

    <div class="span11 no-space">
        <div id="menu" class="span10 transp-white">
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
                </ul>
            </div>
        </div>
    </div>
    <div class="span11 background-art">
        <div id="artparallax" class="span11 center-text art-typo abrilfat nodisplay">art<span class="symbolred">&</span>design</div>
    </div>
    <div class="span11 collections-img nodisplay">
        <?php /** @var Collection $collection */
        $i = 0;
        foreach ($collections as $collection): ?>
            <?php
            if ($i == 2){
                break;
            }
            $i++;
            $collectionName = $collection->getName();
            $collectionName = str_replace(" ", "-", $collectionName);
            $collectionName = strtolower($collectionName);
            $collectionId = substr($collectionName, 0,-3);
            ?>
            <div id="<?php echo $collectionId ?>">
                <?php $collectionName = str_replace("-", "", $collectionName); ?><!--      LINK TO EXAMPLE      -->
                <?php echo link_to(image_tag('/images/collection/' . $collection->getNameImage()), 'collection/showcollection?id=' . $collection->getId()."&name=" . $collection->getName()) ?>
                <!--            <a href="--><?php //echo url_for(array(
//                'module' => 'collection',
//                'action' => 'showcollection',
//                'collection'   => $collection->getName()
//            )) ?><!--">-->
                <!--                <img class="/responsive-img" src="/images/--><?php //echo $collectionName ?><!--_branco.png" />-->
                <!--            </a>-->
            </div>
        <?php endforeach; ?>
    </div>
    <div class="span11 moreinfo nodisplay">
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
    <div id="fadeitnow" class="span11 nodisplay">
        <div id="numbers">
            <table id="table-numbers">
                <tr class="pompadour">
                    <td width="10%">
                        1
                    </td>
                    <td width="10%">
                        2
                    </td>
                    <td width="10%">
                        3
                    </td>
                    <td width="10%">
                        4
                    </td>
                </tr>
                <tr class="latolight" style="font-size:0.3em;">
                    <td width="10%">Ability to create.<br />
                        To rip.<br /> To risk.</td>
                    <td width="10%">Link between
                        technology
                        and tradition.</td>
                    <td width="10%">Quality of
                        manufacture.
                        Noble materials.</td>
                    <td width="10%">Attention
                        to the detail and
                        the singularity of
                        each piece.</td>
                </tr>
            </table>
        </div>
    </div>
    <div class="span11 whatsnew nodisplay">
        <h2 class="abrilfat">what's new?</h2>
    </div>
    <div id="mainwrapper" class="span11 nodisplay">
        <?php foreach($news as $new): ?>
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

    <div class="span11" id="footer" style="<?php if ($uri_url=="" || $uri_url=="index.php") echo 'display: none';?>">
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
        <div class="span11 center-text white-text latobold">
            <p style="font-size:15px;">+<a href="<?php echo url_for(array(
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
<div id="produ" style="position:fixed; z-index: 5; bottom: 0; right: 0;">
    <img id="closeit" src="/images/close.png" alt="close button image">
    <a href="<?php echo url_for(array(
	    'module' => 'contacts',
	    'action' => 'index'
    )) ?>"> <img src="/images/newprod/Queenly_Bat-eye-1.png" alt="Queenly peça nova!"/></a>
</div>