<?php
/**
 * collection actions.
 *
 * @package    bateye
 * @subpackage collection
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class collectionActions extends sfActions
{
    /**
     * Executes index action
     * @param sfRequest|sfWebRequest $request A request object
     * @return string
     */
    public function executeIndex(sfWebRequest $request)
    {
        $this->showActiveCollections();
        return sfView::SUCCESS;
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
        $this->products = Doctrine_Core::getTable('Product')
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
    public function executeShowproduct(sfWebRequest $request)
    {
        $this->showActiveCollections();
        $this->product = Doctrine::getTable('Product')->find($request->getParameter('id'));
        $this->images = $this->getProductImageByProductId($request->getParameter('id'));
        $this->forward404Unless($this->product);
        $this->products = $this->getRandomNumberOfProducts();
        $this->news = Doctrine_Core::getTable('News')->getLatestNews();
        return sfView::SUCCESS;
    }

    /**
     * @param sfWebRequest $request
     */
    public function executeShowallproducts(sfWebRequest $request)
    {
        $this->showActiveCollections();
        $this->showActiveCategories();
        $this->products = Doctrine::getTable('Product')->getAllProducts();
    }


    /**
     * Sets categories to show all available categories
     */
    private function showActiveCategories()
    {
        $this->categories = Doctrine_Core::getTable('Category')->getAllCategories();
    }

    /**
     * Sets collections to show all active collections
     */
    private function showActiveCollections(){
        $this->collections = Doctrine_Core::getTable('Collection')->showActiveCollections();
    }

    //TODO: Move to model as this is not correct here. Didn't do as didn't have the time
    //TODO: Also check for other controllers in the same situation

    /**
     * @param $id
     * @internal param sfWebRequest $request
     * @return Doctrine_Query
     */
    public function getProductImageByProductId($id)
    {
        $q = Doctrine_Query::create()
            ->from('ProductImage pr')
            ->where('pr.product_id=' . $id);
        return $q->execute();
    }

    /**
     * @throws Doctrine_Query_Exception
     */
    public function getRandomNumberOfProducts()
    {
        $q = Doctrine::getTable('Product')
            ->createQuery()
            ->orderBy('RAND()')
            ->limit('4');
        return  $q->execute();
    }
}
