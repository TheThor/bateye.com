<?php

/**
 * lovers actions.
 *
 * @package    bateye
 * @subpackage lovers
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class loversActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
	private function showActiveCollection(){
		return Doctrine_Core::getTable('Collections')->showActiveCollections();
	}

	private function getLoversProductsByCollection($id){
		$q = Doctrine_Query::create()
			->from('Lovers l')
			->where('p.collection_id=' . $id);
		return $q->execute();
	}

	public function executeIndex(sfWebRequest $request)
	{
		$this->collections = $this->showActiveCollection();
		return sfView::SUCCESS;
	}

	public function executeShowLoverscollection(sfWebRequest $request)
	{
		$this->collections = $this->showActiveCollection();
		$this->forward404Unless($this->collections);
		$this->forward404Unless($request->getParameter('id')==1);
		$this->products = $this->getLoversProductsByCollection($request->getParameter('id'));
		$this->forward404Unless($this->products);
		return sfView::SUCCESS;
	}

	public function executeShowLoversproduct(sfWebRequest $request)
	{
		$this->collections = $this->showActiveCollection();
		$this->product = Doctrine::getTable('Lovers')->find($request->getParameter('id'));
		$q = Doctrine_Query::create()
			->from('LoversImages pr')
			->where('pr.product_id=' . $request->getParameter('id'));
		$this->images = $q->execute();
		$this->forward404Unless($this->product);
		$q = Doctrine::getTable('Lovers')
			->createQuery()
			->orderBy('RAND()')
			->limit('3');
		$this->products = $q->execute();
		$this->news = Doctrine_Core::getTable('News')->getLatestNews();
		return sfView::SUCCESS;
	}
}
