<?php

/**
 * BaseNews
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $news_title
 * @property string $news_content
 * @property string $news_image
 * @property string $link
 * 
 * @method integer getId()           Returns the current record's "id" value
 * @method string  getNewsTitle()    Returns the current record's "news_title" value
 * @method string  getNewsContent()  Returns the current record's "news_content" value
 * @method string  getNewsImage()    Returns the current record's "news_image" value
 * @method string  getLink()         Returns the current record's "link" value
 * @method News    setId()           Sets the current record's "id" value
 * @method News    setNewsTitle()    Sets the current record's "news_title" value
 * @method News    setNewsContent()  Sets the current record's "news_content" value
 * @method News    setNewsImage()    Sets the current record's "news_image" value
 * @method News    setLink()         Sets the current record's "link" value
 * 
 * @package    bateye
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseNews extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('news');
        $this->hasColumn('id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('news_title', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('news_content', 'string', 1000, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 1000,
             ));
        $this->hasColumn('news_image', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('link', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}