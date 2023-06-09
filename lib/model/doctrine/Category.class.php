<?php

/**
 * Category
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    bateye
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class Category extends BaseCategory
{
    public function getCategorySlug()
    {
        return Category::slugify($this->getCategory());
    }

    public function postDelete($event)
    {
        $filePath = sfConfig::get('sf_upload_dir') . '/images/category/' . $this->getImage();
        @unlink($filePath);
    }
}
