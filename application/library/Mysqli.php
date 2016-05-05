<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/5/5
 * Time: 18:03
 */

//加载配置文件
$config = Yaf_Application::app()->getConfig();
class Mysqli
{
    /**
     * 打开数据库连接,有可能不真实连接数据库
     * @param $config	数据库连接参数
     *
     * @return void
     */
    public function open($config) {
        $this->config = $config;
        if($config['autoconnect'] == 1) {
            $this->connect();
        }
    }

    public function connect(){
        var_dump($this->config);
        $this->link = new mysqli($this->config['hostname'], $this->config['username'], $this->config['password'], $this->config['database'], $this->config['port']?intval($this->config['port']):3306);

    }
}