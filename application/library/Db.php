<?php
class Db{

	//连接句柄
	private $content = null;

	//构造函数 初始化连接
	public function __construct($options=null){

		
		try {
		    $this->content = new PDO('mysql:host=localhost;dbname=yafoa', "root", "root");
		} catch (PDOException $e) {
		    print "Error!: " . $e->getMessage() . "<br/>";
		    die();
		}
	}
	public function querys($sql = "")
		{

			$tables = $this->table_name;
			$r =  $this->content->query($sql);
			$data = array();
			foreach ($r as $key => $value) {
				$data[$key] = $value;
			}
			return $data;
		}
}