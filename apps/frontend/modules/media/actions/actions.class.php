<?php

/**
 * media actions.
 *
 * @package    bateye
 * @subpackage media
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class mediaActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
    public function executeIndex(sfWebRequest $request)
    {

    }

    public function executeShow(sfWebRequest $request) {
        // being sure no other content wil be output
        $this->setLayout(false);
        sfConfig::set('sf_web_debug', false);
        $this->fileName = Doctrine_Core::getTable('IndexContent')->getCatalogueFileName();

        foreach ($this->fileName as $file){
            $this->file = $file->getCatalogue();
        }
        $pdfpath = sfConfig::get('sf_root_dir').DIRECTORY_SEPARATOR.'media'
            .DIRECTORY_SEPARATOR
            .$this->file;

        // check if the file exists
        $this->forward404Unless(file_exists($pdfpath) == true);

        // Adding the file to the Response object
        $this->getResponse()->clearHttpHeaders();
        $this->getResponse()->setContentType('application/pdf');
        $this->getResponse()->addHttpMeta('Content-disposition', "attachment; filename=" . $this->file);
        $this->getResponse()->setHttpHeader('Content-Description', 'File Transfer');
        $this->getResponse()->setHttpHeader('Content-Transfer-Encoding', 'binary');
        $this->getResponse()->setHttpHeader('Content-Length', filesize($pdfpath));
        $this->getResponse()->setHttpHeader('Cache-Control', 'public, must-revalidate');
        //$this->getResponse()->setHttpHeader('Pragma: public', true); //HTTPS ONLY
        $this->getResponse()->sendHttpHeaders();
        //$this->getResponse()->setContent(readfile($pdfpath)); // other way

        $this->getResponse()->setContent(file_get_contents($pdfpath)); # will produce a memory limit exhausted error

        ob_end_flush();
        return $this->renderText(readfile($pdfpath));
    }
}
