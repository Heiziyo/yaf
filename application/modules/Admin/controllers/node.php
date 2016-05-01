<?php

class NodeController extends BaseController{




	public function indexAction()
	{
		
	}


	public function addAction()
	{
		if(isset($_POST) && !empty($_POST)){

			$node = new NodeModel();

			//parentid name model  controller action status

			$parentid = $_POST['parentid'];
			$name = $_POST['name'];
			$model = $_POST['model'];
			$action = $_POST['action'];
			$controller = $_POST['controller'];
			$status = $_POST['status'];
			$sql = ' insert into oa_node (`parentid`,`name`,`model`,`controller`,`action`,`status`) values ("'.$parentid.'","'.$name.'","'.$model.'","'.$controller.'","'.$action.'","'.$status.'")';
			var_dump($sql);
			$node->query($sql);

		}
	}

}