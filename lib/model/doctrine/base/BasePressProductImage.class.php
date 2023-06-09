<?php

/**
 * BasePressProductImage
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $high_res_img
 * @property string $low_res_img
 * @property integer $collection_id
 * @property integer $product_id
 * @property Collection $Collection
 * @property Product $Product
 * 
 * @method integer           getId()            Returns the current record's "id" value
 * @method string            getHighResImg()    Returns the current record's "high_res_img" value
 * @method string            getLowResImg()     Returns the current record's "low_res_img" value
 * @method integer           getCollectionId()  Returns the current record's "collection_id" value
 * @method integer           getProductId()     Returns the current record's "product_id" value
 * @method Collection        getCollection()    Returns the current record's "Collection" value
 * @method Product           getProduct()       Returns the current record's "Product" value
 * @method PressProductImage setId()            Sets the current record's "id" value
 * @method PressProductImage setHighResImg()    Sets the current record's "high_res_img" value
 * @method PressProductImage setLowResImg()     Sets the current record's "low_res_img" value
 * @method PressProductImage setCollectionId()  Sets the current record's "collection_id" value
 * @method PressProductImage setProductId()     Sets the current record's "product_id" value
 * @method PressProductImage setCollection()    Sets the current record's "Collection" value
 * @method PressProductImage setProduct()       Sets the current record's "Product" value
 * 
 * @package    bateye
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BasePressProductImage extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('press_product_image');
        $this->hasColumn('id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('high_res_img', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('low_res_img', 'string', 255, array(
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