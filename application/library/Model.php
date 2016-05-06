<?php
Yaf_Loader::import("/library/dbfactory.php");
class Model{
	//数据库配置
	protected $db_config = '';
	//数据库连接
	protected $db = '';
	//调用数据库的配置项
	protected $db_setting = 'database';
	//数据表名
	protected $table_name = '';
	//表前缀
	public  $db_tablepre = '';


	public function __construct() {
		if (!isset($this->db_config[$this->db_setting])) {
			$this->db_setting = 'database';
		}
		$this->db_config = $this->db_config->database->config->toArray();

		//$this->table_name = $this->db_config[$this->db_setting]['config']['tablepre'].$this->table_name;
		//$this->db_tablepre = $this->db_config[$this->db_setting]['config']['tablepre'];
		$this->db = dbfactory::getInstance($this->db_config)->get_database($this->db_setting);
	}
}