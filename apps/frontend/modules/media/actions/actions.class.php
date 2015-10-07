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

    /**
     * @param sfWebRequest $request
     * @return sfView
     * @throws sfError404Exception
     */
    public function executeShow(sfWebRequest $request) {
        // being sure no other content wil be output
        sfConfig::set('sf_web_debug', false);
        $this->setLayout(false);
        $this->filepath = $request->getGetParameter('filepath');

        if (empty($this->filepath)) {
            $this->renderText(readfile($this->pdfDownload()));
        } else {
            $filePath = $this->genericFileDownlad();
            readfile($filePath);
        }

//        $this->getResponse()->setContent(file_get_contents($pdfpath)); # will produce a memory limit exhausted error
        return sfView::HEADER_ONLY;
    }

    /**
     * @return string
     * @throws sfError404Exception
     */
    public function pdfDownload()
    {
        $this->fileName = Doctrine_Core::getTable('IndexContent')->getCatalogueFileName();
        foreach ($this->fileName as $file) {
            $this->file = $file->getCatalogue();
        }
        $pdfpath = sfConfig::get('sf_root_dir') . DIRECTORY_SEPARATOR . 'media'
            . DIRECTORY_SEPARATOR
            . $this->file;
        // check if the file exists
        $this->forward404Unless(file_exists($pdfpath) == true);
        $file = $this->file;
        // Adding the file to the Response object
        $this->getResponse()->clearHttpHeaders();
        $this->getResponse()->setContentType('application/pdf');
        $this->getResponse()->addHttpMeta('Content-disposition', "attachment; filename=" . $file );
        $this->getResponse()->setHttpHeader('Content-Description', 'File Transfer');
        $this->getResponse()->setHttpHeader('Content-Transfer-Encoding', 'binary');
        $this->getResponse()->setHttpHeader('Content-Length', filesize($pdfpath));
        $this->getResponse()->setHttpHeader('Cache-Control', 'public, must-revalidate');
        $this->getResponse()->setHttpHeader('Pragma: public', true); //HTTPS ONLY
        $this->getResponse()->sendHttpHeaders();
        ob_end_flush();
        $this->getResponse()->setContent(readfile($pdfpath));
        return $pdfpath; // other way
    }

    private function genericFileDownlad()
    {
        //TODO: Validar existência de ficheiro
        // Adding the file to the Response object
        $filePath = $this->filepath;
        $fileType = substr($filePath, strpos($filePath, ".") + 1);
        $exploded = explode('/', $filePath);
        $fileEnd = end($exploded);
        $fileName = str_replace('.' . $fileType, '', $fileEnd);
        $this->getResponse()->clearHttpHeaders();
        $this->getResponse()->setContentType('application/' . $fileType);
        $this->getResponse()->addHttpMeta('Content-disposition', "attachment; filename=" . $fileName);
        $this->getResponse()->setHttpHeader('Content-Description', 'File Transfer');
        $this->getResponse()->setHttpHeader('Content-Transfer-Encoding', 'binary');
        $this->getResponse()->setHttpHeader('Content-Length', filesize($filePath));
        $this->getResponse()->setHttpHeader('Cache-Control', 'public, must-revalidate');
        $this->getResponse()->setHttpHeader('Pragma: public', true); //HTTPS ONLY
        $this->getResponse()->sendHttpHeaders();
        ob_end_flush();
//        $this->getResponse()->setContent(readfile($filePath));
        return $filePath; // other way
    }
}
