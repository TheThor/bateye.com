<?php

/**
 * Products filter form.
 *
 * @package    bateye.ç
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ProductsFormFilter extends BaseProductsFormFilter
{
  public function configure()
  {
	  $this->getWidget('name')->setAttribute('class','tretas2');
//	  foreach ($this->getWidgetSchema()->getFields() as $field)
//	  {
//		  $field->setAttribute('class', '');
//	  }
//	  $fields = $this->getWidgetSchema()->getFields();
//	  $fields['name']->setA
  }
}
