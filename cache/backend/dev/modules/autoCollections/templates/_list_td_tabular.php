<td class="sf_admin_text sf_admin_list_td_id">
  <?php echo link_to($collections->getId(), 'collections_edit', $collections) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_name">
  <?php echo $collections->getName() ?>
</td>
<td class="sf_admin_boolean sf_admin_list_td_is_active">
  <?php echo get_partial('collections/list_field_boolean', array('value' => $collections->getIsActive())) ?>
</td>
<td class="sf_admin_date sf_admin_list_td_created_at">
  <?php echo false !== strtotime($collections->getCreatedAt()) ? format_date($collections->getCreatedAt(), "f") : '&nbsp;' ?>
</td>
<td class="sf_admin_date sf_admin_list_td_updated_at">
  <?php echo false !== strtotime($collections->getUpdatedAt()) ? format_date($collections->getUpdatedAt(), "f") : '&nbsp;' ?>
</td>
