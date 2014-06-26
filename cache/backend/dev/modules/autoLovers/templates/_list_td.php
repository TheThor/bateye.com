<td class="sf_admin_text sf_admin_list_td_name">
  <?php echo $lovers->getName() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_designer">
  <?php echo $lovers->getDesigner() ?>
</td>
<td class="sf_admin_foreignkey sf_admin_list_td_collection_id">
  <?php echo $lovers->getCollectionId() ?>
</td>
<td class="sf_admin_date sf_admin_list_td_created_at">
  <?php echo false !== strtotime($lovers->getCreatedAt()) ? format_date($lovers->getCreatedAt(), "f") : '&nbsp;' ?>
</td>
<td class="sf_admin_date sf_admin_list_td_updated_at">
  <?php echo false !== strtotime($lovers->getUpdatedAt()) ? format_date($lovers->getUpdatedAt(), "f") : '&nbsp;' ?>
</td>
