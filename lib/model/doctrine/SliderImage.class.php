<?php

/**
 * SliderImage
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    bateye
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class SliderImage extends BaseSliderImage
{
    public function postDelete($event)
    {
        $filepath = sfConfig::get('sf_upload_dir') . '/images/Carousel/' . $this->getPath();
        @unlink($filepath);
    }

    public function preUpdate($event)
    {
        $filepath = sfConfig::get('sf_upload_dir') . '/images/Carousel/' . $this->getPath();
        @unlink($filepath);
    }
}
