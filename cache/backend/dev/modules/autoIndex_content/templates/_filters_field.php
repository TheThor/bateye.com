<?php if ($field->isPartial()): ?>
  <?php include_partial('index_content/'.$name, array('type' => 'filter', 'form' => $form, 'attributes' => $attributes instanceof sfOutputEscaper ? $attributes->getRawValue() : $attributes)) ?>
<?php elseif ($field->isComponent()): ?>
  <?php include_component('index_content', $name, array('type' => 'filter', 'form' => $form, 'attributes' => $attributes instanceof sfOutputEscaper ? $attributes->getRawValue() : $attributes)) ?>
<?php else: ?>
  <div class="form-group <?php echo $class ?>">
    <?php echo $form[$name]->renderLabel($label, array('class' => 'control-label')) ?>
    <div class="col-xs-8">
      <?php echo $form[$name]->render($attributes instanceof sfOutputEscaper ? $attributes->getRawValue() : $attributes) ?>
      <?php echo $form[$name]->renderError() ?>
      <?php if ($help || $help = $form[$name]->renderHelp()): ?>
        <span class="help-block"><?php echo __($help, array(), 'messages') ?></span>
      <?php endif; ?>
    </div>
  </div>
<?php endif; ?>
