<?php

/**
 * BaseProduct
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $name
 * @property string $main_img_path
 * @property string $main_img_alt
 * @property string $context_img
 * @property string $context_img_alt
 * @property string $small_img
 * @property string $small_img_alt
 * @property string $citation
 * @property string $description
 * @property string $designer
 * @property string $dimensions
 * @property string $materials
 * @property string $other
 * @property integer $collection_id
 * @property integer $category_id
 * @property boolean $home_featured
 * @property string $home_text
 * @property Collection $Collection
 * @property Category $Category
 * @property Doctrine_Collection $ProductImage
 * @property Doctrine_Collection $NewProductHomepage
 * @property Doctrine_Collection $PressConceptProduct
 * @property Doctrine_Collection $PressProductImage
 * @property Doctrine_Collection $PressCollectionProduct
 * 
 * @method integer             getId()                     Returns the current record's "id" value
 * @method string              getName()                   Returns the current record's "name" value
 * @method string              getMainImgPath()            Returns the current record's "main_img_path" value
 * @method string              getMainImgAlt()             Returns the current record's "main_img_alt" value
 * @method string              getContextImg()             Returns the current record's "context_img" value
 * @method string              getContextImgAlt()          Returns the current record's "context_img_alt" value
 * @method string              getSmallImg()               Returns the current record's "small_img" value
 * @method string              getSmallImgAlt()            Returns the current record's "small_img_alt" value
 * @method string              getCitation()               Returns the current record's "citation" value
 * @method string              getDescription()            Returns the current record's "description" value
 * @method string              getDesigner()               Returns the current record's "designer" value
 * @method string              getDimensions()             Returns the current record's "dimensions" value
 * @method string              getMaterials()              Returns the current record's "materials" value
 * @method string              getOther()                  Returns the current record's "other" value
 * @method integer             getCollectionId()           Returns the current record's "collection_id" value
 * @method integer             getCategoryId()             Returns the current record's "category_id" value
 * @method boolean             getHomeFeatured()           Returns the current record's "home_featured" value
 * @method string              getHomeText()               Returns the current record's "home_text" value
 * @method Collection          getCollection()             Returns the current record's "Collection" value
 * @method Category            getCategory()               Returns the current record's "Category" value
 * @method Doctrine_Collection getProductImage()           Returns the current record's "ProductImage" collection
 * @method Doctrine_Collection getNewProductHomepage()     Returns the current record's "NewProductHomepage" collection
 * @method Doctrine_Collection getPressConceptProduct()    Returns the current record's "PressConceptProduct" collection
 * @method Doctrine_Collection getPressProductImage()      Returns the current record's "PressProductImage" collection
 * @method Doctrine_Collection getPressCollectionProduct() Returns the current record's "PressCollectionProduct" collection
 * @method Product             setId()                     Sets the current record's "id" value
 * @method Product             setName()                   Sets the current record's "name" value
 * @method Product             setMainImgPath()            Sets the current record's "main_img_path" value
 * @method Product             setMainImgAlt()             Sets the current record's "main_img_alt" value
 * @method Product             setContextImg()             Sets the current record's "context_img" value
 * @method Product             setContextImgAlt()          Sets the current record's "context_img_alt" value
 * @method Product             setSmallImg()               Sets the current record's "small_img" value
 * @method Product             setSmallImgAlt()            Sets the current record's "small_img_alt" value
 * @method Product             setCitation()               Sets the current record's "citation" value
 * @method Product             setDescription()            Sets the current record's "description" value
 * @method Product             setDesigner()               Sets the current record's "designer" value
 * @method Product             setDimensions()             Sets the current record's "dimensions" value
 * @method Product             setMaterials()              Sets the current record's "materials" value
 * @method Product             setOther()                  Sets the current record's "other" value
 * @method Product             setCollectionId()           Sets the current record's "collection_id" value
 * @method Product             setCategoryId()             Sets the current record's "category_id" value
 * @method Product             setHomeFeatured()           Sets the current record's "home_featured" value
 * @method Product             setHomeText()               Sets the current record's "home_text" value
 * @method Product             setCollection()             Sets the current record's "Collection" value
 * @method Product             setCategory()               Sets the current record's "Category" value
 * @method Product             setProductImage()           Sets the current record's "ProductImage" collection
 * @method Product             setNewProductHomepage()     Sets the current record's "NewProductHomepage" collection
 * @method Product             setPressConceptProduct()    Sets the current record's "PressConceptProduct" collection
 * @method Product             setPressProductImage()      Sets the current record's "PressProductImage" collection
 * @method Product             setPressCollectionProduct() Sets the current record's "PressCollectionProduct" collection
 * 
 * @package    bateye
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseProduct extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('product');
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
        $this->hasColumn('context_img', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('context_img_alt', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('small_img', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('small_img_alt', 'string', 255, array(
             'type' => 'string',
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
        $this->hasColumn('dimensions', 'string', 255, array(
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
        $this->hasColumn('home_featured', 'boolean', null, array(
             'type' => 'boolean',
             'notnull' => true,
             'default' => 0,
             ));
        $this->hasColumn('home_text', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Collection', array(
             'local' => 'collection_id',
             'foreign' => 'id'));

        $this->hasOne('Category', array(
             'local' => 'category_id',
             'foreign' => 'id'));

        $this->hasMany('ProductImage', array(
             'local' => 'id',
             'foreign' => 'product_id'));

        $this->hasMany('IndexNewProduct as NewProductHomepage', array(
             'local' => 'id',
             'foreign' => 'product_id'));

        $this->hasMany('PressProductConcept as PressConceptProduct', array(
             'local' => 'id',
             'foreign' => 'product_id'));

        $this->hasMany('PressProductConceptImage as PressProductImage', array(
             'local' => 'id',
             'foreign' => 'product_id'));

        $this->hasMany('PressCollection as PressCollectionProduct', array(
             'local' => 'id',
             'foreign' => 'product_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}