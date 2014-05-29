<?php use_helper('I18N', 'Date') ?>
<?php include_partial('products/assets') ?>

  <div class="page-header">
    <h1><?php echo __('New Products', array(), 'messages') ?></h1>
  </div>

  <?php include_partial('products/flashes') ?>

  <?php include_partial('products/form_header', array('products' => $products, 'form' => $form, 'configuration' => $configuration)) ?>

  <?php include_partial('products/form', array('products' => $products, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>

  <?php include_partial('products/form_footer', array('products' => $products, 'form' => $form, 'configuration' => $configuration)) ?>
