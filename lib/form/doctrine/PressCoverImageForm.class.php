<?php

/**
 * PressCoverImage form.
 *
 * @package    bateye
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class PressCoverImageForm extends BasePressCoverImageForm
{
  public function configure()
  {
      unset($this['created_at'], $this['updated_at']);
      $this->setWidget('cover', new sfWidgetFormInputFileEditable(array(
          'label' => 'Thumbnail image (240x160)',
          'file_src' => '/images/press/cover_image/' . $this->getObject()->getCover(),
          'is_image'  => true,
          'edit_mode' => !$this->isNew(),
          'template'  => '<div>%file%<br />%input%<br />%delete% %delete_label%</div>'
      )));
      $this->setValidator('cover', new sfValidatorFile(array(
          'required'   => false,
          'path'       => sfConfig::get('sf_upload_dir') . '/images/press/cover_image/',
          'mime_types' => 'web_images',
      )));
      $this->setWidget('link', new sfWidgetFormInputFileEditable(array(
          'label' => 'PNG',
          'file_src' => '/images/press/cover_image/' . $this->getObject()->getLink(),
          'is_image'  => true,
          'edit_mode' => !$this->isNew(),
          'template'  => '<div>%file%<br />%input%<br />%delete% %delete_label%</div>'
      )));
      $this->setValidator('link', new sfValidatorFile(array(
          'required'   => false,
          'path'       => sfConfig::get('sf_upload_dir') . '/images/press/cover_image/',
          'mime_types' => 'web_images',
      )));
      $this->validatorSchema['cover_delete'] = new sfValidatorPass();
      $this->validatorSchema['link_delete'] = new sfValidatorPass();
  }
}
