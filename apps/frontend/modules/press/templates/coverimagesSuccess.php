<?php include(sfConfig::get('sf_app_template_dir').'/newsletter.php') ?>
<div class="span11 pagination-centered" style="position: relative">
    <img class="logo" src="/images/logo_principal_cores.png" alt="Logo Bateye"/>
    <!--    <div id="lang-choice">-->
    <!--        <a href="">EN </a>|<a href="index.php"> PT</a>-->
    <!--    </div>-->
</div>
<div class="container">
    <?php include_partial(
        'pressareamenu',
        array('collections' => $collections)
    ) ?>
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
                <?php /** @var Collection $collection */ ?>
                <h3 class="abrilfat">Cover Images</h3>
            </div>
            <?php /** @var PressCoverImage $coverImage */
            foreach ($coverImages as $coverImage): ?>
                <div class="span3 span3marginalized">
                    <img src="<?php $coverImage->getCover() ?>" alt="example"/>
                    <p class="no-margin">COLOR</p>
                    <a class="span10" href="<?php $coverImage->getLink() ?>">>download</a>
                </div>
            <?php endforeach; ?>
            <div class="clear"></div>
        </div>
    </div>
</div>
<?php include(sfConfig::get('sf_app_template_dir').'/footerSecondary.php') ?>
