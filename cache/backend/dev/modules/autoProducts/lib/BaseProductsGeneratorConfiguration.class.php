<?php

/**
* products module configuration.
*
* @package    ##PROJECT_NAME##
* @subpackage products
* @author     ##AUTHOR_NAME##
* @version    SVN: $Id: configuration.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
*/
abstract class BaseProductsGeneratorConfiguration extends sfModelGeneratorConfiguration
{
public function getActionsDefault()
{
return array();
}

public function getFormActions()
{
return array(  '_delete' => NULL,  '_list' => NULL,  '_save' => NULL,  '_save_and_add' => NULL,);
}

public function getNewActions()
{
return array();
}

public function getEditActions()
{
return array();
}

public function getListObjectActions()
{
return array(  '_edit' => NULL,  '_delete' => NULL,);
}

public function getListActions()
{
return array(  '_new' => NULL,);
}

public function getListBatchActions()
{
return array(  '_delete' => NULL,);
}

public function getListParams()
{
return '%%id%% - %%name%% - %%main_img_path%% - %%main_img_alt%% - %%citation%% - %%description%% - %%designer%% - %%width%% - %%height%% - %%diameter%% - %%depth%% - %%materials%% - %%other%% - %%collection_id%% - %%category_id%% - %%created_at%% - %%updated_at%%';
}

public function getListLayout()
{
return 'tabular';
}

public function getListTitle()
{
return 'Products List';
}

public function getEditTitle()
{
return 'Edit Products';
}

public function getNewTitle()
{
return 'New Products';
}

public function getFilterDisplay()
{
return array();
}

public function getFormDisplay()
{
return array();
}

public function getEditDisplay()
{
return array();
}

public function getNewDisplay()
{
return array();
}

public function getListDisplay()
{
	return array(  0 => 'id',  1 => 'name',  2 => 'main_img_path',  3 => 'main_img_alt',  4 => 'citation',  5 => 'description',  6 => 'designer',  7 => 'width',  8 => 'height',  9 => 'diameter',  10 => 'depth',  11 => 'materials',  12 => 'other',  13 => 'collection_id',  14 => 'category_id',  15 => 'created_at',  16 => 'updated_at',);
}

public function getFieldsDefault()
{
return array(
	'id' => array(  'is_link' => true,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
	'name' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
	'main_img_path' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
	'main_img_alt' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
	'citation' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
	'description' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
	'designer' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
	'width' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
	'height' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
	'diameter' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
	'depth' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
	'materials' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
	'other' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
	'collection_id' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',),
	'category_id' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',),
	'created_at' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',),
	'updated_at' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',),
	'slug' => array(  'is_link' => false,  'is_real' => false,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  'attributes' =>   array(    'class' => 'foo',  ),),
);
}

	public function getFieldsList()
	{
	return array(
			'id' => array(),
			'name' => array(),
			'main_img_path' => array(),
			'main_img_alt' => array(),
			'citation' => array(),
			'description' => array(),
			'designer' => array(),
			'width' => array(),
			'height' => array(),
			'diameter' => array(),
			'depth' => array(),
			'materials' => array(),
			'other' => array(),
			'collection_id' => array(),
			'category_id' => array(),
			'created_at' => array(),
			'updated_at' => array(),
		);
	}

	public function getFieldsFilter()
	{
	return array(
			'id' => array(),
			'name' => array(),
			'main_img_path' => array(),
			'main_img_alt' => array(),
			'citation' => array(),
			'description' => array(),
			'designer' => array(),
			'width' => array(),
			'height' => array(),
			'diameter' => array(),
			'depth' => array(),
			'materials' => array(),
			'other' => array(),
			'collection_id' => array(),
			'category_id' => array(),
			'created_at' => array(),
			'updated_at' => array(),
		);
	}

	public function getFieldsForm()
	{
	return array(
			'id' => array(),
			'name' => array(),
			'main_img_path' => array(),
			'main_img_alt' => array(),
			'citation' => array(),
			'description' => array(),
			'designer' => array(),
			'width' => array(),
			'height' => array(),
			'diameter' => array(),
			'depth' => array(),
			'materials' => array(),
			'other' => array(),
			'collection_id' => array(),
			'category_id' => array(),
			'created_at' => array(),
			'updated_at' => array(),
		);
	}

	public function getFieldsEdit()
	{
	return array(
			'id' => array(),
			'name' => array(),
			'main_img_path' => array(),
			'main_img_alt' => array(),
			'citation' => array(),
			'description' => array(),
			'designer' => array(),
			'width' => array(),
			'height' => array(),
			'diameter' => array(),
			'depth' => array(),
			'materials' => array(),
			'other' => array(),
			'collection_id' => array(),
			'category_id' => array(),
			'created_at' => array(),
			'updated_at' => array(),
		);
	}

	public function getFieldsNew()
	{
	return array(
			'id' => array(),
			'name' => array(),
			'main_img_path' => array(),
			'main_img_alt' => array(),
			'citation' => array(),
			'description' => array(),
			'designer' => array(),
			'width' => array(),
			'height' => array(),
			'diameter' => array(),
			'depth' => array(),
			'materials' => array(),
			'other' => array(),
			'collection_id' => array(),
			'category_id' => array(),
			'created_at' => array(),
			'updated_at' => array(),
		);
	}


/**
* Gets the form class name.
*
* @return string The form class name
*/
public function getFormClass()
{
return 'ProductsForm';
}

public function hasFilterForm()
{
return true;
}

/**
* Gets the filter form class name
*
* @return string The filter form class name associated with this generator
*/
public function getFilterFormClass()
{
return 'ProductsFormFilter';
}

public function getPagerClass()
{
return 'sfDoctrinePager';
}

public function getPagerMaxPerPage()
{
return 20;
}

public function getDefaultSort()
{
	return array(null, null);
}

public function getTableMethod()
{
return '';
}

public function getTableCountMethod()
{
return '';
}
}
