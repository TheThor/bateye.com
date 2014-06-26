<?php use_helper('I18N', 'Date') ?>
<?php include_partial('news/assets') ?>

  <div class="page-header">
    <h1><?php echo __('New News', array(), 'messages') ?></h1>
  </div>

  <?php include_partial('news/flashes') ?>

  <?php include_partial('news/form_header', array('news' => $news, 'form' => $form, 'configuration' => $configuration)) ?>

  <?php include_partial('news/form', array('news' => $news, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>

  <?php include_partial('news/form_footer', array('news' => $news, 'form' => $form, 'configuration' => $configuration)) ?>
