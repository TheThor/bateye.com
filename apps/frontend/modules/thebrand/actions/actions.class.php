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
     * @return mixed
     */
    private function showActiveCollections(){
        return Doctrine_Core::getTable('Collection')->showActiveCollections();
    }

    /**
     * @param sfWebRequest $request
     * @return string
     */
    public function executeIndex(sfWebRequest $request)
    {
        $this->collections = $this->showActiveCollections();
        $this->news = Doctrine_Core::getTable('News')->getLatestNews();
        return sfView::SUCCESS;
    }

    public function executeShowconcept(sfWebRequest $request)
    {
        $this->collections = $this->showActiveCollections();
        $this->news = Doctrine_Core::getTable('News')->getLatestNews();
        return sfView::SUCCESS;
    }
    public function executeShowauthor(sfWebRequest $request)
    {
        $this->collections = $this->showActiveCollections();
        $this->news = Doctrine_Core::getTable('News')->getLatestNews();
        return sfView::SUCCESS;
    }
    public function executeShowhistory(sfWebRequest $request)
    {
        $this->collections = $this->showActiveCollections();
        $this->news = Doctrine_Core::getTable('News')->getLatestNews();
        return sfView::SUCCESS;
    }
    public function executeShowmanufacture(sfWebRequest $request)
    {
        $this->collections = $this->showActiveCollections();
        $this->news = Doctrine_Core::getTable('News')->getLatestNews();
        return sfView::SUCCESS;
    }
}
