<?php


class BaseController extends Yaf_Controller_Abstract{

	public function init() {
		/**
		* 如果是Ajax请求, 则关闭HTML输出
		*/
		if ($this->getRequest()->getPost()) {
			Yaf_Dispatcher::getInstance()->disableView();
		}

		

	}
}