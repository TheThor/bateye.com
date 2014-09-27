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
     *
     * @param sfRequest $request A request object
     */

    private function showActiveCollection(){
        return Doctrine_Core::getTable('Collections')->showActiveCollections();
    }

    private function getProductsByCollection($id){
        $q = Doctrine_Query::create()
            ->from('Products p')
            ->where('p.collection_id=' . $id);
        return $q->execute();
    }

    public function executeIndex(sfWebRequest $request)
    {
        $this->collections = $this->showActiveCollection();
        return sfView::SUCCESS;
    }

    public function executeShowcollection(sfWebRequest $request)
    {
	    $this->forward404Unless($request->getParameter('id')!=3);
        $this->collections = $this->showActiveCollection();
        $this->forward404Unless($this->collections);
        $this->products = $this->getProductsByCollection($request->getParameter('id'));
        $this->forward404Unless($this->products);
        return sfView::SUCCESS;
    }

    public function executeShowproduct(sfWebRequest $request)
    {
        $this->collections = $this->showActiveCollection();
        $this->product = Doctrine::getTable('Products')->find($request->getParameter('id'));
        $q = Doctrine_Query::create()
            ->from('ProductImages pr')
            ->where('pr.product_id=' . $request->getParameter('id'));
        $this->images = $q->execute();
        $this->forward404Unless($this->product);
        $q = Doctrine::getTable('Products')
            ->createQuery()
            ->orderBy('RAND()')
            ->limit('3');
        $this->products = $q->execute();
        $this->news = Doctrine_Core::getTable('News')->getLatestNews();
        return sfView::SUCCESS;
    }
}
