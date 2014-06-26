<?php use_helper('I18N', 'Date') ?>
<?php include_partial('slider_images/assets') ?>

  <div class="page-header">
    <h1><?php echo __('Edit Slider images', array(), 'messages') ?></h1>
  </div>

  <?php include_partial('slider_images/flashes') ?>

  <?php include_partial('slider_images/form_header', array('slider_images' => $slider_images, 'form' => $form, 'configuration' => $configuration)) ?>

  <?php include_partial('slider_images/form', array('slider_images' => $slider_images, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  
  <?php include_partial('slider_images/form_footer', array('slider_images' => $slider_images, 'form' => $form, 'configuration' => $configuration)) ?>
