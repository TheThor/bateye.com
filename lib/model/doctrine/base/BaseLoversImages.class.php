<?php

/**
 * BaseLoversImages
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $product_id
 * @property string $location
 * @property string $alt
 * @property Lovers $Lovers
 * 
 * @method integer      getId()         Returns the current record's "id" value
 * @method integer      getProductId()  Returns the current record's "product_id" value
 * @method string       getLocation()   Returns the current record's "location" value
 * @method string       getAlt()        Returns the current record's "alt" value
 * @method Lovers       getLovers()     Returns the current record's "Lovers" value
 * @method LoversImages setId()         Sets the current record's "id" value
 * @method LoversImages setProductId()  Sets the current record's "product_id" value
 * @method LoversImages setLocation()   Sets the current record's "location" value
 * @method LoversImages setAlt()        Sets the current record's "alt" value
 * @method LoversImages setLovers()     Sets the current record's "Lovers" value
 * 
 * @package    bateye
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseLoversImages extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('lovers_images');
        $this->hasColumn('id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('product_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('location', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('alt', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Lovers', array(
             'local' => 'product_id',
             'foreign' => 'id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}