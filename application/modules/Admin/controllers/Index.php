<?php
/**
 * @name IndexController
 * @author xiaoshuangli
 * @desc 默认控制器
 * @see http://www.php.net/manual/en/class.yaf-controller-abstract.php
 */
class IndexController extends Yaf\Controller_Abstract {

	/** 
     * 默认动作
     * Yaf支持直接把Yaf_Request_Abstract::getParam()得到的同名参数作为Action的形参
     * 对于如下的例子, 当访问http://yourhost/smile/index/index/index/name/xiaoshuangli 的时候, 你就会发现不同
     */
	public function indexAction() {
        $this->getView()->display('Layout.phtml');
	}

}
