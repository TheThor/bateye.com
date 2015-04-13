<?php

/**
 * ProductImage form.
 *
 * @package    bateye
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ProductImageForm extends BaseProductImageForm
{
  public function configure()
  {
      $products = new Product();
      /** @var Product $product */
      $product = Doctrine_Core::getTable('Product')->find(1);
      unset($this['created_at'], $this['updated_at']);
      $this->setWidget('location', new sfWidgetFormInputFileEditable(array(
          'label' => 'Slider image',
          'file_src' => '/images/slides/' . $product->getName() . '/' . $this->getObject()->getLocation(),
          'is_image'  => true,
          'edit_mode' => !$this->isNew(),
          'template'  => '<div>%file%<br />%input%<br />%delete% %delete_label%</div>'
      )));
      $this->setValidator('location', new sfValidatorFile(array(
          'required'   => true,
          'path'       => sfConfig::get('sf_upload_dir') . '/images/slides/' . $product->getName() . '/',
          'mime_types' => 'web_images',
      )));

      $this->validatorSchema['location_delete'] = new sfValidatorPass();
  }
}
