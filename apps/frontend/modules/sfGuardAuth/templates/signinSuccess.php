<?php use_helper('I18N') ?>
<?php use_helper('I18N') ?>
<?php include(sfConfig::get('sf_app_template_dir').'/newsletter.php') ?>
<?php include(sfConfig::get('sf_app_template_dir').'/menuSecondary.php') ?>
<?php slot(
	'title',
	sprintf('Bat Eye - Login'))
?>
    <style>
        .form-control {
            height: 20px;
        }
        input[type=text], input[type=password] {
            width 50%;
        }
    </style>
<div class="container">
    <div class="col-md-9 col-centered">
        <div class="col-md-6">
            <?php echo get_partial('sfGuardAuth/signin_form', array('form' => $form)) ?>
        </div>
        <div class="col-md-4 col-md-push-2">
            <p>Any other content needed please contact.</p>

            <p>RAQUEL DIAS - Marketing Director & Client Relations</p>

            <p>
                raqueldias@bateye.com | +351 227312657 <br/>
                info@bateye.com | www.bateye.com <br/>
                For press enquiries plese contact: <br/>
                Raquel Dias <br/>
                +351 915790818
            </p>
        </div>
        <div class="clearfix"></div>
    </div>
    <?php include_partial('press/presslogineditorial') ?>
</div>
<?php include(sfConfig::get('sf_app_template_dir').'/footerSecondary.php') ?>