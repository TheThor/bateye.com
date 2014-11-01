<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<?php include_http_metas() ?>
	<?php include_metas() ?>
	<?php include_title() ?>
	<link rel="shortcut icon" href="/favicon.ico"/>
	<?php include_stylesheets() ?>
	<?php include_javascripts() ?>
</head>
<body>
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">Bat Eye - Back End</a>
		</div>
		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
<!--				<li class="active"><a href=""></a></li>-->
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Home<b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="<?php echo url_for('slider_images') ?>">Gerir slider</a></li>
						<li><a href="<?php echo url_for('index_content') ?>">Gerir conteúdos</a></li>
						<li class="divider"></li>
						<li class="dropdown-header">Acções</li>
						<li><a href="<?php echo url_for(array('module' => 'slider_images','action' => 'new'))?>">Novo Adicionar slider</a></li>
					</ul>
				</li>
                <li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Produtos <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="<?php echo url_for('products') ?>">Gerir produtos</a></li>
						<li><a href="<?php echo url_for('product_images') ?>">Gerir imagens</a></li>
						<li class="divider"></li>
						<li class="dropdown-header">Acções</li>
						<li><a href="<?php echo url_for('products/new')?>">Novo producto</a></li>
						<li><a href="<?php echo url_for(array('module' => 'product_images', 'action' => 'new'))?>">Nova imagem</a></li>
					</ul>
				</li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Coleções <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo url_for('collections') ?>">Gerir coleções</a></li>
                        <li class="divider"></li>
                        <li class="dropdown-header">Acções</li>
                        <li><a href="<?php echo url_for('collections/new')?>">Novo coleção</a></li>
                    </ul>
                </li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Lovers <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="<?php echo url_for('lovers') ?>">Gerir produtos</a></li>
						<li><a href="<?php echo url_for('lovers_images') ?>">Gerir imagens</a></li>
						<li class="divider"></li>
						<li class="dropdown-header">Acções</li>
						<li><a href="<?php echo url_for(array('module' => 'lovers','action' => 'new'))?>">Novo producto</a></li>
						<li><a href="<?php echo url_for(array('module' => 'lovers_images','action' => 'new'))?>">Nova imagem</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Notícias<b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="<?php echo url_for('news') ?>">Gerir</a></li>
						<li class="divider"></li>
						<li class="dropdown-header">Acções</li>
						<li><a href="<?php echo url_for(array('module' => 'news','action' => 'new'))?>">Nova notícia</a></li>
					</ul>
				</li>
				<li><?php echo link_to('Logout', 'sf_guard_signout') ?></li>
			</ul>
		</div>
		<!--/.nav-collapse -->
	</div>
</div>
<div id="mainer" class="container theme-showcase">
	<?php echo $sf_content ?>
</div>
</body>
</html>
