<?php

/**
 * IndexNewProduct form.
 *
 * @package    bateye
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class IndexNewProductForm extends BaseIndexNewProductForm
{
  public function configure()
  {
    unset($this['created_at'], $this['updated_at']);
    $this->setWidget('image', new sfWidgetFormInputFileEditable(array(
        'label' => 'Image',
        'file_src' => '/images/homepage/' . $this->getObject()->getImage(),
        'is_image'  => true,
        'edit_mode' => !$this->isNew(),
        'template'  => '<div>%file%<br />%input%<br />%delete% %delete_label%</div>'
    )));
    $this->setValidator('image', new sfValidatorFile(array(
        'required'   => true,
        'path'       => sfConfig::get('sf_upload_dir') . '/images/homepage/',
        'mime_types' => 'web_images',
    )));

    $this->validatorSchema['image_delete'] = new sfValidatorPass();
  }
}
