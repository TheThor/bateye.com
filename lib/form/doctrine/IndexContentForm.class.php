<?php

/**
 * IndexContent form.
 *
 * @package    bateye
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class IndexContentForm extends BaseIndexContentForm
{
  public function configure()
  {
      unset($this['created_at'], $this['updated_at']);
      $this->setWidget('thebrand', new sfWidgetFormTextarea());
      $this->setWidget('thedesigner', new sfWidgetFormTextarea());
      $this->setValidator('thebrand', new sfValidatorString());
      $this->setValidator('thedesigner', new sfValidatorString());
  }
}


