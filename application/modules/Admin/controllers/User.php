<?php

use Yaf\Controller_Abstract;

class UserController extends Yaf\Controller_Abstract {

    public function indexAction() {
        $result = UserModel::all();
        $this->getView()->display('Layout.phtml');
        $this->getView()->assign("result", $result);
<<<<<<< HEAD
        echo 444;
=======
        echo 3333;
>>>>>>> ecfc9abff1a3e5115d587e586a0042e88d311037
    }

}git