<?php

/**
 * Collection form.
 *
 * @package    bateye
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class CollectionForm extends BaseCollectionForm
{
  public function configure()
  {
      unset($this['created_at'], $this['updated_at']);
      $this->setWidget('name_image', new sfWidgetFormInputFileEditable(array(
          'label' => 'Name image (240px largura)',
          'file_src' => '/images/collection/' . $this->getObject()->getNameImage(),
          'is_image'  => true,
          'edit_mode' => !$this->isNew(),
          'template'  => '<div>%file%<br />%input%<br />%delete% %delete_label%</div>'
      )));
      //OR
      //$this->widgetSchema['main_img_path'] = new sfWidgetFormInputFile(array(
      // 'label' => 'Product Image'
      //));
      $this->setValidator('name_image', new sfValidatorFile(array(
          'required'   => false,
          'path'       => sfConfig::get('sf_upload_dir') . '/images/collection/' . $this->getObject()->getNameImage() .'/',
          'mime_types' => 'web_images',
      )));
      $this->validatorSchema['name_image_delete'] = new sfValidatorPass();
//		OR
//		$this->validatorSchema['logo'] = new sfValidatorFile(array(
//			'required'   => false,
//			'path'       => sfConfig::get('sf_upload_dir').'/jobs',
//			'mime_types' => 'web_images',
//		));

      $this->setWidget('backgroud_image', new sfWidgetFormInputFileEditable(array(
          'label' => 'Collection image',
          'file_src' => '/images/collection/' . $this->getObject()->getBackgroudImage(),
          'is_image'  => true,
          'edit_mode' => !$this->isNew(),
          'template'  => '<div>%file%<br />%input%<br />%delete% %delete_label%</div>'
      )));
      //OR
      //$this->widgetSchema['main_img_path'] = new sfWidgetFormInputFile(array(
      // 'label' => 'Product Image'
      //));
      $this->setValidator('backgroud_image', new sfValidatorFile(array(
          'required'   => false,
          'path'       => sfConfig::get('sf_upload_dir') . '/images/collection/' . $this->getObject()->getBackgroudImage() .'/',
          'mime_types' => 'web_images',
      )));
//		OR
//		$this->validatorSchema['logo'] = new sfValidatorFile(array(
//			'required'   => false,
//			'path'       => sfConfig::get('sf_upload_dir').'/jobs',
//			'mime_types' => 'web_images',
//		));
      $this->validatorSchema['background_image_delete'] = new sfValidatorPass();
  }
}
