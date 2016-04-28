<?php

class NodeController extends BaseController{




	public function indexAction()
	{
		
	}


	public function addAction()
	{
		if(isset($_POST) && !empty($_POST)){
			var_dump($_POST);
		}
	}

}