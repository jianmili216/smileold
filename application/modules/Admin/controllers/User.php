<?php

use Yaf\Controller_Abstract;

class UserController extends Yaf\Controller_Abstract {

    /**
     * 默认动作
     * Yaf支持直接把Yaf_Request_Abstract::getParam()得到的同名参数作为Action的形参
     * 对于如下的例子, 当访问http://yourhost/smile/index/index/index/name/xiaoshuangli 的时候, 你就会发现不同
     */
    public function indexAction() {
        $result = UserModel::all();
        $this->getView()->display('Layout.phtml');
        $this->getView()->assign("result", $result);
    }
    public function loginAction() {
        echo '我是登录接口user';
        return false;
    }



}