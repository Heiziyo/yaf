<?php
class Db{

	//连接句柄
	private $content = null;

	//构造函数 初始化连接
	public function __construct($options=null){

		
		try {
		    $this->content = new PDO('mysql:host=localhost;dbname=yafoa', "root", "root");
		    $this->content->exec("SET names utf8");
		} catch (PDOException $e) {
		    print "Error!: " . $e->getMessage() . "<br/>";
		    die();
		}
	}
	public function query($sql = "")
		{

			
			$r =  $this->content->query($sql);
			
			
		}
}