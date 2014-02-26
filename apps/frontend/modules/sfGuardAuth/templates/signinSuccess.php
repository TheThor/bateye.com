<?php use_helper('I18N') ?>
<?php use_helper('I18N') ?>
<?php include(sfConfig::get('sf_app_template_dir').'/newsletter.php') ?>
<?php include(sfConfig::get('sf_app_template_dir').'/menuSecondary.php') ?>
<?php slot(
	'title',
	sprintf('Bat Eye - Login'))
?>
<div class="container">
	<div class="col-md-7 col-md-offset-3">
<h3><?php echo __('Login', null, 'sf_guard') ?></h3>

<?php echo get_partial('sfGuardAuth/signin_form', array('form' => $form)) ?>
	</div>
</div>
<?php include(sfConfig::get('sf_app_template_dir').'/footerSecondary.php') ?>