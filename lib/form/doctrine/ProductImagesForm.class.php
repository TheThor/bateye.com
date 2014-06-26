<?php

/**
 * ProductImages form.
 *
 * @package    bateye
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ProductImagesForm extends BaseProductImagesForm
{
  public function configure()
  {
	  $products = new Products();
	  $product = $products->getById($this->getObject()->getProductId());
	  unset($this['created_at'], $this['updated_at']);
	  $this->setWidget('location', new sfWidgetFormInputFileEditable(array(
		  'label' => 'Slider image',
		  'file_src' => '/images/slides/' . $product->{0} . '/' . $this->getObject()->getLocation(),
		  'is_image'  => true,
		  'edit_mode' => !$this->isNew(),
		  'template'  => '<div>%file%<br />%input%<br />%delete% %delete_label%</div>'
	  )));
	  $this->setValidator('location', new sfValidatorFile(array(
		  'required'   => false,
		  'path'       => sfConfig::get('sf_upload_dir') . '/images/slides/' . $product->{0} . '/',
		  'mime_types' => 'web_images',
	  )));

	  $this->validatorSchema['location'] = new sfValidatorPass();
  }
}
