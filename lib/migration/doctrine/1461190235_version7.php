<?php

/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version7 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->addColumn('product', 'home_featured', 'boolean', '25', array(
            'notnull' => '1',
            'default' => '0',
        ));
    }

    public function down()
    {
        $this->removeColumn('product', 'home_featured');
    }
}