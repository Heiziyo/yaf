<?php
class dbfactory{

    /**
     * 当前数据库工厂类静态实例
     */
    private static $db_factory;

    /**
     * 数据库配置列表
     */
    protected $db_config = array();

    /**
     * 数据库操作实例化列表
     */
    protected $db_list = array();

    /**
     * 构造函数
     */
    public function __construct() {
    }
    public static function getInstance($db_config = ''){
        if($db_config == '') {
            $db_config = Yaf_Application::app()->getConfig()->config->toArray();
        }

        if(dbfactory::$db_factory == null){
            dbfactory::$db_factory = new dbfactory();
        }
       if($db_config != '' && $db_config != dbfactory::$db_factory->db_config) {
           dbfactory::$db_factory->db_config = array_merge($db_config, dbfactory::$db_factory->db_config);
       }
        return dbfactory::$db_factory;
    }
    /**
     * 获取数据库操作实例
     * @param $db_name 数据库配置名称
     */
//    public function get_database($db_name) {
//        if(!isset($this->db_list[$db_name]) || !is_object($this->db_list[$db_name])) {
//            $this->db_list[$db_name] = $this->connect($db_name);
//        }
//        return $this->db_list[$db_name];
//    }
    /**
     * 获取数据库操作实例
     * @param $db_name 数据库配置名称
     */
    public function get_database($db_name) {
       $this->db = $this->connect($db_name);
       return $this->db;
    }
    /**
     *  加载数据库驱动
     * @param $db_name 	数据库配置名称
     * @return object
     */
    public function connect($db_name) {

        $object = null;
        switch($this->db_config['type']) {
            case 'mysql' :
                Yaf_Loader::import("/mysql.php");
                $object = new mysql();
                break;
            case 'mysqli' :
                Yaf_Loader::import("/dbmysqli.php");
                $object = new dbmysqli();
                break;
            default :
                Yaf_Loader::import("/mysql.php");
                $object = new mysql();
        }
        $object->open($this->db_config);
        return $object;
    }

    /**
     * 关闭数据库连接
     * @return void
     */
    protected function close() {

        foreach($this->db_list as $db) {

            //$db->close();
        }
    }

    /**
     * 析构函数
     */
    public function __destruct() {
        $this->close();
    }
}