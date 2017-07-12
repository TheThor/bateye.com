<?php

/**
 * home actions.
 *
 * @package    bateye
 * @subpackage home
 * @author     Pedro
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class homeActions extends sfActions
{
    /**
     * Executes index action
     * @param sfRequest|sfWebRequest $request A request object
     * @return string
     */
    public function executeIndex(sfWebRequest $request)
    {
        //$this->getResponse()->addCacheControlHttpHeader('max_age=60');
        //$this->getResponse()->setHttpHeader('Expires', $this->getResponse()->getDate($timestamp));
        $this->collections = Doctrine_Core::getTable('Collection')->showActiveCollections();
        $this->news = Doctrine_Core::getTable('News')->getLatestNews();
        $this->sliderCount = $this->countSlider();
        $this->sliders = Doctrine_Core::getTable('SliderImage')->getAllSliders();
        $this->getBrand();
        $this->latestProduct = Doctrine_Core::getTable('IndexNewProduct')->getLatestProduct();
        $this->featuredProducts = Doctrine_Core::getTable('Product')->getFeaturedProductsWithImages();
        return sfView::SUCCESS;
    }

    public function countSlider()
    {
        return Doctrine::getTable('SliderImage')->count();
    }

    //TODO: move this to IndexContent table class
    public function getBrand()
    {
        $this->brand = Doctrine::getTable('IndexContent')
            ->createQuery('b')
            ->execute();
    }
}
