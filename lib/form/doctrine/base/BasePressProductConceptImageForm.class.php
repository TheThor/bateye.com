<?php

/**
 * PressProductConceptImage form base class.
 *
 * @method PressProductConceptImage getObject() Returns the current form's model object
 *
 * @package    bateye
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasePressProductConceptImageForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                       => new sfWidgetFormInputHidden(),
      'image'                    => new sfWidgetFormInputText(),
      'jpg_location'             => new sfWidgetFormInputText(),
      'png_location'             => new sfWidgetFormInputText(),
      'press_product_concept_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('PressProductConcept'), 'add_empty' => false)),
      'product_id'               => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Product'), 'add_empty' => false)),
      'created_at'               => new sfWidgetFormDateTime(),
      'updated_at'               => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                       => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'image'                    => new sfValidatorString(array('max_length' => 255)),
      'jpg_location'             => new sfValidatorString(array('max_length' => 255)),
      'png_location'             => new sfValidatorString(array('max_length' => 255)),
      'press_product_concept_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('PressProductConcept'))),
      'product_id'               => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Product'))),
      'created_at'               => new sfValidatorDateTime(),
      'updated_at'               => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('press_product_concept_image[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'PressProductConceptImage';
  }

}
