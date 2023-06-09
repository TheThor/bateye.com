<?php

/**
 * BaseCollection
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property string $name_image
 * @property string $backgroud_image
 * @property boolean $is_active
 * @property Doctrine_Collection $ProductCollection
 * @property Doctrine_Collection $PressCollectionCollection
 * @property Doctrine_Collection $PressProductCollection
 * 
 * @method integer             getId()                        Returns the current record's "id" value
 * @method string              getName()                      Returns the current record's "name" value
 * @method string              getDescription()               Returns the current record's "description" value
 * @method string              getNameImage()                 Returns the current record's "name_image" value
 * @method string              getBackgroudImage()            Returns the current record's "backgroud_image" value
 * @method boolean             getIsActive()                  Returns the current record's "is_active" value
 * @method Doctrine_Collection getProductCollection()         Returns the current record's "ProductCollection" collection
 * @method Doctrine_Collection getPressCollectionCollection() Returns the current record's "PressCollectionCollection" collection
 * @method Doctrine_Collection getPressProductCollection()    Returns the current record's "PressProductCollection" collection
 * @method Collection          setId()                        Sets the current record's "id" value
 * @method Collection          setName()                      Sets the current record's "name" value
 * @method Collection          setDescription()               Sets the current record's "description" value
 * @method Collection          setNameImage()                 Sets the current record's "name_image" value
 * @method Collection          setBackgroudImage()            Sets the current record's "backgroud_image" value
 * @method Collection          setIsActive()                  Sets the current record's "is_active" value
 * @method Collection          setProductCollection()         Sets the current record's "ProductCollection" collection
 * @method Collection          setPressCollectionCollection() Sets the current record's "PressCollectionCollection" collection
 * @method Collection          setPressProductCollection()    Sets the current record's "PressProductCollection" collection
 * 
 * @package    bateye
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseCollection extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('collection');
        $this->hasColumn('id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('name', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('description', 'string', 500, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 500,
             ));
        $this->hasColumn('name_image', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('backgroud_image', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('is_active', 'boolean', null, array(
             'type' => 'boolean',
             'notnull' => true,
             'default' => 1,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Product as ProductCollection', array(
             'local' => 'id',
             'foreign' => 'collection_id'));

        $this->hasMany('PressCollection as PressCollectionCollection', array(
             'local' => 'id',
             'foreign' => 'collection_id'));

        $this->hasMany('PressProductImage as PressProductCollection', array(
             'local' => 'id',
             'foreign' => 'collection_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}