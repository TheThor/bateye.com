<?php use_helper('I18N') ?>
<?php use_helper('I18N') ?>
<?php include(sfConfig::get('sf_app_template_dir').'/newsletter.php') ?>
<?php include(sfConfig::get('sf_app_template_dir').'/menuSecondary.php') ?>
<?php slot(
    'title',
    sprintf('Bat Eye - Press Magazines'))
?>
    <style>
        .form-control {
            height: 25px;
        }
        label {
            height: 25px;
            margin-bottom: 0px;
        }
        input[type=text], input[type=password] {
            width 50%;
        }
        .margin-top-normal {
            margin-top: 30px;
        }
    </style>
    <div class="container">
        <div class="col-md-8 col-centered margin-top-normal">
            <div class="col-md-6">
                <?php echo get_partial('sfGuardAuth/signin_form', array('form' => $form)) ?>
            </div>
            <div class="col-md-4 col-md-push-2">
                <p>Any other content needed please contact:</p>
                <p>RAQUEL DIAS - Marketing Director <br>
                    raqueldias@bateye.com | +351 227312657 <br>
                    info@bateye.com <br>
                </>
            </div>
            <div class="clearfix"></div>
        </div>
        <?php
        include_partial(
            'press/presslogineditorial',
            array(
                'pressMagazines' => $pressMagazines,
                'pressYears'     => $pressYears
            )
        ) ?>
    </div>
<?php include(sfConfig::get('sf_app_template_dir').'/footerSecondary.php') ?>