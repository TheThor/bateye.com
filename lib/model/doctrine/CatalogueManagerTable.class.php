<?php

/**
 * CatalogueManagerTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class CatalogueManagerTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object CatalogueManagerTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('CatalogueManager');
    }

    /**
     * Returns last inserted catalogue pdf file for download
     * @return Doctrine_Collection
     * @throws Doctrine_Query_Exception
     */
    public function getLastInserted()
    {
        $q = $this->createQuery()
            ->orderBy('1 DESC')
            ->limit(1);
        return $q->execute();
    }
}