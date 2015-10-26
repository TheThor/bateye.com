<?php

/**
 * PressProductImage form.
 *
 * @package    bateye
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class PressProductImageForm extends BasePressProductImageForm
{
    public function configure()
    {
        unset($this['created_at'], $this['updated_at']);
        $this->setWidget('high_res_img', new sfWidgetFormInputFileEditable(array(
            'label' => 'High res image',
            'file_src' => '/images/press/product/' . $this->getObject()->getHighResImg(),
            'is_image' => true,
            'edit_mode' => !$this->isNew(),
            'template' => '<div>%file%<br />%input%<br />%delete% %delete_label%</div>'
        )));
        $this->setValidator('high_res_img', new sfValidatorFile(array(
            'required' => true,
            'path' => sfConfig::get('sf_upload_dir') . '/images/press/product/',
            'mime_types' => 'web_images',
        )));
        $this->setWidget('low_res_img', new sfWidgetFormInputFileEditable(array(
            'label' => 'Low res image',
            'file_src' => '/images/press/product/' . $this->getObject()->getLowResImg(),
            'is_image' => true,
            'edit_mode' => !$this->isNew(),
            'template' => '<div>%file%<br />%input%<br />%delete% %delete_label%</div>'
        )));
        $this->setValidator('low_res_img', new sfValidatorFile(array(
            'required' => true,
            'path' => sfConfig::get('sf_upload_dir') . '/images/press/product/',
            'mime_types' => 'web_images',
        )));
        $this->validatorSchema['high_res_img_delete'] = new sfValidatorPass();
        $this->validatorSchema['low_res_img_delete'] = new sfValidatorPass();
    }
}
