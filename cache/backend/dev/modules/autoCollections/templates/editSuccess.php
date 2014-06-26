<?php use_helper('I18N', 'Date') ?>
<?php include_partial('collections/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('Edit Collections', array(), 'messages') ?></h1>

  <?php include_partial('collections/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('collections/form_header', array('collections' => $collections, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('collections/form', array('collections' => $collections, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('collections/form_footer', array('collections' => $collections, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
