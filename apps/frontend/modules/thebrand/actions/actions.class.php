<?php

/**
 * thebrand actions.
 *
 * @package    bateye
 * @subpackage thebrand
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class thebrandActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
    private function showActiveCollection(){
        return Doctrine_Core::getTable('Collections')->showActiveCollections();
    }

    public function executeIndex(sfWebRequest $request)
    {
        $this->collections = Doctrine_Core::getTable('Collections')->showActiveCollections();
        $this->news = Doctrine_Core::getTable('News')->getLatestNews();
        return sfView::SUCCESS;
    }

    public function executeShowconcept(sfWebRequest $request)
    {
        $this->collections = Doctrine_Core::getTable('Collections')->showActiveCollections();
        $this->news = Doctrine_Core::getTable('News')->getLatestNews();
        return sfView::SUCCESS;
    }
    public function executeShowauthor(sfWebRequest $request)
    {
        $this->collections = Doctrine_Core::getTable('Collections')->showActiveCollections();
        $this->news = Doctrine_Core::getTable('News')->getLatestNews();
        return sfView::SUCCESS;
    }
    public function executeShowhistory(sfWebRequest $request)
    {
        $this->collections = Doctrine_Core::getTable('Collections')->showActiveCollections();
        $this->news = Doctrine_Core::getTable('News')->getLatestNews();
        return sfView::SUCCESS;
    }
    public function executeShowmanufacture(sfWebRequest $request)
    {
        $this->collections = Doctrine_Core::getTable('Collections')->showActiveCollections();
        $this->news = Doctrine_Core::getTable('News')->getLatestNews();
        return sfView::SUCCESS;
    }
}
