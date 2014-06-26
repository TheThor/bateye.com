<?php use_helper('I18N', 'Date') ?>
<?php include_partial('lovers_images/assets') ?>

  <div class="page-header">
    <h1><?php echo __('New Lovers images', array(), 'messages') ?></h1>
  </div>

  <?php include_partial('lovers_images/flashes') ?>

  <?php include_partial('lovers_images/form_header', array('lovers_images' => $lovers_images, 'form' => $form, 'configuration' => $configuration)) ?>

  <?php include_partial('lovers_images/form', array('lovers_images' => $lovers_images, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>

  <?php include_partial('lovers_images/form_footer', array('lovers_images' => $lovers_images, 'form' => $form, 'configuration' => $configuration)) ?>
