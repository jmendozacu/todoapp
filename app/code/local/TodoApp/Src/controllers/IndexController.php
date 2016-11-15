<?php

class TodoApp_Src_IndexController extends Mage_Core_Controller_Front_Action {

    public function indexAction(){
        $this->loadLayout();
        $this->renderLayout();
    }
}