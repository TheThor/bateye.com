<?php

/**
 * Product form.
 *
 * @package    bateye
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ProductForm extends BaseProductForm
{
  public function configure()
  {
      unset($this['created_at'], $this['updated_at']);
      $this->setWidget('main_img_path', new sfWidgetFormInputFileEditable(array(
          'label' => 'Product image',
          'file_src' => '/images/products/'.$this->getObject()->getMainImgPath(),
          'is_image'  => true,
          'edit_mode' => !$this->isNew(),
          'template'  => '<div>%file%<br />%input%<br />%delete% %delete_label%</div>'
      )));
      //OR
      //$this->widgetSchema['main_img_path'] = new sfWidgetFormInputFile(array(
      // 'label' => 'Product Image'
      //));
      $this->setValidator('main_img_path', new sfValidatorFile(array(
          'required'   => false,
          'path'       => sfConfig::get('sf_upload_dir') . '/images/products/',
          'mime_types' => 'web_images',
      )));
//		OR
//		$this->validatorSchema['logo'] = new sfValidatorFile(array(
//			'required'   => false,
//			'path'       => sfConfig::get('sf_upload_dir').'/jobs',
//			'mime_types' => 'web_images',
//		));
      $this->validatorSchema['main_img_path_delete'] = new sfValidatorPass();

      $this->setWidget('context_img', new sfWidgetFormInputFileEditable(array(
          'label' => 'Context image',
          'file_src' => '/images/products/'.$this->getObject()->getContextImg(),
          'is_image'  => true,
          'edit_mode' => !$this->isNew(),
          'template'  => '<div>%file%<br />%input%<br />%delete% %delete_label%</div>'
      )));
      //OR
      //$this->widgetSchema['main_img_path'] = new sfWidgetFormInputFile(array(
      // 'label' => 'Product Image'
      //));
      $this->setValidator('context_img', new sfValidatorFile(array(
          'required'   => false,
          'path'       => sfConfig::get('sf_upload_dir') . '/images/products/',
          'mime_types' => 'web_images',
      )));
//		OR
//		$this->validatorSchema['logo'] = new sfValidatorFile(array(
//			'required'   => false,
//			'path'       => sfConfig::get('sf_upload_dir').'/jobs',
//			'mime_types' => 'web_images',
//		));
      $this->validatorSchema['context_img_delete'] = new sfValidatorPass();

      $this->setWidget('small_img', new sfWidgetFormInputFileEditable(array(
          'label' => 'Small image',
          'file_src' => '/images/products/'.$this->getObject()->getSmallImg(),
          'is_image'  => true,
          'edit_mode' => !$this->isNew(),
          'template'  => '<div>%file%<br />%input%<br />%delete% %delete_label%</div>'
      )));
      //OR
      //$this->widgetSchema['main_img_path'] = new sfWidgetFormInputFile(array(
      // 'label' => 'Product Image'
      //));
      $this->setValidator('small_img', new sfValidatorFile(array(
          'required'   => false,
          'path'       => sfConfig::get('sf_upload_dir') . '/images/products/',
          'mime_types' => 'web_images',
      )));
//		OR
//		$this->validatorSchema['logo'] = new sfValidatorFile(array(
//			'required'   => false,
//			'path'       => sfConfig::get('sf_upload_dir').'/jobs',
//			'mime_types' => 'web_images',
//		));
      $this->validatorSchema['small_img_delete'] = new sfValidatorPass();
  }
}
