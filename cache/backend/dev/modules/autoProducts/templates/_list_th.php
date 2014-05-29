<?php slot('sf_admin.current_header') ?>
<th>
  <?php if ('name' == $sort[0]): ?>
    <?php echo link_to(__('Name <i class="glyphicon glyphicon-chevron-'.(($sort[1] == 'asc') ? 'down' : 'up').'"></i>', array(), 'messages'), '@products', array('query_string' => 'sort=name&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Name', array(), 'messages'), '@products', array('query_string' => 'sort=name&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th>
  <?php if ('designer' == $sort[0]): ?>
    <?php echo link_to(__('Designer <i class="glyphicon glyphicon-chevron-'.(($sort[1] == 'asc') ? 'down' : 'up').'"></i>', array(), 'messages'), '@products', array('query_string' => 'sort=designer&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Designer', array(), 'messages'), '@products', array('query_string' => 'sort=designer&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th>
  <?php if ('collection_id' == $sort[0]): ?>
    <?php echo link_to(__('Collection <i class="glyphicon glyphicon-chevron-'.(($sort[1] == 'asc') ? 'down' : 'up').'"></i>', array(), 'messages'), '@products', array('query_string' => 'sort=collection_id&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Collection', array(), 'messages'), '@products', array('query_string' => 'sort=collection_id&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th>
  <?php if ('created_at' == $sort[0]): ?>
    <?php echo link_to(__('Created at <i class="glyphicon glyphicon-chevron-'.(($sort[1] == 'asc') ? 'down' : 'up').'"></i>', array(), 'messages'), '@products', array('query_string' => 'sort=created_at&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Created at', array(), 'messages'), '@products', array('query_string' => 'sort=created_at&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th>
  <?php if ('updated_at' == $sort[0]): ?>
    <?php echo link_to(__('Updated at <i class="glyphicon glyphicon-chevron-'.(($sort[1] == 'asc') ? 'down' : 'up').'"></i>', array(), 'messages'), '@products', array('query_string' => 'sort=updated_at&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Updated at', array(), 'messages'), '@products', array('query_string' => 'sort=updated_at&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?>