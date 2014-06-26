<?php use_helper('I18N', 'Date') ?>
<?php include_partial('collections/assets') ?>

  <div class="page-header">
    <h1><?php echo __('New Collections', array(), 'messages') ?></h1>
  </div>

  <?php include_partial('collections/flashes') ?>

  <?php include_partial('collections/form_header', array('collections' => $collections, 'form' => $form, 'configuration' => $configuration)) ?>

  <?php include_partial('collections/form', array('collections' => $collections, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>

  <?php include_partial('collections/form_footer', array('collections' => $collections, 'form' => $form, 'configuration' => $configuration)) ?>
