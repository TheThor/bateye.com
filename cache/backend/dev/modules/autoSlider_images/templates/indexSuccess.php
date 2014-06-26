<?php use_helper('I18N', 'Date') ?>
<?php include_partial('slider_images/assets') ?>

<?php #include_partial('slider_images/navbar', array('filter' => 1)) ?>

      <?php $filterValues = $sf_user->getRawValue()->getAttribute('slider_images.filters', array(), 'admin_module'); if (!empty($filterValues)): ?>
    <div class="alert alert-info alert-block">
      <a href="#" class="close fade" data-dismiss="alert" aria-hidden="true">&times;</a>
      <h4 class="alert-heading"><?php echo __('Search',null,'bootstrap_admin') ?></h4>
      <?php echo __('Search results.',null,'bootstrap_admin') ?> <a href="#filterPopup" data-toggle="modal"><?php echo __('Modify parameters/filters.',null,'bootstrap_admin') ?></a>
      <?php echo link_to(__('Reset', array(), 'sf_admin'), 'slider_images_collection', array('action' => 'filter'), array('query_string' => '_reset', 'method' => 'post', 'class' => 'btn btn-xs btn-default')) ?>
    </div>
    <?php endif; ?>

  
  <div class="page-header">

    <div class="pull-right">
      <a href="#filterPopup" class="btn btn-default" data-toggle="modal"><i class="glyphicon glyphicon-search"></i> <?php echo __('Search',null,'bootstrap_admin') ?></a>
    </div>
    <h1><?php echo __('Slider images List', array(), 'messages') ?>
    <small class="col-lg-offset-2"><?php echo format_number_choice('[0] no result|[1] 1 result|(1,+Inf] %1% results', array('%1%' => $pager->getNbResults()), $pager->getNbResults(), 'sf_admin') ?>
    <?php if ($pager->haveToPaginate()): ?>
      <?php echo __('(page %%page%%/%%nb_pages%%)', array('%%page%%' => $pager->getPage(), '%%nb_pages%%' => $pager->getLastPage()), 'sf_admin') ?>
    <?php endif; ?></small></h1>
  </div>

  <?php include_partial('slider_images/flashes') ?>

  <?php include_partial('slider_images/list_header', array('pager' => $pager)) ?>

    <form action="<?php echo url_for('slider_images_collection', array('action' => 'batch')) ?>" method="post">
    <?php include_partial('slider_images/list', array('pager' => $pager, 'sort' => $sort, 'helper' => $helper)) ?>
    </form>

  <div id="sf_admin_footer">
    <?php include_partial('slider_images/list_footer', array('pager' => $pager)) ?>
  </div>

  <?php include_partial('slider_images/filters', array('form' => $filters, 'configuration' => $configuration)) ?>
