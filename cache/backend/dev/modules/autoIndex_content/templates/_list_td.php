<td class="sf_admin_text sf_admin_list_td_id">
  <?php echo link_to($index_content->getId(), 'index_content_edit', $index_content) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_newsletter">
  <?php echo $index_content->getNewsletter() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_catalogue">
  <?php echo $index_content->getCatalogue() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_thebrand">
  <?php echo $index_content->getThebrand() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_thedesigner">
  <?php echo $index_content->getThedesigner() ?>
</td>
<td class="sf_admin_date sf_admin_list_td_created_at">
  <?php echo false !== strtotime($index_content->getCreatedAt()) ? format_date($index_content->getCreatedAt(), "f") : '&nbsp;' ?>
</td>
<td class="sf_admin_date sf_admin_list_td_updated_at">
  <?php echo false !== strtotime($index_content->getUpdatedAt()) ? format_date($index_content->getUpdatedAt(), "f") : '&nbsp;' ?>
</td>
