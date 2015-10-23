<?php

/**
 * CatalogueManager form.
 *
 * @package    bateye
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class CatalogueManagerForm extends BaseCatalogueManagerForm
{
  public function configure()
  {
    unset($this['created_at'], $this['updated_at']);
    $this->setWidget('path', new sfWidgetFormInputFileEditable(array(
        'label' => 'PDF File',
        'file_src' => sfConfig::get('sf_media_upload_dir') . $this->getObject()->getPath(),
        'edit_mode' => !$this->isNew(),
        'template'  => '<div>%file%<br />%input%<br />%delete% %delete_label%</div>'
    )));
    $this->setValidator('path', new sfValidatorFile(array(
        'required'   => false,
        'path'       => sfConfig::get('sf_media_upload_dir'),
        'mime_categories' => array('pdf' => array('application/pdf', 'application/x-pdf')),
        'mime_types' => 'pdf',
    )));
      $this->validatorSchema['path_delete'] = new sfValidatorPass();

  }
}
