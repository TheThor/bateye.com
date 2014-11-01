<fieldset>

  <?php if ('NONE' != $fieldset): ?>
    <legend><?php echo __($fieldset, array(), 'messages') ?></legend>
  <?php endif; ?>

  <?php foreach ($fields as $name => $field): ?>
    <?php if ((isset($form[$name]) && $form[$name]->isHidden()) || (!isset($form[$name]) && $field->isReal())) continue ?>
    <?php include_partial('index_content/form_field', array(
      'name'       => $name,
      'attributes' => $field->getConfig('attributes', array()),
      'label'      => $field->getConfig('label'),
      'help'       => $field->getConfig('help'),
      'form'       => $form,
      'field'      => $field,
      'class'      => 'control-type-'.strtolower($field->getType()).' control-name-'.$name,
    )) ?>
  <?php endforeach; ?>
  
</fieldset>