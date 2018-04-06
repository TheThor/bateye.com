<?php

/**
 * contacts actions.
 *
 * @package    bateye
 * @subpackage contacts
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class contactsActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
      $this->collections = Doctrine_Core::getTable('Collection')->showActiveCollections();
      $this->forward404Unless($this->collections);
      return sfView::SUCCESS;
  }

    public function executeSendmail(sfWebRequest $request){
        ProjectConfiguration::registerPHPmailer();
        $privateKey = "6LfaWzkUAAAAAHyuiC4QFl4T2Sjy325cbk10XupD";
        if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])){
            $resp = recaptcha_check_answer($privateKey,
            $request->getRemoteAddress(),
            $_POST["recaptcha_challenge_field"],
            $_POST["recaptcha_response_field"]);
            if (!$resp->is_valid) {
                echo "false";
                return sfView::ERROR;
            }
            return sfView::SUCCESS;
        }
        // user didn't enter reCAPTCHA
        var_dump($_POST);
        echo "The reCAPTCHA wasn't entered correctly. Go back and try it again.";
        return sfView::ERROR;
    }
}
