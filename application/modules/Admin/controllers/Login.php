<?php
class LoginController extends Yaf_Controller_Abstract {


	public function init() {
		/**
		* 如果是Ajax请求, 则关闭HTML输出
		*/
      if ($this->getRequest()->getPost()) {
        Yaf_Dispatcher::getInstance()->disableView();
      }
	}
   public function indexAction() {//默认Action


    
   }

   public function loginAction()
   {
   	if(isset($_POST) && !empty($_POST)){


		   header("location:/admin/index/index");
   	}else{

   		var_dump($this->getRequest());
   		
   	}
   }
}
?>