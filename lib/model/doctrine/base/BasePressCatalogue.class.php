<?php

/**
 * BasePressCatalogue
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $link
 * @property string $cover
 * 
 * @method integer        getId()    Returns the current record's "id" value
 * @method string         getLink()  Returns the current record's "link" value
 * @method string         getCover() Returns the current record's "cover" value
 * @method PressCatalogue setId()    Sets the current record's "id" value
 * @method PressCatalogue setLink()  Sets the current record's "link" value
 * @method PressCatalogue setCover() Sets the current record's "cover" value
 * 
 * @package    bateye
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BasePressCatalogue extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('press_catalogue');
        $this->hasColumn('id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('link', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('cover', 'string', 255, array(
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