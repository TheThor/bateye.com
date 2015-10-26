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
     * @return string
     */
    public function executeIndex()
    {
        $this->form = new sfGuardFormSignin();
        $this->showAllPressMagazines();
        return sfView::SUCCESS;
    }

    public function executeThebrand()
    {
        $this->logos = Doctrine_Core::getTable('PressLogo')->findAll();
        /** @var PressProductConceptTable $instance */
        $instance = PressProductConceptTable::getInstance();
        $this->concepts = $instance->getAllPressProductConceptWithNames();
        $this->showActiveCollections();
    }

    /**
     * @param sfWebRequest $request
     * @return string
     * @throws sfError404Exception
     */
    public function executeShowcollection(sfWebRequest $request)
    {
        $this->showActiveCollections();
        $this->forward404Unless($this->collections);
        $this->products = Doctrine_Core::getTable('PressCollection')
            ->getProductsByCollection($request->getParameter('id'));
        $this->collection = Doctrine_Core::getTable('Collection')
            ->findOneBy('id', $request->getParameter('id'));
        $this->forward404Unless($this->products);
        return sfView::SUCCESS;
    }

    /**
     * @param sfWebRequest $request
     * @return string
     * @throws sfError404Exception
     */
    public function executeCatalogues(sfWebRequest $request)
    {
        $this->showActiveCollections();
        $this->forward404Unless($this->collections);
        $this->catalogues = Doctrine_Core::getTable('PressCatalogue')
            ->findAll();
        $this->forward404Unless($this->catalogues);
        return sfView::SUCCESS;
    }

    /**
     * @param sfWebRequest $request
     * @return string
     * @throws sfError404Exception
     */
    public function executeCoverimages(sfWebRequest $request)
    {
        $this->showActiveCollections();
        $this->forward404Unless($this->collections);
        $this->coverImages = Doctrine_Core::getTable('PressCoverImage')
            ->findAll();
        $this->forward404Unless($this->coverImages);
        return sfView::SUCCESS;
    }

    /**
     * @param sfWebRequest $request
     * @return string
     * @throws sfError404Exception
     */
    public function executePressreleases(sfWebRequest $request)
    {
        $this->showActiveCollections();
        $this->forward404Unless($this->collections);
        $this->pressReleases = Doctrine_Core::getTable('PressRelease')
            ->findAll();
        $this->forward404Unless($this->pressReleases);
        return sfView::SUCCESS;
    }

    /**
     * @param sfWebRequest $request
     * @return string
     * @throws sfError404Exception
     */
    public function executeCovervideos(sfWebRequest $request)
    {
        $this->showActiveCollections();
        $this->forward404Unless($this->collections);
        $this->coverVideos = Doctrine_Core::getTable('PressCoverVideo')
            ->findAll();
        $this->forward404Unless($this->coverVideos);
        return sfView::SUCCESS;
    }

    public function executeShowproduct(sfWebRequest $request)
    {
        $this->showActiveCollections();
        $this->forward404Unless($this->collections);
        $productId = $request->getParameter('id');
        $this->product = Doctrine::getTable('Product')->findOneBy('id', $productId);
        $this->images = Doctrine::getTable('PressProductImage')
            ->getProductImagesByProductId($productId);
        $this->forward404Unless($this->images);
        return sfView::SUCCESS;
    }

    private function showActiveCategories()
    {
        $this->categories = Doctrine_Core::getTable('Category')->getAllCategories();
    }

    private function showActiveCollections()
    {
        $this->collections = Doctrine_Core::getTable('Collection')->showActiveCollections();
    }

    private function showAllPressMagazines()
    {
        $this->pressMagazines = Doctrine_Core::getTable('PressMainArea')->getAllMagazinesWithInfo();
        $this->pressYears = Doctrine_Core::getTable('PressMainArea')->getMagazinesYears();
    }
}
