<?php

/**
 * press actions.
 *
 * @package    bateye
 * @subpackage press
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class pressActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
  }

    public function executeThebrand()
    {
        $this->showActiveCollections();
    }

    private function showActiveCategories()
    {
        $this->categories = Doctrine_Core::getTable('Category')->getAllCategories();
    }

    private function showActiveCollections()
    {
        $this->collections = Doctrine_Core::getTable('Collection')->showActiveCollections();
    }
}
