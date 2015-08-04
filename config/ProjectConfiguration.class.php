<?php
require_once dirname(__DIR__) . '/lib/vendor/symfony/lib/autoload/sfCoreAutoload.class.php';
sfCoreAutoload::register();


class ProjectConfiguration extends sfProjectConfiguration
{
	static protected $phpMailer = false;

	public function setup()
	{
		$this->enablePlugins('sfDoctrinePlugin');
		$this->enablePlugins('sfDoctrineGuardPlugin');
		$this->enablePlugins('izarusBootstrap3AdminThemePlugin');
		$this->setWebDir('/web'); //bateye.com para live
		$this->setCacheDir($this->getRootDir() . '/cache'); //CORRECTO
		$this->setLogDir($this->getRootDir() . '/log'); //CORRECTO
		sfConfig::add(array(
			'sf_upload_dir'   => sfConfig::get('sf_root_dir') . sfConfig::get('sf_web_dir')
		));
	}

	static public function registerPHPmailer()
	{
		if (self::$phpMailer) {
			return;
		}

		set_include_path(sfConfig::get('sf_lib_dir') . '/vendor' . PATH_SEPARATOR . get_include_path());
		require_once sfConfig::get('sf_lib_dir') . '/vendor/PHPMailer/class.phpmailer.php';
		self::$phpMailer = true;
	}
}
