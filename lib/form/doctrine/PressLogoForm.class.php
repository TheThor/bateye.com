<?php

/**
 * PressLogo form.
 *
 * @package    bateye
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class PressLogoForm extends BasePressLogoForm
{
  public function configure()
  {
      unset($this['created_at'], $this['updated_at']);
      $this->setWidget('image', new sfWidgetFormInputFileEditable(array(
          'label' => 'Thumbnail image (240x160)',
          'file_src' => '/images/press/logo/' . $this->getObject()->getImage(),
          'is_image'  => true,
          'edit_mode' => !$this->isNew(),
          'template'  => '<div>%file%<br />%input%<br />%delete% %delete_label%</div>'
      )));
      $this->setValidator('image', new sfValidatorFile(array(
          'required'   => false,
          'path'       => sfConfig::get('sf_upload_dir') . '/images/press/logo/',
          'mime_types' => 'web_images',
      )));
      $this->setWidget('jpg_location', new sfWidgetFormInputFileEditable(array(
          'label' => 'JPEG image',
          'file_src' => '/images/press/logo/' . $this->getObject()->getJpgLocation(),
          'is_image'  => true,
          'edit_mode' => !$this->isNew(),
          'template'  => '<div>%file%<br />%input%<br />%delete% %delete_label%</div>'
      )));
      $this->setValidator('jpg_location', new sfValidatorFile(array(
          'required'   => false,
          'path'       => sfConfig::get('sf_upload_dir') . '/images/press/logo/',
          'mime_types' => 'web_images',
      )));
      $this->setWidget('png_location', new sfWidgetFormInputFileEditable(array(
          'label' => 'PNG image',
          'file_src' => '/images/press/logo/' . $this->getObject()->getPngLocation(),
          'is_image'  => true,
          'edit_mode' => !$this->isNew(),
          'template'  => '<div>%file%<br />%input%<br />%delete% %delete_label%</div>'
      )));
      $this->setValidator('png_location', new sfValidatorFile(array(
          'required'   => false,
          'path'       => sfConfig::get('sf_upload_dir') . '/images/press/logo/',
          'mime_types' => 'web_images',
      )));
      $this->validatorSchema['image_delete'] = new sfValidatorPass();
      $this->validatorSchema['jpg_location_delete'] = new sfValidatorPass();
      $this->validatorSchema['png_location_delete'] = new sfValidatorPass();
  }
}
