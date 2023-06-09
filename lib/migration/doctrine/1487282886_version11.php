<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version11 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createForeignKey('lovers_atelier_product', 'lovers_atelier_product_category_id_category_id', array(
             'name' => 'lovers_atelier_product_category_id_category_id',
             'local' => 'category_id',
             'foreign' => 'id',
             'foreignTable' => 'category',
             ));
        $this->createForeignKey('lovers_atelier_product_image', 'lpli', array(
             'name' => 'lpli',
             'local' => 'product_id',
             'foreign' => 'id',
             'foreignTable' => 'lovers_atelier_product',
             ));
        $this->addIndex('lovers_atelier_product', 'lovers_atelier_product_category_id', array(
             'fields' => 
             array(
              0 => 'category_id',
             ),
             ));
        $this->addIndex('lovers_atelier_product_image', 'lovers_atelier_product_image_product_id', array(
             'fields' => 
             array(
              0 => 'product_id',
             ),
             ));
    }

    public function down()
    {
        $this->dropForeignKey('lovers_atelier_product', 'lovers_atelier_product_category_id_category_id');
        $this->dropForeignKey('lovers_atelier_product_image', 'lpli');
        $this->removeIndex('lovers_atelier_product', 'lovers_atelier_product_category_id', array(
             'fields' => 
             array(
              0 => 'category_id',
             ),
             ));
        $this->removeIndex('lovers_atelier_product_image', 'lovers_atelier_product_image_product_id', array(
             'fields' => 
             array(
              0 => 'product_id',
             ),
             ));
    }
}