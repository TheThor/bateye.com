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
    public function executeIndex(sfWebRequest $request)
    {
        $this->collections = Doctrine::getTable('Collections')
            ->createQuery('c')
            ->execute();
        return SFVIEW::SUCCESS;
    }
}
