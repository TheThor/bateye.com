<?php

/**
 * PressProductConceptImage filter form base class.
 *
 * @package    bateye
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BasePressProductConceptImageFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'image'                    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'jpg_location'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'png_location'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'press_product_concept_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('PressProductConcept'), 'add_empty' => true)),
      'product_id'               => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Product'), 'add_empty' => true)),
      'created_at'               => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'               => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'image'                    => new sfValidatorPass(array('required' => false)),
      'jpg_location'             => new sfValidatorPass(array('required' => false)),
      'png_location'             => new sfValidatorPass(array('required' => false)),
      'press_product_concept_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('PressProductConcept'), 'column' => 'id')),
      'product_id'               => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Product'), 'column' => 'id')),
      'created_at'               => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'               => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('press_product_concept_image_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'PressProductConceptImage';
  }

  public function getFields()
  {
    return array(
      'id'                       => 'Number',
      'image'                    => 'Text',
      'jpg_location'             => 'Text',
      'png_location'             => 'Text',
      'press_product_concept_id' => 'ForeignKey',
      'product_id'               => 'ForeignKey',
      'created_at'               => 'Date',
      'updated_at'               => 'Date',
    );
  }
}
