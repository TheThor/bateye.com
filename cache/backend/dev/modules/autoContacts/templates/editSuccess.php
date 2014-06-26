<?php use_helper('I18N', 'Date') ?>
<?php include_partial('contacts/assets') ?>

  <div class="page-header">
    <h1><?php echo __('Edit Contacts', array(), 'messages') ?></h1>
  </div>

  <?php include_partial('contacts/flashes') ?>

  <?php include_partial('contacts/form_header', array('contacts' => $contacts, 'form' => $form, 'configuration' => $configuration)) ?>

  <?php include_partial('contacts/form', array('contacts' => $contacts, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  
  <?php include_partial('contacts/form_footer', array('contacts' => $contacts, 'form' => $form, 'configuration' => $configuration)) ?>
