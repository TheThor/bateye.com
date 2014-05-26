<?php
require_once dirname(__DIR__).'/lib/vendor/symfony/lib/autoload/sfCoreAutoload.class.php';
sfCoreAutoload::register();


class ProjectConfiguration extends sfProjectConfiguration
{
    static protected $phpMailer = false;
  public function setup()
  {
    $this->enablePlugins('sfDoctrinePlugin');
    $this->enablePlugins('sfDoctrineGuardPlugin');
    $this->setWebDir('../public_html');
	  $this->setCacheDir($this->getRootDir().'/cache'); //CORRECTO
	  $this->setLogDir($this->getRootDir().'/log');//CORRECTO
  }

    static public function registerPHPmailer()
    {
        if (self::$phpMailer)
        {
            return;
        }
	    sfConfig::add(array(
		    'sf_web_dir'      => SF_ROOT_DIR.'/../www',
		    'sf_upload_dir'   => SF_ROOT_DIR.'/../www/'.sfConfig::get('sf_upload_dir_name'),
	    ));
        set_include_path(sfConfig::get('sf_lib_dir').'/vendor'.PATH_SEPARATOR.get_include_path());
        require_once sfConfig::get('sf_lib_dir').'/vendor/PHPMailer/class.phpmailer.php';
        self::$phpMailer  = true;
    }
}
