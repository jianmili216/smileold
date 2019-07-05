<?php

use Yaf\Controller_Abstract;

class UserController extends Yaf\Controller_Abstract {

    public function indexAction() {
        $result = UserModel::all();
        $this->getView()->display('Layout.phtml');
        $this->getView()->assign("result", $result);
	echo 5555;

	echo 6666;


    }

}
