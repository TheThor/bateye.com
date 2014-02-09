	<?php slot('sf_admin.current_header') ?>
	<th class="sf_admin_text sf_admin_list_th_id">
					<?php if ('id' == $sort[0]): ?>
			<?php echo link_to(__('Id', array(), 'messages'), '@products', array('query_string' => 'sort=id&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
			<?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
			<?php else: ?>
			<?php echo link_to(__('Id', array(), 'messages'), '@products', array('query_string' => 'sort=id&sort_type=asc')) ?>
			<?php endif; ?>
			</th>
	<?php end_slot(); ?>
	<?php include_slot('sf_admin.current_header') ?>	<?php slot('sf_admin.current_header') ?>
	<th class="sf_admin_text sf_admin_list_th_name">
					<?php if ('name' == $sort[0]): ?>
			<?php echo link_to(__('Name', array(), 'messages'), '@products', array('query_string' => 'sort=name&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
			<?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
			<?php else: ?>
			<?php echo link_to(__('Name', array(), 'messages'), '@products', array('query_string' => 'sort=name&sort_type=asc')) ?>
			<?php endif; ?>
			</th>
	<?php end_slot(); ?>
	<?php include_slot('sf_admin.current_header') ?>	<?php slot('sf_admin.current_header') ?>
	<th class="sf_admin_text sf_admin_list_th_main_img_path">
					<?php if ('main_img_path' == $sort[0]): ?>
			<?php echo link_to(__('Main img path', array(), 'messages'), '@products', array('query_string' => 'sort=main_img_path&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
			<?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
			<?php else: ?>
			<?php echo link_to(__('Main img path', array(), 'messages'), '@products', array('query_string' => 'sort=main_img_path&sort_type=asc')) ?>
			<?php endif; ?>
			</th>
	<?php end_slot(); ?>
	<?php include_slot('sf_admin.current_header') ?>	<?php slot('sf_admin.current_header') ?>
	<th class="sf_admin_text sf_admin_list_th_main_img_alt">
					<?php if ('main_img_alt' == $sort[0]): ?>
			<?php echo link_to(__('Main img alt', array(), 'messages'), '@products', array('query_string' => 'sort=main_img_alt&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
			<?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
			<?php else: ?>
			<?php echo link_to(__('Main img alt', array(), 'messages'), '@products', array('query_string' => 'sort=main_img_alt&sort_type=asc')) ?>
			<?php endif; ?>
			</th>
	<?php end_slot(); ?>
	<?php include_slot('sf_admin.current_header') ?>	<?php slot('sf_admin.current_header') ?>
	<th class="sf_admin_text sf_admin_list_th_citation">
					<?php if ('citation' == $sort[0]): ?>
			<?php echo link_to(__('Citation', array(), 'messages'), '@products', array('query_string' => 'sort=citation&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
			<?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
			<?php else: ?>
			<?php echo link_to(__('Citation', array(), 'messages'), '@products', array('query_string' => 'sort=citation&sort_type=asc')) ?>
			<?php endif; ?>
			</th>
	<?php end_slot(); ?>
	<?php include_slot('sf_admin.current_header') ?>	<?php slot('sf_admin.current_header') ?>
	<th class="sf_admin_text sf_admin_list_th_description">
					<?php if ('description' == $sort[0]): ?>
			<?php echo link_to(__('Description', array(), 'messages'), '@products', array('query_string' => 'sort=description&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
			<?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
			<?php else: ?>
			<?php echo link_to(__('Description', array(), 'messages'), '@products', array('query_string' => 'sort=description&sort_type=asc')) ?>
			<?php endif; ?>
			</th>
	<?php end_slot(); ?>
	<?php include_slot('sf_admin.current_header') ?>	<?php slot('sf_admin.current_header') ?>
	<th class="sf_admin_text sf_admin_list_th_designer">
					<?php if ('designer' == $sort[0]): ?>
			<?php echo link_to(__('Designer', array(), 'messages'), '@products', array('query_string' => 'sort=designer&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
			<?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
			<?php else: ?>
			<?php echo link_to(__('Designer', array(), 'messages'), '@products', array('query_string' => 'sort=designer&sort_type=asc')) ?>
			<?php endif; ?>
			</th>
	<?php end_slot(); ?>
	<?php include_slot('sf_admin.current_header') ?>	<?php slot('sf_admin.current_header') ?>
	<th class="sf_admin_text sf_admin_list_th_width">
					<?php if ('width' == $sort[0]): ?>
			<?php echo link_to(__('Width', array(), 'messages'), '@products', array('query_string' => 'sort=width&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
			<?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
			<?php else: ?>
			<?php echo link_to(__('Width', array(), 'messages'), '@products', array('query_string' => 'sort=width&sort_type=asc')) ?>
			<?php endif; ?>
			</th>
	<?php end_slot(); ?>
	<?php include_slot('sf_admin.current_header') ?>	<?php slot('sf_admin.current_header') ?>
	<th class="sf_admin_text sf_admin_list_th_height">
					<?php if ('height' == $sort[0]): ?>
			<?php echo link_to(__('Height', array(), 'messages'), '@products', array('query_string' => 'sort=height&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
			<?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
			<?php else: ?>
			<?php echo link_to(__('Height', array(), 'messages'), '@products', array('query_string' => 'sort=height&sort_type=asc')) ?>
			<?php endif; ?>
			</th>
	<?php end_slot(); ?>
	<?php include_slot('sf_admin.current_header') ?>	<?php slot('sf_admin.current_header') ?>
	<th class="sf_admin_text sf_admin_list_th_diameter">
					<?php if ('diameter' == $sort[0]): ?>
			<?php echo link_to(__('Diameter', array(), 'messages'), '@products', array('query_string' => 'sort=diameter&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
			<?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
			<?php else: ?>
			<?php echo link_to(__('Diameter', array(), 'messages'), '@products', array('query_string' => 'sort=diameter&sort_type=asc')) ?>
			<?php endif; ?>
			</th>
	<?php end_slot(); ?>
	<?php include_slot('sf_admin.current_header') ?>	<?php slot('sf_admin.current_header') ?>
	<th class="sf_admin_text sf_admin_list_th_depth">
					<?php if ('depth' == $sort[0]): ?>
			<?php echo link_to(__('Depth', array(), 'messages'), '@products', array('query_string' => 'sort=depth&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
			<?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
			<?php else: ?>
			<?php echo link_to(__('Depth', array(), 'messages'), '@products', array('query_string' => 'sort=depth&sort_type=asc')) ?>
			<?php endif; ?>
			</th>
	<?php end_slot(); ?>
	<?php include_slot('sf_admin.current_header') ?>	<?php slot('sf_admin.current_header') ?>
	<th class="sf_admin_text sf_admin_list_th_materials">
					<?php if ('materials' == $sort[0]): ?>
			<?php echo link_to(__('Materials', array(), 'messages'), '@products', array('query_string' => 'sort=materials&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
			<?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
			<?php else: ?>
			<?php echo link_to(__('Materials', array(), 'messages'), '@products', array('query_string' => 'sort=materials&sort_type=asc')) ?>
			<?php endif; ?>
			</th>
	<?php end_slot(); ?>
	<?php include_slot('sf_admin.current_header') ?>	<?php slot('sf_admin.current_header') ?>
	<th class="sf_admin_text sf_admin_list_th_other">
					<?php if ('other' == $sort[0]): ?>
			<?php echo link_to(__('Other', array(), 'messages'), '@products', array('query_string' => 'sort=other&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
			<?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
			<?php else: ?>
			<?php echo link_to(__('Other', array(), 'messages'), '@products', array('query_string' => 'sort=other&sort_type=asc')) ?>
			<?php endif; ?>
			</th>
	<?php end_slot(); ?>
	<?php include_slot('sf_admin.current_header') ?>	<?php slot('sf_admin.current_header') ?>
	<th class="sf_admin_foreignkey sf_admin_list_th_collection_id">
					<?php if ('collection_id' == $sort[0]): ?>
			<?php echo link_to(__('Collection', array(), 'messages'), '@products', array('query_string' => 'sort=collection_id&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
			<?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
			<?php else: ?>
			<?php echo link_to(__('Collection', array(), 'messages'), '@products', array('query_string' => 'sort=collection_id&sort_type=asc')) ?>
			<?php endif; ?>
			</th>
	<?php end_slot(); ?>
	<?php include_slot('sf_admin.current_header') ?>	<?php slot('sf_admin.current_header') ?>
	<th class="sf_admin_foreignkey sf_admin_list_th_category_id">
					<?php if ('category_id' == $sort[0]): ?>
			<?php echo link_to(__('Category', array(), 'messages'), '@products', array('query_string' => 'sort=category_id&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
			<?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
			<?php else: ?>
			<?php echo link_to(__('Category', array(), 'messages'), '@products', array('query_string' => 'sort=category_id&sort_type=asc')) ?>
			<?php endif; ?>
			</th>
	<?php end_slot(); ?>
	<?php include_slot('sf_admin.current_header') ?>	<?php slot('sf_admin.current_header') ?>
	<th class="sf_admin_date sf_admin_list_th_created_at">
					<?php if ('created_at' == $sort[0]): ?>
			<?php echo link_to(__('Created at', array(), 'messages'), '@products', array('query_string' => 'sort=created_at&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
			<?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
			<?php else: ?>
			<?php echo link_to(__('Created at', array(), 'messages'), '@products', array('query_string' => 'sort=created_at&sort_type=asc')) ?>
			<?php endif; ?>
			</th>
	<?php end_slot(); ?>
	<?php include_slot('sf_admin.current_header') ?>	<?php slot('sf_admin.current_header') ?>
	<th class="sf_admin_date sf_admin_list_th_updated_at">
					<?php if ('updated_at' == $sort[0]): ?>
			<?php echo link_to(__('Updated at', array(), 'messages'), '@products', array('query_string' => 'sort=updated_at&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
			<?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
			<?php else: ?>
			<?php echo link_to(__('Updated at', array(), 'messages'), '@products', array('query_string' => 'sort=updated_at&sort_type=asc')) ?>
			<?php endif; ?>
			</th>
	<?php end_slot(); ?>
	<?php include_slot('sf_admin.current_header') ?>