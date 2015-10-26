<?php

/**
 * PressProductConcept form.
 *
 * @package    bateye
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class PressProductConceptForm extends BasePressProductConceptForm
{
  public function configure()
  {
      unset($this['created_at'], $this['updated_at']);
      $this->setWidget('image', new sfWidgetFormInputFileEditable(array(
          'label' => 'Thumbnail image (240x160)',
          'file_src' => '/images/press/product_concept/' . $this->getObject()->getImage(),
          'is_image'  => true,
          'edit_mode' => !$this->isNew(),
          'template'  => '<div>%file%<br />%input%<br />%delete% %delete_label%</div>'
      )));
      $this->setValidator('image', new sfValidatorFile(array(
          'required'   => true,
          'path'       => sfConfig::get('sf_upload_dir') . '/images/press/product_concept/',
          'mime_types' => 'web_images',
      )));
      $this->setWidget('package_location_location', new sfWidgetFormInputFileEditable(array(
          'label' => 'Zip File',
          'file_src' => '/press/product_concept/' . $this->getObject()->getPackageLocation(),
          'is_image'  => false,
          'edit_mode' => !$this->isNew(),
          'template'  => '<div>%file%<br />%input%<br />%delete% %delete_label%</div>'
      )));
      $this->setValidator('package_location', new sfValidatorFile(array(
          'required'   => false,
          'path'       => sfConfig::get('sf_upload_dir') . '/press/product_concept/',
          'mime_categories' =>
              array(
                  'compressed' => array(
                      'application/zip',
                      'application/x-rar-compressed',
                  ),
              ),
          'mime_types' => 'compressed',
      )));
      $this->validatorSchema['image_delete'] = new sfValidatorPass();
      $this->validatorSchema['package_location_delete'] = new sfValidatorPass();
  }
}
