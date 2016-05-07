<?php

/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2016/5/8
 * Time: 1:33
 */
class Smarty_Adapter implements  Yaf_View_Interface
{
    /**
     * Smarty object
     * @var Smarty
     */
    public $_smarty;
    public $vvar;
    /**
     * Constructor
     *
     * @param string $tmplPath
     * @param array $extraParams
     * @return void
     */
    public function __construct($tmplPath = null, $extraParams = array()) {

        $current_dir = dirname(__FILE__);
        Yaf_Loader::import($current_dir . '/Smarty.class.php');
        Yaf_Loader::import($current_dir . '/sysplugins/smarty_internal_templatecompilerbase.php');
        Yaf_Loader::import($current_dir . '/sysplugins/smarty_internal_templatelexer.php');
        Yaf_Loader::import($current_dir . '/sysplugins/smarty_internal_templateparser.php');
        Yaf_Loader::import($current_dir . '/sysplugins/smarty_internal_compilebase.php');
        Yaf_Loader::import($current_dir . '/sysplugins/smarty_internal_write_file.php');
        $this->_smarty = new Smarty;

        if (null !== $tmplPath) {
            $this->setScriptPath($tmplPath);
        }
        if(!is_dir($extraParams['compile_dir'])){
            mkdir($extraParams['compile_dir']);
        }
        foreach ($extraParams as $key => $value) {
            $this->_smarty->$key = $value;
        }
        $this->vvar=new ArrayObject(array(),ArrayObject::ARRAY_AS_PROPS);//可以更方便的设置模版变量
    }

    /**
     * Return the template engine object
     *
     */
    public function getEngine() {
        return $this->_smarty;
    }

    public function setScriptPath($path)
    {
        if (is_readable($path)) {
            $this->_smarty->template_dir = $path;
            return;
        }

        throw new Exception('Invalid path provided');
    }

    public function getScriptPath()
    {
        return $this->_smarty->template_dir;
    }

    public function setBasePath($path, $prefix = 'Zend_View')
    {
        return $this->setScriptPath($path);
    }

    public function addBasePath($path, $prefix = 'Zend_View')
    {
        return $this->setScriptPath($path);
    }

    public function __set($key, $val)
    {
        $this->_smarty->assign($key, $val);
    }

    public function __isset($key)
    {
        return (null !== $this->_smarty->get_template_vars($key));
    }

    public function __unset($key)
    {
        $this->_smarty->clear_assign($key);
    }

    public function assign($spec, $value = null) {
        if (is_array($spec)) {
            $this->_smarty->assign($spec);
            return;
        }

        $this->_smarty->assign($spec, $value);
    }

    public function clearVars() {
        $this->_smarty->clear_all_assign();
    }

    public function render($name, $value = NULL) {
        return $this->_smarty->fetch($name);
    }

    public function display($name, $value = NULL) {
        $arr=  $this->vvar->getArrayCopy();
        $this->_smarty->assign($arr);//此处不明白display的调用，去掉了$this->_smarty->display($name);
    }
}