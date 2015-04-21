<?php
// auto-generated by sfViewConfigHandler
// date: 2015/04/21 20:26:53
$response = $this->context->getResponse();

if ($this->actionName.$this->viewName == 'exploreMore')
{
  $templateName = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_template', $this->actionName);
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());
}
else if ($this->actionName.$this->viewName == 'showproductSuccess')
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
    $this->setDecoratorTemplate('' == 'page_layout' ? false : 'page_layout'.$this->getExtension());
  }
  $response->addHttpMeta('content-type', 'text/html', false);
  $response->addMeta('robots', 'index, follow', false, false);

  $response->addStylesheet('reset.css', '', array ());
  $response->addStylesheet('main.css', '', array ());
  $response->addStylesheet('http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900', '', array ());
  $response->addStylesheet('http://fonts.googleapis.com/css?family=Abril+Fatface', '', array ());
  $response->addStylesheet('style.css', '', array ());
  $response->addJavascript('jquery-1.10.2.js', '', array ());
  $response->addJavascript('sidebuttons.js', '', array ());
  $response->addJavascript('validator.js', '', array ());
  $response->addJavascript('analytics.js', '', array ());
}
else if ($templateName.$this->viewName == 'showproductSuccess')
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
  $response->addMeta('robots', 'index, follow', false, false);

  $response->addStylesheet('reset.css', '', array ());
  $response->addStylesheet('main.css', '', array ());
  $response->addStylesheet('http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900', '', array ());
  $response->addStylesheet('http://fonts.googleapis.com/css?family=Abril+Fatface', '', array ());
  $response->addStylesheet('style.css', '', array ());
  $response->addStylesheet('camera.css', '', array ());
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
else if ($templateName.$this->viewName == 'indexSuccess')
{
  if (null !== $layout = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_layout'))
  {
    $this->setDecoratorTemplate(false === $layout ? false : $layout.$this->getExtension());
  }
  else if (null === $this->getDecoratorTemplate() && !$this->context->getRequest()->isXmlHttpRequest())
  {
    $this->setDecoratorTemplate('' == 'page_layout' ? false : 'page_layout'.$this->getExtension());
  }
  $response->addHttpMeta('content-type', 'text/html', false);
  $response->addMeta('robots', 'index, follow', false, false);

  $response->addStylesheet('reset.css', '', array ());
  $response->addStylesheet('main.css', '', array ());
  $response->addStylesheet('http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900', '', array ());
  $response->addStylesheet('http://fonts.googleapis.com/css?family=Abril+Fatface', '', array ());
  $response->addStylesheet('style.css', '', array ());
  $response->addStylesheet('bootstrap.min.css', '', array ());
  $response->addStylesheet('bootstrap-responsive.css', '', array ());
  $response->addJavascript('jquery-1.10.2.js', '', array ());
  $response->addJavascript('sidebuttons.js', '', array ());
  $response->addJavascript('validator.js', '', array ());
  $response->addJavascript('analytics.js', '', array ());
  $response->addJavascript('collection_page.js', '', array ());
}
else
{
  if (null !== $layout = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_layout'))
  {
    $this->setDecoratorTemplate(false === $layout ? false : $layout.$this->getExtension());
  }
  else if (null === $this->getDecoratorTemplate() && !$this->context->getRequest()->isXmlHttpRequest())
  {
    $this->setDecoratorTemplate('' == 'page_layout' ? false : 'page_layout'.$this->getExtension());
  }
  $response->addHttpMeta('content-type', 'text/html', false);
  $response->addMeta('robots', 'index, follow', false, false);

  $response->addStylesheet('reset.css', '', array ());
  $response->addStylesheet('main.css', '', array ());
  $response->addStylesheet('http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900', '', array ());
  $response->addStylesheet('http://fonts.googleapis.com/css?family=Abril+Fatface', '', array ());
  $response->addStylesheet('style.css', '', array ());
  $response->addJavascript('jquery-1.10.2.js', '', array ());
  $response->addJavascript('sidebuttons.js', '', array ());
  $response->addJavascript('validator.js', '', array ());
  $response->addJavascript('analytics.js', '', array ());
}

