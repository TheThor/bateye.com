<?php

/**
 * BaseProducts
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $name
 * @property string $main_img_path
 * @property string $main_img_alt
 * @property string $citation
 * @property string $description
 * @property string $designer
 * @property string $width
 * @property string $height
 * @property string $diameter
 * @property string $depth
 * @property string $materials
 * @property string $other
 * @property integer $collection_id
 * @property integer $category_id
 * @property Collections $Collections
 * @property Category $Category
 * @property Doctrine_Collection $ProductImage
 * 
 * @method integer             getId()            Returns the current record's "id" value
 * @method string              getName()          Returns the current record's "name" value
 * @method string              getMainImgPath()   Returns the current record's "main_img_path" value
 * @method string              getMainImgAlt()    Returns the current record's "main_img_alt" value
 * @method string              getCitation()      Returns the current record's "citation" value
 * @method string              getDescription()   Returns the current record's "description" value
 * @method string              getDesigner()      Returns the current record's "designer" value
 * @method string              getWidth()         Returns the current record's "width" value
 * @method string              getHeight()        Returns the current record's "height" value
 * @method string              getDiameter()      Returns the current record's "diameter" value
 * @method string              getDepth()         Returns the current record's "depth" value
 * @method string              getMaterials()     Returns the current record's "materials" value
 * @method string              getOther()         Returns the current record's "other" value
 * @method integer             getCollectionId()  Returns the current record's "collection_id" value
 * @method integer             getCategoryId()    Returns the current record's "category_id" value
 * @method Collections         getCollections()   Returns the current record's "Collections" value
 * @method Category            getCategory()      Returns the current record's "Category" value
 * @method Doctrine_Collection getProductImage()  Returns the current record's "ProductImage" collection
 * @method Products            setId()            Sets the current record's "id" value
 * @method Products            setName()          Sets the current record's "name" value
 * @method Products            setMainImgPath()   Sets the current record's "main_img_path" value
 * @method Products            setMainImgAlt()    Sets the current record's "main_img_alt" value
 * @method Products            setCitation()      Sets the current record's "citation" value
 * @method Products            setDescription()   Sets the current record's "description" value
 * @method Products            setDesigner()      Sets the current record's "designer" value
 * @method Products            setWidth()         Sets the current record's "width" value
 * @method Products            setHeight()        Sets the current record's "height" value
 * @method Products            setDiameter()      Sets the current record's "diameter" value
 * @method Products            setDepth()         Sets the current record's "depth" value
 * @method Products            setMaterials()     Sets the current record's "materials" value
 * @method Products            setOther()         Sets the current record's "other" value
 * @method Products            setCollectionId()  Sets the current record's "collection_id" value
 * @method Products            setCategoryId()    Sets the current record's "category_id" value
 * @method Products            setCollections()   Sets the current record's "Collections" value
 * @method Products            setCategory()      Sets the current record's "Category" value
 * @method Products            setProductImage()  Sets the current record's "ProductImage" collection
 * 
 * @package    bateye
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseProducts extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('products');
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
        $this->hasColumn('main_img_path', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('main_img_alt', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('citation', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('description', 'string', 1200, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 1200,
             ));
        $this->hasColumn('designer', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('width', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('height', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('diameter', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('depth', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('materials', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('other', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('collection_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('category_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Collections', array(
             'local' => 'collection_id',
             'foreign' => 'id'));

        $this->hasOne('Category', array(
             'local' => 'category_id',
             'foreign' => 'id'));

        $this->hasMany('ProductImages as ProductImage', array(
             'local' => 'id',
             'foreign' => 'product_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}