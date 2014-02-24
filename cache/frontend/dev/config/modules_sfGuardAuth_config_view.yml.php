<?php
// auto-generated by sfViewConfigHandler
// date: 2014/02/23 22:45:52
$response = $this->context->getResponse();

if ($this->actionName.$this->viewName == 'exploreMore')
{
  $templateName = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_template', $this->actionName);
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());
}
else if ($this->actionName.$this->viewName == 'secureSuccess')
{
  $templateName = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_template', $this->actionName);
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());
}
else if ($this->actionName.$this->viewName == 'signinSuccess')
{
  $templateName = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_template', $this->actionName);
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());
}
else
{
  $templateName = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_template', $this->actionName);
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());
}

if ($templateName.$this->viewName == 'exploreMore')
{
  if (null !== $layout = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_layout'))
  {
    $this->setDecoratorTemplate(false === $layout ? false : $layout.$this->getExtension());
  }
  else if (null === $this->getDecoratorTemplate() && !$this->context->getRequest()->isXmlHttpRequest())
  {
    $this->setDecoratorTemplate('' == 'layout' ? false : 'layout'.$this->getExtension());
  }
  $response->addHttpMeta('content-type', 'text/html', false);

  $response->addStylesheet('style.css', '', array ());
  $response->addJavascript('jquery-1.10.2.js', '', array ());
  $response->addJavascript('bootstrap.js', '', array ());
  $response->addJavascript('sidebuttons.js', '', array ());
  $response->addJavascript('parallax.js', '', array ());
  $response->addJavascript('validator.js', '', array ());
  $response->addJavascript('others.js', '', array ());
}
else if ($templateName.$this->viewName == 'secureSuccess')
{
  if (null !== $layout = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_layout'))
  {
    $this->setDecoratorTemplate(false === $layout ? false : $layout.$this->getExtension());
  }
  else
  {
    $this->setDecoratorTemplate('' == 'page_layout' ? false : 'page_layout'.$this->getExtension());
  }
  $response->addHttpMeta('content-type', 'text/html', false);

  $response->addStylesheet('reset.css', '', array ());
  $response->addStylesheet('main.css', '', array ());
  $response->addStylesheet('http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900', '', array ());
  $response->addStylesheet('http://fonts.googleapis.com/css?family=Abril+Fatface', '', array ());
  $response->addStylesheet('camera.css', '', array ());
  $response->addStylesheet('style.css', '', array ());
  $response->addStylesheet('bootstrap3.min.css', '', array ());
  $response->addJavascript('jquery-1.10.2.js', '', array ());
  $response->addJavascript('sidebuttons.js', '', array ());
  $response->addJavascript('validator.js', '', array ());
  $response->addJavascript('jquery.min.js', '', array ());
  $response->addJavascript('analytics.js', '', array ());
  $response->addJavascript('jquery.mobile.customized.min.js', '', array ());
  $response->addJavascript('jquery.easing.1.3.js', '', array ());
  $response->addJavascript('productslider.js', '', array ());
  $response->addJavascript('camera.min.js', '', array ());
}
else if ($templateName.$this->viewName == 'signinSuccess')
{
  if (null !== $layout = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_layout'))
  {
    $this->setDecoratorTemplate(false === $layout ? false : $layout.$this->getExtension());
  }
  else
  {
    $this->setDecoratorTemplate('' == 'page_layout' ? false : 'page_layout'.$this->getExtension());
  }
  $response->addHttpMeta('content-type', 'text/html', false);

  $response->addStylesheet('reset.css', '', array ());
  $response->addStylesheet('main.css', '', array ());
  $response->addStylesheet('http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900', '', array ());
  $response->addStylesheet('http://fonts.googleapis.com/css?family=Abril+Fatface', '', array ());
  $response->addStylesheet('camera.css', '', array ());
  $response->addStylesheet('style.css', '', array ());
  $response->addStylesheet('bootstrap3.min.css', '', array ());
  $response->addJavascript('jquery-1.10.2.js', '', array ());
  $response->addJavascript('sidebuttons.js', '', array ());
  $response->addJavascript('validator.js', '', array ());
  $response->addJavascript('jquery.min.js', '', array ());
  $response->addJavascript('analytics.js', '', array ());
  $response->addJavascript('jquery.mobile.customized.min.js', '', array ());
  $response->addJavascript('jquery.easing.1.3.js', '', array ());
  $response->addJavascript('productslider.js', '', array ());
  $response->addJavascript('camera.min.js', '', array ());
}
else
{
  if (null !== $layout = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_layout'))
  {
    $this->setDecoratorTemplate(false === $layout ? false : $layout.$this->getExtension());
  }
  else if (null === $this->getDecoratorTemplate() && !$this->context->getRequest()->isXmlHttpRequest())
  {
    $this->setDecoratorTemplate('' == 'layout' ? false : 'layout'.$this->getExtension());
  }
  $response->addHttpMeta('content-type', 'text/html', false);

  $response->addJavascript('jquery-1.10.2.js', '', array ());
  $response->addJavascript('bootstrap.js', '', array ());
  $response->addJavascript('sidebuttons.js', '', array ());
  $response->addJavascript('parallax.js', '', array ());
  $response->addJavascript('validator.js', '', array ());
  $response->addJavascript('others.js', '', array ());
}

