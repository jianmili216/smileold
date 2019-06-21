<?php

use Yaf\Controller_Abstract;
use Illuminate\Support\Facades\Validator;
class UserController extends Yaf\Controller_Abstract {

    /**
     * 默认动作
     * Yaf支持直接把Yaf_Request_Abstract::getParam()得到的同名参数作为Action的形参
     * 对于如下的例子, 当访问http://yourhost/smile/index/index/index/name/xiaoshuangli 的时候, 你就会发现不同
     */
    public function indexAction() {
        $result = UserModel::all();
//        $result = $result->toArray();
//        var_dump($result);

        $this->getView()->display('Layout.phtml');
        $this->getView()->assign("result", $result);
    }
    public function addAction(){
//        $this->getView()->display('Layout.phtml');
//        $parpam = $this->getRequest()->getPost()->toArray();
        $v = new Validator(array('name' => 'Chester Tester'));
        var_dump($v);exit();
        $v->rule('required', 'name');
        if($v->validate()) {
            echo "Yay! We're all good!";
        } else {
            // Errors
            print_r($v->errors());
        }


    }
    public function editAction(){
        $parpam = $this->getRequest()->getParams();
        $res = UserModel::query()->where('id',$parpam['id'])->first();
        $this->getView()->assign("res", $res);
        $this->getView()->display('Layout.phtml');
    }
    public function delAction(){
        $parpam = $this->getRequest()->getParams();
        $res = UserModel::query()->where('id',$parpam['id'])->delete();
        if ($res){
            $this->redirect("/user");
        }
        return false;
    }

}