<?php

/**
 * PressProductImage form base class.
 *
 * @method PressProductImage getObject() Returns the current form's model object
 *
 * @package    bateye
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasePressProductImageForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'            => new sfWidgetFormInputHidden(),
      'high_res_img'  => new sfWidgetFormInputText(),
      'low_res_img'   => new sfWidgetFormInputText(),
      'collection_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('PressCollection'), 'add_empty' => false)),
      'product_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Product'), 'add_empty' => false)),
      'created_at'    => new sfWidgetFormDateTime(),
      'updated_at'    => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'            => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'high_res_img'  => new sfValidatorString(array('max_length' => 255)),
      'low_res_img'   => new sfValidatorString(array('max_length' => 255)),
      'collection_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('PressCollection'))),
      'product_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Product'))),
      'created_at'    => new sfValidatorDateTime(),
      'updated_at'    => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('press_product_image[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'PressProductImage';
  }

}
