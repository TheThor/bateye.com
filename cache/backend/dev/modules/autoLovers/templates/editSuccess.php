<?php use_helper('I18N', 'Date') ?>
<?php include_partial('lovers/assets') ?>

  <div class="page-header">
    <h1><?php echo __('Edit Lovers', array(), 'messages') ?></h1>
  </div>

  <?php include_partial('lovers/flashes') ?>

  <?php include_partial('lovers/form_header', array('lovers' => $lovers, 'form' => $form, 'configuration' => $configuration)) ?>

  <?php include_partial('lovers/form', array('lovers' => $lovers, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  
  <?php include_partial('lovers/form_footer', array('lovers' => $lovers, 'form' => $form, 'configuration' => $configuration)) ?>
