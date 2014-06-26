<td class="sf_admin_text sf_admin_list_td_id">
  <?php echo link_to($product_images->getId(), 'product_images_edit', $product_images) ?>
</td>
<td class="sf_admin_foreignkey sf_admin_list_td_product_id">
  <?php echo $product_images->getProductId() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_location">
  <?php echo $product_images->getLocation() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_alt">
  <?php echo $product_images->getAlt() ?>
</td>
<td class="sf_admin_date sf_admin_list_td_created_at">
  <?php echo false !== strtotime($product_images->getCreatedAt()) ? format_date($product_images->getCreatedAt(), "f") : '&nbsp;' ?>
</td>
<td class="sf_admin_date sf_admin_list_td_updated_at">
  <?php echo false !== strtotime($product_images->getUpdatedAt()) ? format_date($product_images->getUpdatedAt(), "f") : '&nbsp;' ?>
</td>
