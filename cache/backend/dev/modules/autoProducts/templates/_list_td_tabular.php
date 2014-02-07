<td class="sf_admin_text sf_admin_list_td_id">
  <?php echo link_to($products->getId(), 'products_edit', $products) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_name">
  <?php echo $products->getName() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_main_img_path">
  <?php echo $products->getMainImgPath() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_main_img_alt">
  <?php echo $products->getMainImgAlt() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_citation">
  <?php echo $products->getCitation() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_description">
  <?php echo $products->getDescription() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_designer">
  <?php echo $products->getDesigner() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_width">
  <?php echo $products->getWidth() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_height">
  <?php echo $products->getHeight() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_diameter">
  <?php echo $products->getDiameter() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_depth">
  <?php echo $products->getDepth() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_materials">
  <?php echo $products->getMaterials() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_other">
  <?php echo $products->getOther() ?>
</td>
<td class="sf_admin_foreignkey sf_admin_list_td_collection_id">
  <?php echo $products->getCollectionId() ?>
</td>
<td class="sf_admin_foreignkey sf_admin_list_td_category_id">
  <?php echo $products->getCategoryId() ?>
</td>
<td class="sf_admin_date sf_admin_list_td_created_at">
  <?php echo false !== strtotime($products->getCreatedAt()) ? format_date($products->getCreatedAt(), "f") : '&nbsp;' ?>
</td>
<td class="sf_admin_date sf_admin_list_td_updated_at">
  <?php echo false !== strtotime($products->getUpdatedAt()) ? format_date($products->getUpdatedAt(), "f") : '&nbsp;' ?>
</td>
