<?php

class NodeModel extends Model {
	public function __construct() {
		$this->db_config = Yaf_Application::app()->getConfig();
		$this->db_setting = 'database';
		$this->table_name = 'node';
		parent::__construct();
	}
}
