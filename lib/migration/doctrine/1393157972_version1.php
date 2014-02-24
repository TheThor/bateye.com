<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version1 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createTable('lovers', array(
             'id' => 
             array(
              'type' => 'integer',
              'primary' => '1',
              'autoincrement' => '1',
              'length' => '8',
             ),
             'name' => 
             array(
              'type' => 'string',
              'notnull' => '1',
              'length' => '255',
             ),
             'main_img_path' => 
             array(
              'type' => 'string',
              'notnull' => '1',
              'length' => '255',
             ),
             'main_img_alt' => 
             array(
              'type' => 'string',
              'notnull' => '1',
              'length' => '255',
             ),
             'citation' => 
             array(
              'type' => 'string',
              'notnull' => '1',
              'length' => '255',
             ),
             'description' => 
             array(
              'type' => 'string',
              'notnull' => '1',
              'length' => '700',
             ),
             'designer' => 
             array(
              'type' => 'string',
              'length' => '255',
             ),
             'width' => 
             array(
              'type' => 'string',
              'length' => '255',
             ),
             'height' => 
             array(
              'type' => 'string',
              'length' => '255',
             ),
             'diameter' => 
             array(
              'type' => 'string',
              'length' => '255',
             ),
             'depth' => 
             array(
              'type' => 'string',
              'length' => '255',
             ),
             'materials' => 
             array(
              'type' => 'string',
              'length' => '255',
             ),
             'other' => 
             array(
              'type' => 'string',
              'length' => '255',
             ),
             'collection_id' => 
             array(
              'type' => 'integer',
              'notnull' => '1',
              'length' => '8',
             ),
             'category_id' => 
             array(
              'type' => 'integer',
              'notnull' => '1',
              'length' => '8',
             ),
             'created_at' => 
             array(
              'notnull' => '1',
              'type' => 'timestamp',
              'length' => '25',
             ),
             'updated_at' => 
             array(
              'notnull' => '1',
              'type' => 'timestamp',
              'length' => '25',
             ),
             ), array(
             'primary' => 
             array(
              0 => 'id',
             ),
             ));
        $this->createTable('lovers_images', array(
             'id' => 
             array(
              'type' => 'integer',
              'primary' => '1',
              'autoincrement' => '1',
              'length' => '8',
             ),
             'product_id' => 
             array(
              'type' => 'integer',
              'notnull' => '1',
              'length' => '8',
             ),
             'location' => 
             array(
              'type' => 'string',
              'notnull' => '1',
              'length' => '255',
             ),
             'alt' => 
             array(
              'type' => 'string',
              'notnull' => '1',
              'length' => '255',
             ),
             'created_at' => 
             array(
              'notnull' => '1',
              'type' => 'timestamp',
              'length' => '25',
             ),
             'updated_at' => 
             array(
              'notnull' => '1',
              'type' => 'timestamp',
              'length' => '25',
             ),
             ), array(
             'primary' => 
             array(
              0 => 'id',
             ),
             ));
    }

    public function down()
    {
        $this->dropTable('lovers');
        $this->dropTable('lovers_images');
    }
}