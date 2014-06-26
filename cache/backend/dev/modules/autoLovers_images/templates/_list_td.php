<td class="sf_admin_text sf_admin_list_td_id">
  <?php echo link_to($lovers_images->getId(), 'lovers_images_edit', $lovers_images) ?>
</td>
<td class="sf_admin_foreignkey sf_admin_list_td_product_id">
  <?php echo $lovers_images->getProductId() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_location">
  <?php echo $lovers_images->getLocation() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_alt">
  <?php echo $lovers_images->getAlt() ?>
</td>
<td class="sf_admin_date sf_admin_list_td_created_at">
  <?php echo false !== strtotime($lovers_images->getCreatedAt()) ? format_date($lovers_images->getCreatedAt(), "f") : '&nbsp;' ?>
</td>
<td class="sf_admin_date sf_admin_list_td_updated_at">
  <?php echo false !== strtotime($lovers_images->getUpdatedAt()) ? format_date($lovers_images->getUpdatedAt(), "f") : '&nbsp;' ?>
</td>
