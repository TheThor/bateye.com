<?php use_helper('I18N') ?>
<?php use_stylesheet('bootstrap3.min.css') ?>

<form role="form" action="<?php echo url_for('@sf_guard_signin') ?>" method="post">
    <div class="col-md-6">
	    <div class="form-group">
		    <?php echo $form?>
<!--	      --><?php //echo $form['username']->renderLabel() ?>
<!--	      --><?php //echo $form['username']->render(array('class' => 'form-control')) ?>
<!--	      --><?php //echo $form['password']->renderLabel() ?>
<!--	      --><?php //echo $form['password']->render(array('class' => 'form-control')) ?>
	    </div>
			<button type="submit" class="btn btn-default" value="<?php echo __('Signin', null, 'sf_guard') ?>">Entrar</button>

			<?php $routes = $sf_context->getRouting()->getRoutes() ?>
			<?php if (isset($routes['sf_guard_forgot_password'])): ?>
				<a href="<?php echo url_for('@sf_guard_forgot_password') ?>"><?php echo __('Forgot your password?', null, 'sf_guard') ?></a>
			<?php endif; ?>

			<?php if (isset($routes['sf_guard_register'])): ?>
				&nbsp; <a href="<?php echo url_for('@sf_guard_register') ?>"><?php echo __('Want to register?', null, 'sf_guard') ?></a>
			<?php endif; ?>
	</div>
</form>