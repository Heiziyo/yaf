<?php

class NodeController extends BaseController{

	public function indexAction()
	{
		$node = new NodeModel();
		$tree = new Tree();
		$res = $node->select();
		$data = array();
		foreach ($res as $k=>$v){
			$data[$k]['id'] = $v['id'];
			$data[$k]['parentid']=  $v['parentid'];
			$data[$k]['name'] = $v['name'];
			$data[$k]['manage'] = "删除|修改";
		}
		$str = "<tr><td>\$id</td><td>\$spacer\$name</td><td>\$manage</td></tr>";
		$tree->init($data);
		$ptree = $tree->get_tree(0, $str);
		$this->getView()->assign("tree", $ptree);

	}

	public function addAction()
	{
		$node = new NodeModel();
		if(isset($_POST) && !empty($_POST)){
			$data['parentid'] = $_POST['parentid'];
			$data['name'] = $_POST['name'];
			$data['model'] = $_POST['model'];
			$data['action'] = $_POST['action'];
			$data['controller'] = $_POST['controller'];
			$data['status'] = $_POST['status'];
			$res = $node->insert($data);
			if($res){
				$this->forward("index");
			}
		}else{
			$tree = new Tree();
			$res = $node->select();
			$data = array();
			foreach ($res as $k=>$v){
				$data[$k]['id'] = $v['id'];
				$data[$k]['parentid']=  $v['parentid'];
				$data[$k]['name'] = $v['name'];
			}
			$str = "<option value=\$id >\$spacer\$name</option>";
			$tree->init($data);
			$ptree = $tree->get_tree(0, $str);
			$this->getView()->assign("tree", $ptree);
		}
	}
	public function edit()
	{
		
		
	}
	public function delete()
	{
		
	
	}
}