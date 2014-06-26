<?php use_helper('I18N', 'Date') ?>
<?php include_partial('contacts/assets') ?>

<?php #include_partial('contacts/navbar', array('filter' => )) ?>

  
  <div class="page-header">

    <div class="pull-right">
      <a href="#filterPopup" class="btn btn-default" data-toggle="modal"><i class="glyphicon glyphicon-search"></i> <?php echo __('Search',null,'bootstrap_admin') ?></a>
    </div>
    <h1><?php echo __('Contacts List', array(), 'messages') ?>
    <small class="col-lg-offset-2"><?php echo format_number_choice('[0] no result|[1] 1 result|(1,+Inf] %1% results', array('%1%' => $pager->getNbResults()), $pager->getNbResults(), 'sf_admin') ?>
    <?php if ($pager->haveToPaginate()): ?>
      <?php echo __('(page %%page%%/%%nb_pages%%)', array('%%page%%' => $pager->getPage(), '%%nb_pages%%' => $pager->getLastPage()), 'sf_admin') ?>
    <?php endif; ?></small></h1>
  </div>

  <?php include_partial('contacts/flashes') ?>

  <?php include_partial('contacts/list_header', array('pager' => $pager)) ?>

    <?php include_partial('contacts/list', array('pager' => $pager, 'sort' => $sort, 'helper' => $helper)) ?>

  <div id="sf_admin_footer">
    <?php include_partial('contacts/list_footer', array('pager' => $pager)) ?>
  </div>

