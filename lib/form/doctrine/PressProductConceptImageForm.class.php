<?php

/**
 * PressProductConceptImage form.
 *
 * @package    bateye
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class PressProductConceptImageForm extends BasePressProductConceptImageForm
{
  public function configure()
  {
      unset($this['created_at'], $this['updated_at']);
      $this->setWidget('image', new sfWidgetFormInputFileEditable(array(
          'label' => 'Thumbnail image (240x160)',
          'file_src' => '/images/press/product_concept_images/' . $this->getObject()->getImage(),
          'is_image'  => true,
          'edit_mode' => !$this->isNew(),
          'template'  => '<div>%file%<br />%input%<br />%delete% %delete_label%</div>'
      )));
      $this->setValidator('image', new sfValidatorFile(array(
          'required'   => false,
          'path'       => sfConfig::get('sf_upload_dir') . '/images/press/product_concept_images/',
          'mime_types' => 'web_images',
      )));
      $this->setWidget('jpg_location', new sfWidgetFormInputFileEditable(array(
          'label' => 'JPEG image',
          'file_src' => '/images/press/product_concept_images/' . $this->getObject()->getJpgLocation(),
          'is_image'  => true,
          'edit_mode' => !$this->isNew(),
          'template'  => '<div>%file%<br />%input%<br />%delete% %delete_label%</div>'
      )));
      $this->setValidator('jpg_location', new sfValidatorFile(array(
          'required'   => false,
          'path'       => sfConfig::get('sf_upload_dir') . '/images/press/product_concept_images/',
          'mime_types' => 'web_images',
      )));
      $this->setWidget('png_location', new sfWidgetFormInputFileEditable(array(
          'label' => 'PNG image',
          'file_src' => '/images/press/product_concept_images/' . $this->getObject()->getPngLocation(),
          'is_image'  => true,
          'edit_mode' => !$this->isNew(),
          'template'  => '<div>%file%<br />%input%<br />%delete% %delete_label%</div>'
      )));
      $this->setValidator('png_location', new sfValidatorFile(array(
          'required'   => false,
          'path'       => sfConfig::get('sf_upload_dir') . '/images/press/product_concept_images/',
          'mime_types' => 'web_images',
      )));
//      $this->setWidget('package_location', new sfWidgetFormInputFileEditable(array(
//          'label' => 'Zip File',
//          'file_src' => '/images/press/main_area/' . $this->getObject()->getPackageLocation(),
//          'is_image'  => true,
//          'edit_mode' => !$this->isNew(),
//          'template'  => '<div>%file%<br />%input%<br />%delete% %delete_label%</div>'
//      )));
//      $this->setValidator('package_location', new sfValidatorFile(array(
//          'required'   => false,
//          'path'       => sfConfig::get('sf_upload_dir') . '/images/press/main_area/',
//          'mime_categories' =>
//              array(
//                  'compressed' => array(
//                      'application/zip',
//                      'application/x-rar-compressed',
//                  ),
//              ),
//          'mime_types' => 'compressed',
//      )));
  }
}
