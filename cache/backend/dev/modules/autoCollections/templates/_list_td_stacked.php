<td colspan="5">
  <?php echo __('%%id%% - %%name%% - %%is_active%% - %%created_at%% - %%updated_at%%', array('%%id%%' => link_to($collections->getId(), 'collections_edit', $collections), '%%name%%' => $collections->getName(), '%%is_active%%' => get_partial('collections/list_field_boolean', array('value' => $collections->getIsActive())), '%%created_at%%' => false !== strtotime($collections->getCreatedAt()) ? format_date($collections->getCreatedAt(), "f") : '&nbsp;', '%%updated_at%%' => false !== strtotime($collections->getUpdatedAt()) ? format_date($collections->getUpdatedAt(), "f") : '&nbsp;'), 'messages') ?>
</td>
