<?php
class IndexController extends Yaf_Controller_Abstract {
   public function indexAction() {//默认Action

      $db_config = Yaf_Application::app()->getConfig();
      $db_config = $db_config['database']['config'][''];
      var_dump((array)$db_config);
       $this->getView()->assign("content", "Hello World");
   }
   public function hAction()
   {


   	   Yaf_Dispatcher::getInstance()->autoRender(FALSE); 
   }
}
?>