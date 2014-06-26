<?php

/**
 * News form.
 *
 * @package    bateye
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class NewsForm extends BaseNewsForm
{
  public function configure()
  {
	  unset($this['created_at'], $this['updated_at']);
	  $this->setWidget('news_image', new sfWidgetFormInputFileEditable(array(
		  'label' => 'Image',
		  'file_src' => '/images/whatsnew/'.$this->getObject()->getNewsImage(),
		  'is_image'  => true,
		  'edit_mode' => !$this->isNew(),
		  'template'  => '<div>%file%<br />%input%<br />%delete% %delete_label%</div>'
	  )));

	  $this->setValidator('news_image', new sfValidatorFile(array(
		  'required'   => false,
		  'path'       => sfConfig::get('sf_upload_dir') . '/images/whatsnew/',
		  'mime_types' => 'web_images',
	  )));

	  $this->validatorSchema['news_image_delete'] = new sfValidatorPass();
  }
}
