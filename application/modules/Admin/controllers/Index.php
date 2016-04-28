<?php
class IndexController extends BaseController  {
    public function indexAction() {


        $a = new \NodeModel();
        $sql = "select * from oa_node ;";
        $q = $a->querys($sql);
   	    var_dump($q);
    }



    public function welcomeAction()
    {
    	
    }



    public function skinconfigAction()
    {
    	
    }
}
?>