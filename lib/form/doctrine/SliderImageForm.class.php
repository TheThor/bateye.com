<?php

/**
 * SliderImage form.
 *
 * @package    bateye
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class SliderImageForm extends BaseSliderImageForm
{
  public function configure()
  {
      unset($this['created_at'], $this['updated_at']);
      $this->setWidget('path', new sfWidgetFormInputFileEditable(array(
          'label' => 'Slider image',
          'file_src' => '/images/Carousel/' . $this->getObject()->getPath(),
          'is_image'  => true,
          'edit_mode' => !$this->isNew(),
          'template'  => '<div>%file%<br />%input%<br />%delete% %delete_label%</div>'
      )));
      $this->setValidator('path', new sfValidatorFile(array(
          'required'   => false,
          'path'       => sfConfig::get('sf_upload_dir') . '/images/Carousel/',
          'mime_types' => 'web_images',
      )));

      $this->validatorSchema['path_delete'] = new sfValidatorPass();
  }
}
