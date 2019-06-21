<?php

use Yaf\Controller_Abstract;

class AdminController extends Yaf\Controller_Abstract {

    public function indexAction() {
        $this->getView()->display('Layout.phtml');
    }

}