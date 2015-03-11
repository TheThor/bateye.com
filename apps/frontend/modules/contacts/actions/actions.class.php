<?php

/**
 * contacts actions.
 *
 * @package    bateye
 * @subpackage contacts
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class contactsActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
      $this->collections = Doctrine_Core::getTable('Collection')->showActiveCollections();
      $this->forward404Unless($this->collections);
      return sfView::SUCCESS;
  }

    public function executeSendmail(sfWebRequest $request){
        ProjectConfiguration::registerPHPmailer();
        return sfView::SUCCESS;
    }
}
