<?php use_helper('I18N', 'Date') ?>
<?php include_partial('index_content/assets') ?>

  <div class="page-header">
    <h1><?php echo __('Edit Index content', array(), 'messages') ?></h1>
  </div>

  <?php include_partial('index_content/flashes') ?>

  <?php include_partial('index_content/form_header', array('index_content' => $index_content, 'form' => $form, 'configuration' => $configuration)) ?>

  <?php include_partial('index_content/form', array('index_content' => $index_content, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  
  <?php include_partial('index_content/form_footer', array('index_content' => $index_content, 'form' => $form, 'configuration' => $configuration)) ?>
