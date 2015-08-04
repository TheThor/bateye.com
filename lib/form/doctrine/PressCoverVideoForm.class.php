<?php

/**
 * PressCoverVideo form.
 *
 * @package    bateye
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class PressCoverVideoForm extends BasePressCoverVideoForm
{
  public function configure()
  {
      unset($this['created_at'], $this['updated_at']);
  }
}
