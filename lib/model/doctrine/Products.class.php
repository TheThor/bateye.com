<?php

/**
 * Products
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    bateye
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class Products extends BaseProducts
{
	public function getById($id){
		$q = Doctrine_Query::create()
			->from('Products p')
			->where("id=?", $id);

		return $q->execute();
	}
}
