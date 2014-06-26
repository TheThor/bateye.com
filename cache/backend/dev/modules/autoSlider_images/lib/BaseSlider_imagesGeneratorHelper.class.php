<?php

/**
 * slider_images module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage slider_images
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: helper.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseSlider_imagesGeneratorHelper extends sfModelGeneratorHelper
{
  public function getUrlForAction($action)
  {
    return 'list' == $action ? 'slider_images' : 'slider_images_'.$action;
  }

  public function linkToNew($params)
  {
    return link_to('<i class="glyphicon glyphicon-plus"></i> '.__($params['label'], array(), 'sf_admin'), '@'.$this->getUrlForAction('new'), array('class' => 'btn btn-sm btn-info'));
  }

  public function linkToEdit($object, $params)
  {
    return link_to('<i class="glyphicon glyphicon-pencil"></i> '.__($params['label'], array(), 'sf_admin'), $this->getUrlForAction('edit'), $object, array('class' => 'btn btn-sm btn-primary'));
  }

  public function linkToDelete($object, $params)
  {
    if ($object->isNew())
    {
      return '';
    }

    return link_to('<i class="glyphicon glyphicon-trash"></i> '.__($params['label'], array(), 'sf_admin'), $this->getUrlForAction('delete'), $object, array('method' => 'delete', 'confirm' => !empty($params['confirm']) ? __($params['confirm'], array(), 'sf_admin') : $params['confirm'], 'class' => 'btn btn-sm btn-danger'));
  }

  public function linkToList($params)
  {
    return link_to('<i class="glyphicon glyphicon-list"></i> '.__($params['label'], array(), 'bootstrap_admin'), '@'.$this->getUrlForAction('list'), array('class' => 'btn btn-sm btn-default'));
  }

  public function linkToSave($object, $params)
  {
    return '<button type="submit" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-ok"></i> '.__($params['label'], array(), 'sf_admin').'</button>';
  }

  public function linkToSaveAndAdd($object, $params)
  {
    if (!$object->isNew())
    {
      return '';
    }

    return '<button type="submit" value="'.__($params['label'], array(), 'sf_admin').'" name="_save_and_add" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-ok"></i> '.__($params['label'], array(), 'sf_admin').'</button>';
  }
}
