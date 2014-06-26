<td colspan="5">
  <?php echo __('%%id%% - %%email%% - %%phone%% - %%created_at%% - %%updated_at%%', array('%%id%%' => link_to($contacts->getId(), 'contacts_edit', $contacts), '%%email%%' => $contacts->getEmail(), '%%phone%%' => $contacts->getPhone(), '%%created_at%%' => false !== strtotime($contacts->getCreatedAt()) ? format_date($contacts->getCreatedAt(), "f") : '&nbsp;', '%%updated_at%%' => false !== strtotime($contacts->getUpdatedAt()) ? format_date($contacts->getUpdatedAt(), "f") : '&nbsp;'), 'messages') ?>
</td>
