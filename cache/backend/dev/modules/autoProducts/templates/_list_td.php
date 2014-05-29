<td class="sf_admin_text sf_admin_list_td_name">
  <?php echo $products->getName() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_designer">
  <?php echo $products->getDesigner() ?>
</td>
<td class="sf_admin_foreignkey sf_admin_list_td_collection_id">
  <?php echo $products->getCollectionId() ?>
</td>
<td class="sf_admin_date sf_admin_list_td_created_at">
  <?php echo false !== strtotime($products->getCreatedAt()) ? format_date($products->getCreatedAt(), "f") : '&nbsp;' ?>
</td>
<td class="sf_admin_date sf_admin_list_td_updated_at">
  <?php echo false !== strtotime($products->getUpdatedAt()) ? format_date($products->getUpdatedAt(), "f") : '&nbsp;' ?>
</td>
