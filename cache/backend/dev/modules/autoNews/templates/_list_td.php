<td class="sf_admin_text sf_admin_list_td_id">
  <?php echo link_to($news->getId(), 'news_edit', $news) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_news_title">
  <?php echo $news->getNewsTitle() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_news_content">
  <?php echo $news->getNewsContent() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_news_image">
  <?php echo $news->getNewsImage() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_link">
  <?php echo $news->getLink() ?>
</td>
<td class="sf_admin_date sf_admin_list_td_created_at">
  <?php echo false !== strtotime($news->getCreatedAt()) ? format_date($news->getCreatedAt(), "f") : '&nbsp;' ?>
</td>
<td class="sf_admin_date sf_admin_list_td_updated_at">
  <?php echo false !== strtotime($news->getUpdatedAt()) ? format_date($news->getUpdatedAt(), "f") : '&nbsp;' ?>
</td>
