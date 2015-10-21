<?php

/**
 * ProductImage
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    bateye
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class ProductImage extends BaseProductImage
{
    public function postDelete($event)
    {
        $filePath = sfConfig::get('sf_upload_dir') . '/images/slides/' . $this->getLocation();
        @unlink($filePath);
    }

    public function preUpdate($event)
    {
        $filePath = sfConfig::get('sf_upload_dir') . '/images/slides/' . $this->getLocation();
        @unlink($filePath);
    }
}
