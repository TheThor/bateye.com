<?php
// auto-generated by sfViewConfigHandler
// date: 2014/10/02 14:47:36
$response = $this->context->getResponse();

if ($this->actionName.$this->viewName == 'exploreMore')
{
  $templateName = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_template', $this->actionName);
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());
}
else if ($this->actionName.$this->viewName == 'indexSuccess')
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
else if ($templateName.$this->viewName == 'indexSuccess')
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

  $response->addStylesheet('reset.css', '', array ());
  $response->addStylesheet('bootstrap.min.css', '', array ());
  $response->addStylesheet('bootstrap-responsive.css', '', array ());
  $response->addStylesheet('style.css', '', array ());
  $response->addJavascript('jquery-1.10.2.js', '', array ());
  $response->addJavascript('bootstrap.js', '', array ());
  $response->addJavascript('sidebuttons.js', '', array ());
  $response->addJavascript('parallax.js', '', array ());
  $response->addJavascript('validator.js', '', array ());
  $response->addJavascript('others.js', '', array ());
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
