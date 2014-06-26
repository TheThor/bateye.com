<?php

/**
 * Lovers form base class.
 *
 * @method Lovers getObject() Returns the current form's model object
 *
 * @package    bateye
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseLoversForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'            => new sfWidgetFormInputHidden(),
      'name'          => new sfWidgetFormInputText(),
      'main_img_path' => new sfWidgetFormInputText(),
      'main_img_alt'  => new sfWidgetFormInputText(),
      'citation'      => new sfWidgetFormInputText(),
      'description'   => new sfWidgetFormTextarea(),
      'designer'      => new sfWidgetFormInputText(),
      'width'         => new sfWidgetFormInputText(),
      'height'        => new sfWidgetFormInputText(),
      'diameter'      => new sfWidgetFormInputText(),
      'depth'         => new sfWidgetFormInputText(),
      'materials'     => new sfWidgetFormInputText(),
      'other'         => new sfWidgetFormInputText(),
      'collection_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Collections'), 'add_empty' => false)),
      'category_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Category'), 'add_empty' => false)),
      'created_at'    => new sfWidgetFormDateTime(),
      'updated_at'    => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'            => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'name'          => new sfValidatorString(array('max_length' => 255)),
      'main_img_path' => new sfValidatorString(array('max_length' => 255)),
      'main_img_alt'  => new sfValidatorString(array('max_length' => 255)),
      'citation'      => new sfValidatorString(array('max_length' => 255)),
      'description'   => new sfValidatorString(array('max_length' => 1200)),
      'designer'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'width'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'height'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'diameter'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'depth'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'materials'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'other'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'collection_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Collections'))),
      'category_id'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Category'))),
      'created_at'    => new sfValidatorDateTime(),
      'updated_at'    => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('lovers[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Lovers';
  }

}
