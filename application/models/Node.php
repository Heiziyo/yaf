<?php

class NodeModel extends Db {
	public function __construct() {
		$this->db_setting = 'database';
		$this->table_name = 'node';
		parent::__construct();
	}
}
