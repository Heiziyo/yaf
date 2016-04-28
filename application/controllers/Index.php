<?php
class IndexController extends Yaf_Controller_Abstract {
   public function indexAction() {//默认Action

   	
       $this->getView()->assign("content", "Hello World");
   }
   public function hAction()
   {
 
   	   Yaf_Dispatcher::getInstance()->autoRender(FALSE); 
   }
}
?>