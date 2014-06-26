<?php use_helper('I18N', 'Date') ?>
<?php include_partial('product_images/assets') ?>

  <div class="page-header">
    <h1><?php echo __('Edit Product images', array(), 'messages') ?></h1>
  </div>

  <?php include_partial('product_images/flashes') ?>

  <?php include_partial('product_images/form_header', array('product_images' => $product_images, 'form' => $form, 'configuration' => $configuration)) ?>

  <?php include_partial('product_images/form', array('product_images' => $product_images, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  
  <?php include_partial('product_images/form_footer', array('product_images' => $product_images, 'form' => $form, 'configuration' => $configuration)) ?>
