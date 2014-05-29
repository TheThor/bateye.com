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
    return '%%name%% - %%designer%% - %%collection_id%% - %%created_at%% - %%updated_at%%';
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
    return array(  0 => 'name',  1 => 'description',  2 => 'citation',  3 => 'designer',  4 => 'collection_id',  5 => 'created_at',  6 => 'updated_at',);
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
    return array(  0 => 'name',  1 => 'designer',  2 => 'collection_id',  3 => 'created_at',  4 => 'updated_at',);
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
      'display' => array(  'is_link' => false,  'is_real' => false,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',  0 => 'name',),
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
  
  public function getListLayout(){}

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
