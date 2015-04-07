<?php

/**
 * Product filter form base class.
 *
 * @package    bateye
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseProductFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'name'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'main_img_path'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'main_img_alt'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'context_img'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'context_img_alt' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'small_img'       => new sfWidgetFormFilterInput(),
      'small_img_alt'   => new sfWidgetFormFilterInput(),
      'citation'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'description'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'designer'        => new sfWidgetFormFilterInput(),
      'dimensions'      => new sfWidgetFormFilterInput(),
      'materials'       => new sfWidgetFormFilterInput(),
      'other'           => new sfWidgetFormFilterInput(),
      'collection_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Collection'), 'add_empty' => true)),
      'category_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Category'), 'add_empty' => true)),
      'created_at'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'name'            => new sfValidatorPass(array('required' => false)),
      'main_img_path'   => new sfValidatorPass(array('required' => false)),
      'main_img_alt'    => new sfValidatorPass(array('required' => false)),
      'context_img'     => new sfValidatorPass(array('required' => false)),
      'context_img_alt' => new sfValidatorPass(array('required' => false)),
      'small_img'       => new sfValidatorPass(array('required' => false)),
      'small_img_alt'   => new sfValidatorPass(array('required' => false)),
      'citation'        => new sfValidatorPass(array('required' => false)),
      'description'     => new sfValidatorPass(array('required' => false)),
      'designer'        => new sfValidatorPass(array('required' => false)),
      'dimensions'      => new sfValidatorPass(array('required' => false)),
      'materials'       => new sfValidatorPass(array('required' => false)),
      'other'           => new sfValidatorPass(array('required' => false)),
      'collection_id'   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Collection'), 'column' => 'id')),
      'category_id'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Category'), 'column' => 'id')),
      'created_at'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('product_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Product';
  }

  public function getFields()
  {
    return array(
      'id'              => 'Number',
      'name'            => 'Text',
      'main_img_path'   => 'Text',
      'main_img_alt'    => 'Text',
      'context_img'     => 'Text',
      'context_img_alt' => 'Text',
      'small_img'       => 'Text',
      'small_img_alt'   => 'Text',
      'citation'        => 'Text',
      'description'     => 'Text',
      'designer'        => 'Text',
      'dimensions'      => 'Text',
      'materials'       => 'Text',
      'other'           => 'Text',
      'collection_id'   => 'ForeignKey',
      'category_id'     => 'ForeignKey',
      'created_at'      => 'Date',
      'updated_at'      => 'Date',
    );
  }
}
