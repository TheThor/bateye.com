<?php

/**
 * SliderImageTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class SliderImageTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object SliderImageTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('SliderImage');
    }

    /**
     * @return mixed
     */
    public function getAllSliders(){
//        $q = $this->createQuery()
//            ->select('*')
//            ->from('SliderImages')
//            ->orderBy('created_at DESC');
        $q = $this->createQuery('a')
            ->orderBy('a.created_at DESC');
        return $q->execute();
    }
}