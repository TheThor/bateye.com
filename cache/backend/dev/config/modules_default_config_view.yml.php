<?php
// auto-generated by sfViewConfigHandler
// date: 2014/05/29 22:33:48
$response = $this->context->getResponse();


  $templateName = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_template', $this->actionName);
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());



  if (null !== $layout = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_layout'))
  {
    $this->setDecoratorTemplate(false === $layout ? false : $layout.$this->getExtension());
  }
  else if (null === $this->getDecoratorTemplate() && !$this->context->getRequest()->isXmlHttpRequest())
  {
    $this->setDecoratorTemplate('' == 'layout' ? false : 'layout'.$this->getExtension());
  }
  $response->addHttpMeta('content-type', 'text/html', false);

  $response->addStylesheet('bootstrap3.min.css', '', array ());
  $response->addStylesheet('bootstrap-theme3.min.css', '', array ());
  $response->addStylesheet('backend.css', '', array ());
  $response->addJavascript('jquery-1.10.2.js', '', array ());
  $response->addJavascript('bootstrap3.min.js', '', array ());


