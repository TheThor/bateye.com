<?php use_helper('I18N') ?>
<?php use_stylesheet('bootstrap3.min.css') ?>
<script type="application/javascript">
    $("#pressregistration").click(function() {
        $( "#newsletteroverlay" ).fadeOut( "slow" );
    });
</script>
<form role="form" action="<?php echo url_for('@sf_guard_signin') ?>" method="post">
    <div class="col-md-11">
	    <div class="form-group">
            <div class="col-md-12" style="margin-bottom: 10px">
                <label for="email" class="col-lg-3">email</label>
                <div class="col-md-8">
                    <?php echo $form['username']->render(array('class' => 'form-control')) ?>
                </div>
            </div>
            <div class="col-md-12" style="margin-bottom: 10px">
                <label for="password" class="col-lg-3">password</label>
                <div class="col-md-8">
                    <?php echo $form['password']->render(array('class' => 'form-control')) ?>
                </div>
            </div>
	    </div>
        <?php echo $form['_csrf_token']->render() ?>
        <div class="col-md-12">
            <div class="col-md-3">
			    <button type="submit" class="btn btn-default" value="<?php echo __('Signin', null, 'sf_guard') ?>" style="border-radius: 0">Entrar</button>
            </div>
            <div class="col-md-8">
                <p style="font-size: 0.9em; text-align: justify;">
                    Register <a href="#" style="font-weight: bold; text-decoration: underline">HERE</a> for HD 300dpis images & Exclusive Downloads
                </p>
            </div>
        </div>
        <?php $routes = $sf_context->getRouting()->getRoutes() ?>
        <?php if (isset($routes['sf_guard_forgot_password'])): ?>
            <a href="<?php echo url_for('@sf_guard_forgot_password') ?>"><?php echo __('Forgot your password?', null, 'sf_guard') ?></a>
        <?php endif; ?>

        <?php if (isset($routes['sf_guard_register'])): ?>
            &nbsp; <a href="<?php echo url_for('@sf_guard_register') ?>"><?php echo __('Want to register?', null, 'sf_guard') ?></a>
        <?php endif; ?>
	</div>
</form>