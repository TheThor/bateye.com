<?php

/**
 * Lovers form.
 *
 * @package    bateye
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class LoversForm extends BaseLoversForm
{
  public function configure()
  {
	  unset($this['created_at'], $this['updated_at']);
	  $this->setWidget('main_img_path', new sfWidgetFormInputFileEditable(array(
		  'label' => 'Product image',
		  'file_src' => '/images/mosaics/'.$this->getObject()->getCollections().'/'.$this->getObject()->getMainImgPath(),
		  'is_image'  => true,
		  'edit_mode' => !$this->isNew(),
		  'template'  => '<div>%file%<br />%input%<br />%delete% %delete_label%</div>'
	  )));

	  $this->setValidator('main_img_path', new sfValidatorFile(array(
		  'required'   => false,
		  'path'       => sfConfig::get('sf_upload_dir') . '/images/mosaics/' . $this->getObject()->getCollections().'/',
		  'mime_types' => 'web_images',
	  )));

	  $this->validatorSchema['main_img_path_delete'] = new sfValidatorPass();
  }
}
