<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/5/5
 * Time: 18:03
 */

//加载配置文件
$config = Yaf_Application::app()->getConfig();
class dbmysqli
{
    /**
     * 打开数据库连接,有可能不真实连接数据库
     * @param $config	数据库连接参数
     *
     * @return void
     */
    public function open($config) {
        $this->config = $config;
        $this->connect();

    }

    public function connect(){
        $this->link = new mysqli($this->config['host'], $this->config['user'], $this->config['pwd'], $this->config['name'], $this->config['port']?intval($this->config['port']):3306);
    }
}