[?php use_stylesheets_for_form($form) ?]
[?php use_javascripts_for_form($form) ?]

<div class="col-md-12"> <!--sf_admin filter what size???-->
	[?php if ($form->hasGlobalErrors()): ?]
	[?php echo $form->renderGlobalErrors() ?]
	[?php endif; ?]

	<form role="form" action="[?php echo url_for('<?php echo $this->getUrlForAction('collection') ?>', array('action' => 'filter')) ?]" method="post">
		<div>
			[?php foreach ($configuration->getFormFilterFields($form) as $name => $field): ?]
			[?php if ((isset($form[$name]) && $form[$name]->isHidden()) || (!isset($form[$name]) && $field->isReal()))
			continue ?]
			[?php include_partial('<?php echo $this->getModuleName() ?>/filters_field', array(
			'name' => $name,
			'attributes' => $field->getConfig('attributes', array()),
			'label' => $field->getConfig('label'),
			'help' => $field->getConfig('help'),
			'form' => $form,
			'field' => $field,
			'class' => 'form-group '.$name,
			)) ?]
			[?php endforeach; ?]
		</div>
		<div>
			[?php echo $form->renderHiddenFields() ?]
			[?php echo link_to(__('Reset', array(), 'sf_admin'), '<?php echo $this->getUrlForAction('collection') ?>',
			array('action' => 'filter'), array('query_string' => '_reset', 'method' => 'post')) ?]
			<input class="btn btn-default" type="submit" value="[?php echo __('Filter', array(), 'sf_admin') ?]"/>
		</div>
	</form>
</div>
