<?php
class IndexController extends Yaf_Controller_Abstract {

   public function indexAction() {//默认Action


   $this->getView()->assign("name","1");
    $this->getView()->display('index/index.php');

   }
   public function hAction()
   {


   	   Yaf_Dispatcher::getInstance()->autoRender(FALSE);
   }
}
?>