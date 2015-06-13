<?php include(sfConfig::get('sf_app_template_dir').'/newsletter.php') ?>
<div class="span11 pagination-centered" style="position: relative">
    <img class="logo" src="/images/logo_principal_cores.png" alt="Logo Bateye"/>
    <div id="lang-choice">
        <a href="">EN </a>|<a href="index.php"> PT</a>
    </div>
</div>
<div class="container">
    <div class="span11" id="press-area-menu">
        <div>
            <div class="span3">
                <h1 class="abrilfat">PRESS</h1>
            </div>
            <div class="span3">
                <ul class="latoregular">
                    <li>the brand</li>
                    <li>contacts</li>
                </ul>
            </div>
            <div class="span3">
                <ul class="latoregular">
                    <?php /** @var Collection $collection */
                    foreach ($collections as $collection): ?>
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
                <div class="clear"></div>
            </div>
            <div class="span3 latoregular">
                <ul>
                    <li>Catalogues</li>
                    <li>Press releases</li>
                    <li>Covers images</li>
                    <li>Videos</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="span11" id="press-main-area">
        <div>
            <div class="span5 offset2-5">
                <p>
                    Bat eye ® provides you private contents:
                    Click over the pictures or buttons to download packages and pdf.s with
                    all information about our brand and products, pictures and documents
                    in high and low resolution and additional contents made just to make
                    your work easy. Any other content needed please contact.
                    Videos
                </p>
                <b>RAQUEL DIAS - Marketing Director & Client Relations</b>
                raqueldias@bateye.com | +351 227312657 <br>
                info@bateye.com | www.bateye.com
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="gallery-container">
            <div class="span3">
                <h3 class="abrilfat">LOGO</h3>
            </div>
            <div class="span3 span3marginalized">
                <img src="http://dummyimage.com/200x200/000/fff" alt="example"/>
                <p>COLOR</p>
            </div>
            <div class="span3">
                <img src="http://dummyimage.com/200x200/000/fff" alt="example"/>
                <p>COLOR</p>
            </div>
            <div class="span3">
                <img src="http://dummyimage.com/200x200/000/fff" alt="example"/>
                <p>COLOR</p>
            </div>
        </div>
    </div>
</div>
<?php include(sfConfig::get('sf_app_template_dir').'/footerSecondary.php') ?>
