<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version2 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->addColumn('press_collection', 'product_id', 'integer', '8', array(
             'notnull' => '1',
             ));
    }

    public function down()
    {
        $this->removeColumn('press_collection', 'product_id');
    }
}