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
						<li><a href="<?php echo url_for('slider_image') ?>">Gerir slider</a></li>
						<li><a href="<?php echo url_for('index_content') ?>">Gerir conteúdos</a></li>
						<li class="divider"></li>
						<li class="dropdown-header">Acções</li>
						<li><a href="<?php echo url_for(array('module' => 'slider_image','action' => 'new'))?>">Adicionar imagem de slider</a></li>
					</ul>
				</li>
                <li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Produtos <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="<?php echo url_for('product') ?>">Gerir produtos</a></li>
						<li><a href="<?php echo url_for('product_image') ?>">Gerir imagens</a></li>
                        <li><a href="<?php echo url_for('category') ?>">Gerir categorias</a></li>
						<li class="divider"></li>
						<li class="dropdown-header">Acções</li>
						<li><a href="<?php echo url_for('product/new')?>">Novo producto</a></li>
						<li><a href="<?php echo url_for(array('module' => 'product_image', 'action' => 'new'))?>">Nova imagem</a></li>
                        <li><a href="<?php echo url_for('category/new') ?>">Nova categoria</a></li>
					</ul>
				</li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Coleções <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo url_for('collection') ?>">Gerir coleções</a></li>
                        <li class="divider"></li>
                        <li class="dropdown-header">Acções</li>
                        <li><a href="<?php echo url_for('collection/new')?>">Novo coleção</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Press <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-header">Área de login</li>
                        <li><a href="<?php echo url_for('press_main_area') ?>">Gerir área login</a></li>
                        <li class="divider"></li>
                        <li class="dropdown-header">The brand</li>
                        <li><a href="<?php echo url_for('press_logo')?>">Press brand logos</a></li>
                        <li><a href="<?php echo url_for('press_product_concept')?>">Concept Images zip</a></li>
                        <li><a href="<?php echo url_for('press_product_concept_image')?>">Imagens conceptuais de produto</a></li>
                        <li class="divider"></li>
                        <li class="dropdown-header">Productos/Coleções</li>
                        <li><a href="<?php echo url_for('press_collection')?>">Página de coleções</a></li>
<!--                        <li><a href="--><?php //echo url_for('press_product_image')?><!--">Imagens de produto</a></li>-->
                        <li class="divider"></li>
                        <li class="dropdown-header">Media</li>
                        <li><a href="<?php echo url_for('press_catalogue')?>">Catálogos</a></li>
                        <li><a href="<?php echo url_for('press_release')?>">Releases</a></li>
                        <li><a href="<?php echo url_for('press_cover_image')?>">Covers</a></li>
                        <li><a href="<?php echo url_for('press_cover_video')?>">Videos</a></li>
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
