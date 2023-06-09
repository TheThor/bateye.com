<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version1 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->addColumn('press_logo', 'image', 'string', '255', array(
             'notnull' => '1',
             ));
        $this->addColumn('press_main_area', 'country', 'string', '255', array(
             'notnull' => '1',
             ));
        $this->addColumn('press_main_area', 'description', 'string', '255', array(
             'notnull' => '1',
             ));
    }

    public function down()
    {
        $this->removeColumn('press_logo', 'image');
        $this->removeColumn('press_main_area', 'country');
        $this->removeColumn('press_main_area', 'description');
    }
}