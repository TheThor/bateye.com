<?php

/**
 * PressMainArea form.
 *
 * @package    bateye
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class PressMainAreaForm extends BasePressMainAreaForm
{
  public function configure()
  {
      unset($this['created_at'], $this['updated_at']);
      $this->setWidget('cover', new sfWidgetFormInputFileEditable(array(
          'label' => 'Thumbnail image (240x160)',
          'file_src' => '/images/press/main_area/' . $this->getObject()->getCover(),
          'is_image'  => true,
          'edit_mode' => !$this->isNew(),
          'template'  => '<div>%file%<br />%input%<br />%delete% %delete_label%</div>'
      )));
      $this->setValidator('cover', new sfValidatorFile(array(
          'required'   => false,
          'path'       => sfConfig::get('sf_upload_dir') . '/images/press/main_area/',
          'mime_types' => 'web_images',
      )));
      $this->setWidget('catalogue', new sfWidgetFormInputFileEditable(array(
          'label' => 'PDF File',
          'file_src' => '/images/press/main_area/' . $this->getObject()->getCatalogue(),
          'is_image'  => true,
          'edit_mode' => !$this->isNew(),
          'template'  => '<div>%file%<br />%input%<br />%delete% %delete_label%</div>'
      )));
      $this->setValidator('catalogue', new sfValidatorFile(array(
          'required'   => false,
          'path'       => sfConfig::get('sf_upload_dir') . '/images/press/main_area/',
          'mime_categories' => array('pdf' => array('application/pdf', 'application/x-pdf')),
          'mime_types' => 'pdf',
      )));
  }
}
