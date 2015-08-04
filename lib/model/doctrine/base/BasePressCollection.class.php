<?php

/**
 * BasePressCollection
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $product_image
 * @property string $package_location
 * @property integer $collection_id
 * @property integer $product_id
 * @property Collection $Collection
 * @property Product $Product
 * 
 * @method integer         getId()               Returns the current record's "id" value
 * @method string          getProductImage()     Returns the current record's "product_image" value
 * @method string          getPackageLocation()  Returns the current record's "package_location" value
 * @method integer         getCollectionId()     Returns the current record's "collection_id" value
 * @method integer         getProductId()        Returns the current record's "product_id" value
 * @method Collection      getCollection()       Returns the current record's "Collection" value
 * @method Product         getProduct()          Returns the current record's "Product" value
 * @method PressCollection setId()               Sets the current record's "id" value
 * @method PressCollection setProductImage()     Sets the current record's "product_image" value
 * @method PressCollection setPackageLocation()  Sets the current record's "package_location" value
 * @method PressCollection setCollectionId()     Sets the current record's "collection_id" value
 * @method PressCollection setProductId()        Sets the current record's "product_id" value
 * @method PressCollection setCollection()       Sets the current record's "Collection" value
 * @method PressCollection setProduct()          Sets the current record's "Product" value
 * 
 * @package    bateye
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BasePressCollection extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('press_collection');
        $this->hasColumn('id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('product_image', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('package_location', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('collection_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('product_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Collection', array(
             'local' => 'collection_id',
             'foreign' => 'id'));

        $this->hasOne('Product', array(
             'local' => 'product_id',
             'foreign' => 'id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}