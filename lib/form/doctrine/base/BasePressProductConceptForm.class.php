<?php

/**
 * PressProductConcept form base class.
 *
 * @method PressProductConcept getObject() Returns the current form's model object
 *
 * @package    bateye
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasePressProductConceptForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'               => new sfWidgetFormInputHidden(),
      'package_location' => new sfWidgetFormInputText(),
      'image'            => new sfWidgetFormInputText(),
      'product_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Product'), 'add_empty' => false)),
      'created_at'       => new sfWidgetFormDateTime(),
      'updated_at'       => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'               => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'package_location' => new sfValidatorString(array('max_length' => 255)),
      'image'            => new sfValidatorString(array('max_length' => 255)),
      'product_id'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Product'))),
      'created_at'       => new sfValidatorDateTime(),
      'updated_at'       => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('press_product_concept[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'PressProductConcept';
  }

}
