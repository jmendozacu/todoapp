<?php

class CGI_HelloWorld_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        die("hello");
      //$this->loadLayout();
      //$this->renderLayout();
    }
}