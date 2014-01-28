<?php

/**
 * home actions.
 *
 * @package    bateye
 * @subpackage home
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class homeActions extends sfActions
{
    /**
     * Executes index action
     *
     * @param sfRequest $request A request object
     */
    public function executeIndex(sfWebRequest $request)
    {
        $this->collections = Doctrine_Core::getTable('Collections')->showActiveCollections();
        $this->news = Doctrine_Core::getTable('News')->getLatestNews();
        $this->sliderCount = $this->countSlider();
        $this->sliders = Doctrine_Core::getTable('SliderImages')->getAllSliders();
        $this->brand = Doctrine::getTable('IndexContent')
            ->createQuery('b')
            ->execute();
        return sfView::SUCCESS;
//    $this->designer = Doctrine::getTable('IndexContent')->getThedesigner();
    }

    public function countSlider()
    {
        return Doctrine::getTable('SliderImages')->count();
    }
}
