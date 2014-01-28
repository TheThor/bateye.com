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

    public function executeIndex(sfWebRequest $request)
    {
        $this->collections = $this->showActiveCollection();
        return sfView::SUCCESS;
    }

    public function executeShowcollection(sfWebRequest $request)
    {
        $this->collections = $this->showActiveCollection();
        $this->forward404Unless($this->collections);
        $q = Doctrine_Query::create()
            ->from('Products p')
            ->where('p.collection_id=' . $request->getParameter('id'));
        $this->products = $q->execute();

        return sfView::SUCCESS;
    }

    public function executeShowproduct(sfWebRequest $request)
    {
        $this->collections = $this->showActiveCollection();
        $this->forward404Unless($this->collections);
        $q = Doctrine_Query::create()
            ->from('Products p')
            ->where('p.collection_id=' . $request->getParameter('id'));
        $this->products = $q->execute();

        return sfView::SUCCESS;
    }
}
