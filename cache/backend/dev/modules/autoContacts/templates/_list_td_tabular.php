<td class="sf_admin_text sf_admin_list_td_id">
  <?php echo link_to($contacts->getId(), 'contacts_edit', $contacts) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_email">
  <?php echo $contacts->getEmail() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_phone">
  <?php echo $contacts->getPhone() ?>
</td>
<td class="sf_admin_date sf_admin_list_td_created_at">
  <?php echo false !== strtotime($contacts->getCreatedAt()) ? format_date($contacts->getCreatedAt(), "f") : '&nbsp;' ?>
</td>
<td class="sf_admin_date sf_admin_list_td_updated_at">
  <?php echo false !== strtotime($contacts->getUpdatedAt()) ? format_date($contacts->getUpdatedAt(), "f") : '&nbsp;' ?>
</td>
