<td class="sf_admin_text sf_admin_list_td_id">
  <?php echo link_to($slider_images->getId(), 'slider_images_edit', $slider_images) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_path">
  <?php echo $slider_images->getPath() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_alt">
  <?php echo $slider_images->getAlt() ?>
</td>
<td class="sf_admin_date sf_admin_list_td_created_at">
  <?php echo false !== strtotime($slider_images->getCreatedAt()) ? format_date($slider_images->getCreatedAt(), "f") : '&nbsp;' ?>
</td>
<td class="sf_admin_date sf_admin_list_td_updated_at">
  <?php echo false !== strtotime($slider_images->getUpdatedAt()) ? format_date($slider_images->getUpdatedAt(), "f") : '&nbsp;' ?>
</td>
